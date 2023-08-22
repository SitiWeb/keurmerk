<?php

namespace App\Http\Controllers;
use App\Models\User; 
use App\Models\Website; 
use Illuminate\Http\Request;
use Laravel\Cashier\SubscriptionBuilder\RedirectToCheckoutResponse;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function syncUsers(Request $request)
    {
        $wordpressUrl = 'https://jeeigenwebshop.nl/wp-json/myplugin/v1/users';
        $response = file_get_contents($wordpressUrl);
        $usersData = json_decode($response, true);
    
        // $usersData = $request->json()->all();

        foreach ($usersData as $userData) {
            // Check if the user already exists in your Laravel database based on email
            $user = User::where('email', $userData['email'])->first();

            if ($user) {
                $this->syncWebsites($userData,$user);
                // User exists, update the user's data
                $user->name = $userData['name'];
                $user->save();
            } else {
                // User does not exist, create a new user
                User::create([
                    'name' => $userData['name'],
                    'email' => $userData['email'],
                    'password' => bcrypt('randompassword'), // You can generate a random password or handle it differently
                    'api_key' => $this->generate_api_key(),
                ]);
            }
        }

        return response()->json(['message' => 'Users synchronized successfully']);
    }

    public function regenerateApiKey(Request $request)
    {
        $user = $request->user();
        $user->api_key = $this->generate_api_key();
        $user->save();

        return redirect()->back()->with('success', 'API key regenerated successfully.');
    }

    public function generate_api_key(){
        // Generate a random API key
        $apiKey = 'dev_' . Str::random(40); // You can adjust the length as needed
        return $apiKey;
    }

    public function syncWebsites($data,$user){
        if ($data['posts']){
            foreach ($data['posts'] as $post){
                $title = $post['title'];
                $wordpress_id = $post['id'];
                $content = $post['content'];
                $url = $post['url'];

                $webdata = [
                    'name' => $title,
                    'url' => $url,
                    'wordpress_id' => $wordpress_id,
                    'user_id' => $user->id
                ];
                
               
                $website = Website::updateOrCreate(['wordpress_id' => $wordpress_id], $webdata);

               
            }
        }
  
        // // Find the user by ID or any other method
        // $user = User::find(1);

        // // Create websites for the user
        // $websites = [
        //     ['name' => 'Website 1', 'url' => 'https://example.com', 'wordpress_id' => 123],
        //     ['name' => 'Website 2', 'url' => 'https://example2.com', 'wordpress_id' => 456],
        // ];

        // foreach ($websites as $websiteData) {
        //     $user->websites()->create($websiteData);
        // }
    }

    public function createSub($id){
        $website = Website::find($id);
        $plan = 'Maand';

        $name = ucfirst($plan) . ' membership';

        if(!$website->subscribed($name, $plan)) {

            $result = $website->newSubscription($name, $plan)->create();

            if(is_a($result, RedirectToCheckoutResponse::class)) {
                return $result; // Redirect to Mollie checkout
            }

            return back()->with('status', 'Welcome to the ' . $plan . ' plan');
        }
        
        return back()->with('status', 'You are already on the ' . $plan . ' plan');
    }
    public function cancelSub($id){
        $website = Website::find($id);
        $plan = 'Maand';

        $name = ucfirst($plan) . ' membership';

        if($website->subscribed($name, $plan)) {
            
            $website->subscription($name)->cancel();

            return back()->with('status', 'You have unsubscribed');
        }
        
        return back()->with('status', 'You have already cancelled');
    }

    public function resumeSub($id){
        $website = Website::find($id);
        $plan = 'Maand';

        $name = ucfirst($plan) . ' membership';

        if($website->subscribed($name, $plan)) {
            
            $website->subscription($name)->cancel();

            return back()->with('status', 'You have unsubscribed');
        }
        
        return back()->with('status', 'You have already cancelled');
    }
}
