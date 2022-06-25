<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Socialite\facades\Socialite;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function loginUsingFacebook()
    {
        //return  Socialite::driver('facebook')->redirect();
      // return socialite::driver('facebook')
    //->scopes(['read:user', 'public_repo'])
    //->redirect();
    return redirect()->back();
    }

    public function callbackfromFacebook()
    {
        try{
            $user=Socialite::driver('facebook')->user();
            $saveUser = User::updateOrCreate([
                'facebook_id'=>$user->getId(),[
                    'name'=>$user->getName(),
                    'email'=>$user->getEmail()
                ]
            ]);

            Auth::loginUsungId($saveUser->id);
            return redirect()->route('home');

        }
        catch(\Throwble $th)
        {
            throw $th;
        }
    }
}
