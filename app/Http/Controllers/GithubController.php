<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once __DIR__ . '/../../../vendor/autoload.php';


class GithubController extends Controller
{
    private $client;
    private $username;
    public function __construct(\Github\Client $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        return view('users');
    }

    public function show(Request $request)
    {
        $this->validate($request, ['username' => 'required']);
        try
        {
            $client = new \Github\Client();
            $this->username = $request->get('username');
            $users = $client->api('search')->users($this->username);
            return $users;
        }
        catch (\RuntimeException $e)
        {
            return $e->getMessage();
        }
    }

    public function followers($username)
    {
        return view('followers', compact(['username']));
    }

    public function showMoreFollowers(Request $request)
    {
        try
        {
            $client = new \Github\Client();
            $pageNumber = $request->get('page', 1);
            $username = $request->get('username');
            $followers['followers'] = $client->api('user')->followers($username, ['page' => $pageNumber]);
            $followers['isShowButtonNeeded'] = count($client
                ->api('user')
                ->followers($username, ['page' => $pageNumber+1])
            )? true: false;
            return json_encode($followers);
        }
        catch (\RuntimeException $e)
        {
            return "Server error from ".__FUNCTION__. " function";
        }
    }
}
