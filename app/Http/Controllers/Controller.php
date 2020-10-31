<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request){

	    try{
	        $groups = Group::select('id','name_'.app()->getLocale().' as name','category_id','created_at','approval')

	        ->when($request->search , function($query) use($request){

	            return $query->where('name_'.app()->getLocale(),'like','%'.$request->search.'%')

	                ->orWhere('id', $request->search);

	        })->latest()->paginate(10);


	        return view('dashboard.groups.index',[

	            'groups' => $groups 

	        ]);

	       
	    }catch (\Throwable $th) {

	       
	    }

	}// end index function
}
