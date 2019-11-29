<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Blog;
use App\Model\Location;
use App\Model\Whyus;
use App\Model\Doctor;

class HomeController extends Controller
{
	public function index()
	{
        $locations = Location::all();
        $whyus = Whyus::where('status', 1)->first();
		return view('frontend.index', compact('locations', 'whyus'));
	}

    public function appointment_form() 
    {
    	return view('frontend.appointment_form');
    }

    public function blogs_detail(Request $request, $id) 
    {
        $blog = Blog::find($id);
        $details = Blog::orderBy('id', 'DESC')->where('status', 1)->take(3)->get();

        if (empty($blog)) {
            Flash::error('blogs not found!');
            return redirect(route('blogs_detail'));
        }
        return view('frontend.blogs_detail', compact('blog','details'));
    }

    public function press_release()
    {
        $blogs = Blog::orderBy('id', 'DESC')->where('status', 1)->paginate(3);

        return view('frontend.press_release', compact('blogs'));
    }

    public function press_release_details(Request $request, $id)
    {
        $blog = Blog::find($id);
        $locations = Location::all();

        if (empty($blog)) {
            Flash::error('blogs not found!');
            return redirect(route('press_release'));
        }
        return view('frontend.press_release_details', compact('blog','locations'));
    }

    public function blogs(Request $request) 
    {
        $blogs = Blog::orderBy('id', 'ASC')->where('status', 1)->paginate(6);

        return view('frontend.blogs', compact('blogs'));
    }

    public function compare_health_assessments() 
    {
        return view('frontend.compare_health_assessments');
    }

    public function contact()
	{
		$locations = Location::all();
        
        return view('frontend.contact', compact('locations'));
	}

    public function gp_services() 
    {
        $locations = Location::all();

    	return view('frontend.gp_services', compact('locations'));
    }

    public function health_assessments() 
    {
        $locations = Location::all();

        return view('frontend.health_assessments', compact('locations'));
    }

    public function management_team() 
    {
        $locations = Location::all();

        return view('frontend.management_team', compact('locations'));
    }

    public function men_health() 
    {
        $locations = Location::all();

        return view('frontend.men_health', compact('locations'));
    }

    public function mini_pharmacies()
    {
        $locations = Location::all();

    	return view('frontend.mini_pharmacies', compact('locations'));
    }

    public function our_doctors()
    {
        $doctors = Doctor::where('status', 1)->get();

    	return view('frontend.our_doctor', compact('doctors'));
    }

    public function privacy_policy()
    {
    	return view('frontend.privacy_policy');
    }

    public function whyus()
    {
        $locations = Location::all();
        $whyus = Whyus::where('status', 1)->first();
        $doctors = Doctor::where('status', 1)->take(3)->get();

    	return view('frontend.whyus', compact('locations', 'whyus', 'doctors'));
    }

    public function women_health()
    {
        $locations = Location::all();

    	return view('frontend.women_health', compact('locations'));
    }
}
