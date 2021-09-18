<?php

namespace Mahabub\GGLink\Http\Controllers;


use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AuthController extends Controller
{
    /**
     * Set access control.
     *
     */
    function __construct()
    {
    }


    /**
     * Display Login Form.
     *
     * @return Application|Factory|View
     */
   public function loginForm()
    {
        return view('gglink::auth.login');
    }


    /**
     * Verify Login.
     *
     * @param Request $request
     * @return Application|Factory|View
     * @throws GuzzleException
     */
   public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $inputs = $request->input();

        $url = config('gglink.api_base_url').'user/login';
        $client = new \GuzzleHttp\Client();

        $header['X-API-KEY'] = config('gglink.api_key');
        $form_params['Username'] = $inputs['username'];
        $form_params['Password'] = $inputs['password'];

        $api_request = $client->post($url,  [
            'headers' => $header,
            'form_params' => $form_params,
            'http_errors' => false
        ]);

        \Session::put('token', '1234567890');

        $login_data = (array)json_decode($api_request->getBody());

        return view('gglink::home');
    }


    /**
     * Logout.
     *
     * @return Application|Factory|View
     * @throws GuzzleException
     */
   public function logout()
    {
        return view('gglink::auth.login');
    }
}
