<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $rooms=DB::table('rooms')->get();

        if($request->query('id')!=null){
            $rooms=$rooms->where('room_type_id',$request->query('id'));
        }
        // return response()->json($rooms);
        return view('rooms.index',['rooms' => $rooms]);
    }
}