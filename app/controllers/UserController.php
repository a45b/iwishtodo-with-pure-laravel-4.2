<?php
use Illuminate\Support\MessageBag;
class UserController extends BaseController {
    
    public function postLogin() {
        $errors = new MessageBag;
        $remember = (Input::has('remember')) ? true : false;
        $credentials = [
          'email'     => Input::get('email'),
          'password'  => Input::get('password')    
        ];
        if (Auth::attempt($credentials, $remember)){
            Session::put('user_id', Auth::user()->id);
            Session::put('name', Auth::user()->name);
            Session::put('email', Auth::user()->email);

            return Redirect::to('wish');
            //return Redirect::to('account')->with('alert-success', 'You are now logged in.');
        }
        else{
             //return Redirect::to('login');
            $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
            return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
        }   
    }

    public function postRegister()
    {
        $validator = Validator::make(Input::all(), User::$rules);
        if ($validator->passes()) {
            $user = new User;
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::back()->with('flash_notice', 'You are register successfully.');
        }        
        else{
            return Redirect::to('register')->withInput()->withErrors($validator);
        }
    }
    public function anyLogout()
    {
        Auth::logout();
        return Redirect::to('/');        
    }
}