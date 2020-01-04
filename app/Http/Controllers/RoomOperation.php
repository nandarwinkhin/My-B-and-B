<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomType;
use App\Room;

class RoomOperation extends Controller
{
    function room()
    {
        $types = RoomType::all();
        return view('room_operation.room', compact('types'));
    }

    function storeRoom(Request $request)
    {
        Room::create([
            'roomumber' => $request->get('roomNumber'),
            'roomtype' => $request->get('roomType')
        ]);
        return redirect('create/rooms')->with("status", "Successfully add a Room");
    }

    function storeRoomType(Request $request)
    {
        RoomType::create([
            'roomtype' => $request->get('roomType'),
            'price' => $request->get('price'),
        ]);
        return redirect('create/roomtype')->with('status', 'Successfully add a Type');
    }
}
