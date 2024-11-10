<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Bank;
use App\Models\Blog;
use App\Models\BulkSMSTransaction;
use App\Models\CancelWaybill;
use App\Models\CdsGroup;
use App\Models\ComingSoon;
use App\Models\Contact;
use App\Models\MySession;
use App\Models\Notification;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Waybill;
use App\Traits\TransactionTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    use TransactionTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function logout()
    {
        Auth::logout();
        // return Redirect::route('login');
        Session::flush();

        return Redirect::away('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        return redirect('/dashboard');
    }

    public function setpin(Request $request)
    {
        $this->validate($request, [
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'first' => 'required',
            'user_id' => 'required'
        ]);
        $pin = $request->first . $request->second . $request->third . $request->fourth;

        $hashed_pin = hash('sha256', $pin);

        $user = User::where('uuid', $request->user_id)->firstOrFail();
        $user->pin = $hashed_pin;
        $user->save();
        return true;
    }
    public function dashboard()
    {

        $data['user'] = $user = Auth::user();
        $data['allcontacts'] = Contact::all();
        $data['contacts'] = Contact::latest()->take(5);
        $data['allblogs'] = Blog::get();
        $data['blogs'] = Blog::latest()->take(3)->get();
        $data['active'] = 'dashboard';
        return response()->view('dashboard.index', $data);
    }
    public function blogs()
    {
        $data['user'] = $user = Auth::user();
        $data['allblogs'] = Blog::get();
        $data['blogs'] = Blog::latest()->paginate(3);
        $data['active'] = 'dashboard';
        return response()->view('dashboard.blog', $data);
    }
    public function contact()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'dashboard';
        $data['allcontacts'] = Contact::get();
        $data['contacts'] = Contact::latest()->paginate(10);
        return response()->view('dashboard.contact', $data);
    }
    public function createblog()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'dashboard';
        return response()->view('dashboard.createblog', $data);
    }

    public function saveblog(Request $request) {
       
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
            'image' => 'required',
            'category' => 'required',
           
        ]);
        $data = $request->all();
        if ($request->image !== null) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('blog_images'), $imageName);
        }
        $data['created_by'] = Auth::user()->id;
        $data['image'] = $imageName;
        $contact = Blog::create($data);
        return true;
        
    }


    public function notifications()
    {

        $data['user'] = $user = Auth::user();
        $data['cdsgroup'] = CdsGroup::find($user->cdsgroup);


        $data['active'] = 'notifications';


        $data['announcements'] = Notification::where('cdsgroup', $user->cdsgroup)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();

        return response()->view('dashboard.notification', $data);
    }


    public function delete_order(Request $request)
    {
        $session = MySession::find($request->id);
        $session->delete();
        return true;
    }
    public function profile()
    {
        $data['user'] = Auth::user();
        $data['active'] = 'profile';
        return view('dashboard.profile', $data);
    }
    public function process_order(Request $request)
    {
        $response = Http::post(env('SECOND_APP') . '/api/process_order', [
            'order_id' => $request->order_id,

        ]);
        return $response;

        dd($request->all());
    }
    public function resend_verification()
    {
        $auth_user = Auth::user();
        $user = User::where('id', $auth_user->id)->first();
        if ($user->email_resend <= 3) {
            $user->email_resend += 1;
            $user->save();
            $user->sendEmailVerificationNotification();
            return redirect()->back()->with('message', 'Verification mail sent successfully!');
        } else {
            return redirect()->back()->with('message', 'Maximum amount of time to resend email reached!');
        }
    }
    public function fundwallet()
    {


        $data['user'] = $user = Auth::user();
        $data['active'] = 'fundwallet';
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Payment Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        return view('dashboard.fundwallet', $data);
    }
    public function withdraw()
    {

        $data['user'] = $user = Auth::user();
        $data['active'] = 'fundwallet';


        return view('dashboard.withdraw', $data);
    }
    public function confirm_account(Request $request)
    {
        // dd($request->all());
        $url = "https://api.paystack.co/transferrecipient";

        $fields = [
            'type' => "nuban",
            'name' => "",
            'account_number' => $request->account_no,
            'bank_code' => $request->bank_code,
            'currency' => "NGN"
        ];

        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
            "Cache-Control: no-cache",
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute post
        $result = curl_exec($ch);
        $res_json = json_decode($result, true);
        if ($res_json['status'] == true) {
            return $res_json;
        }
        return false;
        dd($res_json);
    }

    public function make_transfer(Request $request)
    {

        $this->validate($request, [
            'amount' => 'required'
        ]);
        $user = Auth::user();

        $user_pin = $request->first . $request->second . $request->third . $request->fourth;
        // dd($user_pin);

        $hashed_pin = hash('sha256', $user_pin);
        if ($user->pin !== $hashed_pin) {
            // return "Incorrect pin";
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin',

            ];

            return response()->json($response);
        }

        // if ($user->balance < $request->amount) {
        //     return "Insufficient Balance";
        //     $response = [
        //         'success' => false,
        //         'message' => 'Insufficient Balance',

        //     ];

        //     return response()->json($response);
        // }
        $waybill = Waybill::where('uid', $request->waybillId)->first();

        $reference = 'fund_withdraw_' . Str::random(7);

        $details = "Withdraw of NGN " . $request->amount . " to " . $request->account_no . ' (' . $request->bank_name . ')' . ' Account Name: ' . $request->account_name;

        $tranx =  $this->create_transaction('Funds Withdraw', $reference, $details, 'debit', $request->amount, $user->id, 2, $request->waybillId);

        $waybill->status = 4;
        $title = "Waybill Withdrawal Request";
        $this->create_activity($waybill->uid, $user->id, $title, $details, 7);

        $waybill->save();
        // $data = array('username' => $user->name, 'tranx_id' => $tranx->id,  'amount' => $request->amount);
        // dd($data);
        // $amount = $request->amount;

        // Mail::send('mail.withdraw_request', $data, function ($message) use($amount){
        //     $message->to('fasanyafemi@gmail.com')->subject("Withdrawal request of NGN". $amount);
        //     $message->from('support@vtubiz.com', 'VTUBIZ');
        // });
        // return true;

        $response = [
            'success' => true,
            'status' => true,
            'message' => 'Withdraw on pending',

        ];

        return response()->json($response);
    }
    public function make_transfer_with_paystack(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required'
        ]);
        $user = Auth::user();
        $user_pin = $request->first . $request->second . $request->third . $request->fourth;

        $hashed_pin = hash('sha256', $user_pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin',

            ];

            return response()->json($response);
        }
        $url = "https://api.paystack.co/transfer";
        $reference = 'my-unique-reference-' . strtolower(preg_replace('/[0-9]/', '', Str::random(3)));
        $amount = ($request->amount * 100) + 100;
        //the pin validation here;

        if ($user->balance < $request->amount + 100) {
            $response = [
                'success' => false,
                'message' => 'Insufficient Balance',

            ];

            return response()->json($response);
        }
        $fields = [
            'source' => "balance",
            'amount' => $amount - 100,
            "reference" => $reference,
            'recipient' => $request->recipient_code,
            'reason' => "CT_TASTE VENDOR PAYOUT"
        ];

        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
            "Cache-Control: no-cache",
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute post
        $result = curl_exec($ch);
        echo $result;
        $res_json = json_decode($result, true);

        if ($res_json['status'] == true) {
            $details = "Withdraw of NGN " . $request->amount . " to " . $request->account_name;
            $this->create_transaction('Funds Withdraw', $reference, $details, 'debit', $request->amount + 100, $user->id, 1);

            $user->balance -= $request->amount + 100;
            $user->save();

            return $res_json;
        } else {
            $details = "Failed Withdraw of NGN " . $request->amount . " to " . $request->account_name;
            $this->create_transaction('Funds Withdraw', $reference, $details, 'debit', $request->amount + 100, $user->id, 0);

            $user->balance -= $request->amount + 100;
            $user->save();

            return $res_json;
        }
        return false;
        dd($res_json);
    }
    public function transactions()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'transaction';

        $data['transactions'] = Transaction::where('user_id', $user->id)->latest()->get();

        if ($user->type == 'admin') {
            return view('business_backend.mytransactions', $data);
        }
        return view('dashboard.transactions', $data);
    }
    public function activities()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'activities';

        $data['activities'] = Activity::where('user_id', $user->id)->latest()->get();


        return view('dashboard.activities', $data);
    }
    public function bulksms_transactions()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'transaction';
        $data['transactions'] = BulkSMSTransaction::where('user_id', $user->id)->latest()->get();

        return view('dashboard.bulksms_transactions', $data);
    }
    public function updateprofile(Request $request)
    {

        $user = Auth::user();
        if ($request->image !== null) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('brand_images'), $imageName);
            $user->image = $imageName;
        }


        $user->name = $request->name;
        $user->phone = $request->phone;

        $user->save();
        return redirect()->back()->with('message', 'User Profile Updated Successfully!');
    }
}
