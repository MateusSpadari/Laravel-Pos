<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Auth0IndexController extends Controller
{
    public function login()
    {
        $authorize_params = ['scope' => 'openid profile email'];
        return \App::make('auth0')->login(null, null, $authorize_params);
    }

    public function logout()
    {
        \Auth::logout();
        $logoutUrl = sprintf(
            'https://%s/v2/logout?client_id=%s&returnTo=%s',
            env('AUTH0_DOMAIN'),
            env('AUTH0_CLIENT_ID'),
            env('APP_URL')
        );
        return \Redirect::intended($logoutUrl);
    }
}
