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

class HomeController extends Controller
{
	public function index()
	{
        $locations = Location::all();
        $whyus = Whyus::where('status', 1)->first();
        $ourservices = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', NULL)->get();
        $partners = Partner::all();
        // $blogs = Blog::where('status', 1)->paginate(3);
        $blogs = Blog::where('status', 1)->orderBy('id','DESC')->take(3)->get();
        $slide = Blog::where('status', 1)->orderBy('id','ASC')->take(3)->get();
        $whyus = Whyus::where('status', 1)->get();

		return view('frontend.index', compact('whyus','blogs','locations','partners','slide', 'ourservices'));
	}

    public function whyus()
    {
        $locations = Location::all();
        $whyus = Whyus::where('status', 1)->get();
        // $teams = Team::all();
        $doctors = Doctor::where('status', 1)->orderBy('id','DESC')->take(2)->get();
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

    public function health_assessments() 
    {
        $locations = Location::all();

        return view('frontend.health_assessments', compact('locations'));
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

    
    public function women_health($id)
    {
        $locations = Location::all();
    	return view('frontend.women_health', compact('locations'));
    }

    public function newsblog($id)
    {
 
        $blogs = Blog::where([
                    ['type', '=', $id],
                    ['status', '=', 1],
                ])->paginate(6);   
       /* $blogs = Blog::orderBy('id', 'ASC')->where('status', 1)->where('type', $id)->paginate(6);*/
        if($id == 17) {
            return view('frontend.press_release', compact('blogs'));
        } else {
            return view('frontend.health_blogs', compact('blogs'));
        }
    }

    public function ourservices() 
    {
        $locations = Location::all();

        $ourservices = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', NULL)->get();   
        return view('frontend.our_services',compact('locations', 'ourservices'));
    }

    public function miniservices($id)
    {
        $ourservices = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', NULL)->where('type', 11)->first(); 
        $miniservices = Service::orderBy('id', 'DESC')->where('status', 1)->where('parent', '!=', NULL)->where('type', 11)->get();
        $locations = Location::all();

        return view('frontend.gp_services', compact('miniservices', 'locations', 'ourservices'));
        
    }

    public function newsblogs()
    {
        $newsblogs = Blog::where('status', 1)->get();
        //dd($newsblogs);
        $locations = Location::all();
        return view('frontend.news_blogs', compact('newsblogs', 'locations'));
    }

    public function blogs_details(Request $request, $id) 
    {
        $blog = Blog::find($id);
        $blog_details = Blog::orderBy('id', 'DESC')->where('status', '=', 1)->take(3)->get();
        $locations = Location::all();
        if (empty($blog)) {
            Flash::error('blogs not found!');
            return redirect(route('blogs_detail'));
        }
        return view('frontend.blogs_detail', compact('blog', 'blog_details', 'locations'));
    }

    public function men_health() 
    {
        $locations = Location::all();

        return view('frontend.men_health', compact('locations'));
    }

    public function menhealth_detail(Request $request, $id) 
    {
        $locations = Location::all();
        $detail = Service::find($id);
        
        return view('frontend.men_health', compact('locations', 'detail'));
    }

    public function location_detail($id)
    {
        $location = Location::find($id);
        $locations = Location::all();
        return view('frontend.location_detail', compact('location', 'locations'));
    }

    public function search($id){
      $blogs= DB::table('blogs')->select('blogs.*')->where('blogs.id', $id);
        return $blogs;
    }

}
