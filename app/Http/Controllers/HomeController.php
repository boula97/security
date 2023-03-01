<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\Contact;
use App\Models\Job;
use App\Models\NewsLetter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function blog()
    {
        return view('front.blogs');
    }
    public function single_service($id)
    {
        $service=Service::findorfail($id);
        return view('front.single_service',compact('service'));
    }

    public function contact_form(Request $request){

        Contact::create($request->all());
        return redirect()->back();
    }
    public function job_form(Request $request){

        Job::create($request->all());
        return redirect()->back();
    }
    public function newsletter_form(Request $request){

        NewsLetter::create($request->all());
        return redirect()->back();
    }

    
}
