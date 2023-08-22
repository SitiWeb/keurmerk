<?php

namespace App\Http\Controllers;
use App\Models\User; 
use App\Models\Website; 
use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    public function store(Request $request, $id)
    {
        // Retrieve the website by its ID
        $website = Website::findOrFail($id);
        $fields = [
            'published',
            'identity',
            'companyInfo',
            'complaints',
            'odr',
            'rightToWithdraw',
            'privacyPolicy',
            'cookiePolicy',
            'dataRights',
            'privacyHandling',
            'logicalContactInfo',
            'telefoonnummer',
            'adres',
            'emailadres',
            'logicalKVK',
            'logicalBTW',
            'retourrechtsgeldig',
            'retourprocedure',
            'klachtrechtsgeldig',
            'odr',
            'inbtw',
            'optional_fields',
            'newsletter_option',
        ];
        // Assuming you have a separate table for storing the checklist data, you can store the data like this:
        $checklistData = $request->only($fields);
        foreach($fields as $field){
            $result[$field] = false;
            if (isset($checklistData[$field]) && $checklistData[$field] == 'on'){
                $result[$field] = true;
            }
        }
      
        // Assuming you have a separate table/model for storing checklist data related to the website
        // You can create or update the checklist data like this:
        $website->checklist()->updateOrCreate(['website_id' => $website->id], $result);
    
        // Optionally, you can redirect the user to another page or display a success message here.
        return redirect()->route('websites.show', ['website' => $website->id])->with('success', 'Checklist data saved successfully.');
    }
    public function checking($id){
        // Fetch all websites from the database using the Website model
        $website = Website::find($id);
        $checklist = $website->checklist;
        // Return a view and pass the $websites data to it
        return view('websites.checking', ['website' => $website, 'checklist'=> $checklist]);
   }
}
