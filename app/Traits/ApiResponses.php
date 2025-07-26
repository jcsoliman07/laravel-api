<?php

namespace App\Traits;

trait ApiResponses{

    //Success
    public function success()
    {
        return response()->json([
        ],200);
    }

}