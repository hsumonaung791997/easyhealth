<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
	{
		return view('frontend.index');
	}

    public function appointment_form() 
    {
    	return view('frontend.appointment_form');
    }

    public function blogs_detail() 
    {
        return view('frontend.blogs_detail');
    }

    public function blogs() 
    {
        return view('frontend.blogs');
    }

    public function compare_health_assessments() 
    {
        return view('frontend.compare_health_assessments');
    }

    public function contact()
	{
		return view('frontend.contact');
	}

    public function gp_services() 
    {
    	return view('frontend.gp_services');
    }

    public function health_assessments() 
    {
        return view('frontend.health_assessments');
    }

    public function management_team() 
    {
        return view('frontend.management_team');
    }

    public function men_health() 
    {
        return view('frontend.men_health');
    }

    public function mini_pharmacies()
    {
    	return view('frontend.mini_pharmacies');
    }

    public function our_doctors()
    {
    	return view('frontend.our_doctors');
    }

    public function press_release_details()
    {
    	return view('frontend.press_release_details');
    }

    public function press_release()
    {
    	return view('frontend.press_release');
    }

    public function privacy_policy()
    {
    	return view('frontend.privacy_policy');
    }

    public function whyus()
    {
    	return view('frontend.whyus');
    }

    public function women_health()
    {
    	return view('frontend.women_health');
    }
}
