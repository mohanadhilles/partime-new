<?php
/*
added by hani usif
*/
namespace App\Http\Controllers;

use App;

use App\Category;


class IndexController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function getCategory(){


    	$functional_areas = Category::whereShowInJobs(1)->orderBy('sort_order')->paginate(20);

        return view('jobs')->with('functional_areas',$functional_areas);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		

		$functional_areas = Category::whereShowInHome(1)->orderBy('count_jobs','sort_order')->limit(8)->get();

        return view('guest')->with('functional_areas', $functional_areas) ;
    }
	
	public function setLocale(Request $request)
    {
		$locale = $request->input('locale');
		$return_url = $request->input('return_url');
		$is_rtl = $request->input('is_rtl');
		$localeDir = ((bool)$is_rtl)? 'rtl':'ltr';
		
		session(['locale'=>$locale]);
		session(['localeDir'=>$localeDir]);
		
		return Redirect::to($return_url);
    }

}
