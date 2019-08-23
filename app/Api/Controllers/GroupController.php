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
        $group = DB::select("SELECT * FROM `groups` LIMIT 200");
        $gg = $group;
        return $gg;
    }
    public function show( $id )
    {
        $groupId = DB::select("SELECT * FROM `groups` WHERE `group_id` = :id" , array(
            ':id'=> $id
            )
    );
        return $groupId;
    }

    public function showTranslate($lang , $id )
    {
        $groupId = DB::select("SELECT * FROM `groups` WHERE `locale` = ? AND `group_id` = ? " , array($lang, $id));
        return $groupId;
    }

}