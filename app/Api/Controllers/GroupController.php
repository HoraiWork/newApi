<?php
namespace App\Api\Controllers;

use App\Groups;
use App\Api\Controllers\ApiBasesController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Resources\Json\JsonResource;
use function Psy\debug;

class GroupController extends ApiBasesController
{

    public function index()
    {
        $group = DB::select("SELECT * FROM `groups` WHERE `id` = 2");
        $gg = $group;
        return $gg;
    }


}