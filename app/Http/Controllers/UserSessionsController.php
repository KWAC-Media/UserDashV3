<?php

namespace App\Http\Controllers;

//use App\User;
use App\Http\Controllers\Controller;

class UserSessionsController extends Controller {

    /**
     * Get the complete sessions  data.
     *
     * @param  int  $id
     * @return Response
     */
    public function groups($id){

        return response()->json([
            [
                "name"      => "Group Name A",
                "date"      => "12/12/2019",
                "status"    => "Completed"
            ],
            [
                "name"      => "Group Name B",
                "date"      => "12/12/2019",
                "status"    => "Completed"
            ],
            [
                "name"      => "Group Name C",
                "date"      => "12/12/2019",
                "status"    => "Completed"
            ],
            [
                "name"      => "Group Name D",
                "date"      => "12/12/2019",
                "status"    => "Pending"
            ]
            ]);

    }

}