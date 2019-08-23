<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;
use JWTAuth;

class GroupController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }
    public function index()
    {
        return $this->user
            ->products()
            ->get(['name', 'price', 'quantity'])
            ->toArray();
    }
}
