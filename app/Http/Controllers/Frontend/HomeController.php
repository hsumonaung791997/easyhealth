<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\Location;
use App\Model\Whyus;
use App\Model\Doctor;
use App\Model\Service;
use App\Model\Partner;
use App\Model\Team;
use App\Model\ValueProposition;
use DB;


class HomeController extends Controller
{
	public function index()
	{
        $locations = Location::all();
        $ourservices = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', NULL)->get();
        $partners = Partner::all();
        $blogs = Blog::where('status', 1)->orderBy('id','DESC')->get();
        //$slide = Blog::where('status', 1)->orderBy('id','ASC')->take(3)->get();
        $whyus = Whyus::where('status', 1)->first();

		return view('frontend.index', compact('whyus','blogs','locations','partners','ourservices'));
	}

    public function whyus()
    {
        $locations = Location::all();
        $whyus = Whyus::where('status', 1)->first();
        $doctors = Doctor::where('status', 1)->orderBy('id','DESC')->take(3)->get();
        $values = ValueProposition::all();

        return view('frontend.whyus', compact('locations', 'whyus', 'doctors','values'));
    }

    public function appointment_form() 
    {
    	return view('frontend.appointment_form');
    }

    public function blogs_detail(Request $request, $id) 
    {
        $blog = Blog::find($id);
        $health_details = Blog::orderBy('id', 'DESC')->where([
                    ['type', '=', 18],
                    ['status', '=', 1],
                ])->take(3)->get();

        return view('frontend.blogs_detail', compact('blog', 'health_details'));
    }

    public function management_team() 
    {
        $locations = Location::all();
        $teams = Team::all();

        return view('frontend.management_team', compact('locations','teams'));
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

    public function compare_health_assessments() 
    {
        return view('frontend.compare_health_assessments');
    }

    public function contact()
	{
		$locations = Location::all();
        
        return view('frontend.contact', compact('locations'));
	}

    public function health_assessments($id) 
    {
        $locations = Location::all();
        $hs_li = Service::orderBy('id','DESC')->where('type', 12)->get();

        return view('frontend.health_assessments', compact('locations','hs_li'));
    }

    public function privacy_policy()
    {
        $locations = Location::all();

    	return view('frontend.privacy_policy', compact('locations'));
    }

    public function our_doctor()
    {
        $locations = Location::all();
        $ourdoctors = Doctor::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('frontend.our_doctor', compact('locations','ourdoctors'));
    }


    public function ourservices() 
    {
        $locations = Location::all();
        $ourservices = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', NULL)->get();   
        return view('frontend.our_services',compact('locations', 'ourservices'));
    }

    public function gp_services($id)
    {
        $gp_service = Service::find($id);
        $gpminiservices = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', '!=', NULL)->where('type', 11)->get();
        $locations = Location::all();
        return view('frontend.gp_services', compact('gpminiservices', 'locations', 'gp_service'));  
    }

    public function healthassessments($id)
    {
        $health_assessment = Service::find($id);
        $hsminiservices = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', '!=', NULL)->where('type', 12)->get();
        $locations = Location::all();
        return view('frontend.health_assessments', compact('health_assessment', 'hsminiservices', 'locations'));
    }

    public function other($id)
    {
        $otherservice = Service::find($id);
        $otherminiservices = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', '!=', NULL)->where('type', 13)->first();
        $locations = Location::all();
        $health_assessment = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', '=', NULL)->where('type', 12)->first();
        return view('frontend.mini_pharmacies', compact('otherservice', 'otherminiservices', 'locations', 'health_assessment'));
    }
    
    public function gp_detail($id)
    {
        $locations = Location::all();
        $detail = Service::find($id);
        $hs = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', NULL)->where('type', 12)->first();

        return view('frontend.gp_detail', compact('locations','detail','hs'));
    }

    public function newsblogs(Request $request)
    {

        $data = $request->all();
        $locations = Location::all();
        if (!empty($data)) {
            if (0 == $data['type']) {
                return redirect(url('news_blogs'));
            }

            $newsblogs = Blog::where('type', $data['type'])->get();
        } else {
            $newsblogs = Blog::where('status', 1)->get();
        }

        return view('frontend.news_blogs', compact('newsblogs', 'locations'));
    }

    public function blogs_details($id) 
    {
        $blog = Blog::find($id);
        $locations = Location::all();
        $blog_details =  Blog::where([
                    ['type', '=', 18],
                    ['status', '=', 1],
                ])->take(3)->get();
         
            return view('frontend.blogs_detail', compact('blog_details','blog','locations'));
    }

    public function pressreleasedetails($id)
    {
        $blog = Blog::find($id);
        $locations = Location::all();
        $pressreleasedetails = BLog::where([
                    ['type', '=', 17],
                    ['status', '=', 1],
                ])->get();

        return view('frontend.press_release_details', compact('pressreleasedetails', 'blog', 'locations'));
    }

    public function location_detail($id)
    {
        $location = Location::find($id);
        $locations = Location::all();
        return view('frontend.location_detail', compact('location', 'locations'));
    }

    public function search($id)
    {
      $blogs= DB::table('blogs')->select('blogs.*')->where('blogs.id', $id);
        return $blogs;
    }

    public function gmaps()
    {
        $locations = DB::table('locations')->get();
        return view('frontend.gmaps', compact('locations'));
    }
        
}
