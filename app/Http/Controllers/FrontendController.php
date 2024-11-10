<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
       
    }
    public function about()
    {
        return view('frontend.about');
       
    }
    public function contact()
    {
        return view('frontend.contact');
       
    }
    public function services()
    {
        return view('frontend.services');
       
    }
    public function blogs()
    {
        $data['blogs']  = Blog::latest()->paginate(10);
        return view('frontend.blog',$data);
       
    }
    public function blogdetails($id,$slug)
    {
        $data['blog'] = Blog::find($id);
        return view('frontend.blogdetails',$data);
       
    }
    public function savecontact(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $data = $request->all();
        $contact = Contact::create($data);
        return true;
        
    }
}
