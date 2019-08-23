<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $group = Groups::where('group_id', '=', 63)
        ->get();

        $this->group = $group;
        var_dump([
            'id' => $this->group
        ]);
    }
}
