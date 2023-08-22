<?php

namespace App\Http\Controllers;
use App\Models\User; 
use App\Models\Website; 
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
         // Fetch all websites from the database using the Website model
         $websites = Website::all();

         // Return a view and pass the $websites data to it
         return view('websites.index', ['websites' => $websites]);
    }
    public function show($id){
        // Fetch all websites from the database using the Website model
        $website = Website::with('checklist')->find($id);
        $checklist = $website->checklist;
        $plan = 'Maand';
  
        $name = ucfirst($plan) . ' membership';

        // Return a view and pass the $websites data to it
        return view('websites.show', ['website' => $website, 'checklist' => $checklist]);
   }


    
}
