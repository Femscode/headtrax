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
        return view('frontend.blog', $data);
    }
    public function blogdetails($id, $slug)
    {
        $data['blog'] = Blog::find($id);
        return view('frontend.blogdetails', $data);
    }
    public function service_section($slug)
    {
        if ($slug == 'bfsi') {
            return view('frontend.services.bfsi');
        } elseif ($slug == 'food_and_beverages') {
            return view('frontend.services.food_and_beverages');
        } elseif ($slug == 'retail') {
            return view('frontend.services.retail');
        } elseif ($slug == 'healthcare') {
            return view('frontend.services.healthcare');
        } elseif ($slug == 'advertising') {
            return view('frontend.services.advertising');
        } elseif ($slug == 'real_estate') {
            return view('frontend.services.real_estate');
        } elseif ($slug == 'travel_and_hospitality') {
            return view('frontend.services.travel_and_hospitality');
        } elseif ($slug == 'education') {
            return view('frontend.services.education');
        } elseif ($slug == 'media') {
            return view('frontend.services.media');
        } else {
            return view('frontend.services.government');
        }
    }
    public function savecontact(Request $request)
    {
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
