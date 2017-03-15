<?php

namespace MrEssex\LaravelAuthProfile;

use App\User;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class AuthProfileController extends Controller
{

    /**
     * Add auth middleware upon initialisation.
     *
     * @author Kyle Essex
     */
    public function __construct()
    {
        // Allow access to only authenticated users
        $this->middleware('web');
        $this->middleware('auth'); // Some reason adding both middleware is the only way to go!
    }

    /**
     * Get the current user profile.
     *
     * @return View
     * @author Kyle Essex
     */
    public function viewCurrentUserProfile(Request $request)
    {
        // Get the current authenticated user object
        $user = User::find($request->user()->id);
        return view('laravelauthprofile::viewprofile', ['user' => $user]) ;
    }

    /**
     * Validate any alterations and save them.
     *
     * @param Request $request
     * @return back with errors
     * @author Kyle Essex
     */
    public function editCurrentUserProfile(Request $request)
    {
        // Find the current authenticated user object
        $user = User::find($request->user()->id);

        // if input name exists in the request replace name in the user object
        if ($request["name"]) {
            $this->validate($request, [
                'name' => 'max:255|required'
            ]);
            $user->name = $request["name"];
        }

        // if input password exists in the request replace password in the user object
        if ($request["password"]) {
            $this->validate($request, [
                'password' => 'min:8|required'
            ]);
            $user->password = bcrypt($request["password"]);
        }

        $user->save(); 

        Session::flash('message', "Profile Successfully Updated!");
        return redirect()->back();
    }
}
