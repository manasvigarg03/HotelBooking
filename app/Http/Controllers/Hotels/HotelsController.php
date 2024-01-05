<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment\Apartment;
use App\Models\Booking\Booking;

class HotelsController extends Controller
{
    public function rooms($id){

        $getrooms = Apartment::select()->orderBy('id' , 'desc')->take(6)->where('hotel_id' ,$id)->get();


        return view('hotels.rooms' , compact('getrooms'));


    }

    public function roomsDetails($id){

        $getroom = Apartment::find($id);


        return view('hotels.roomsdetails' , compact('getrooms'));


    }

    public function roomsBooking(request $request, $id){

        $getroom = Apartment::find($id);
        $hotel = Hotel::find($id);

        if($date("Y/m/d") < $request->check_in AND $date("Y/m/d") < $request->check_out){

            if($request->check_in < $request->check_out){

                $datetime1 = new DateTime($request->check_in);
                $datetime2 = new DateTime($request->check_out);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');

                $bookRooms = Booking::create([
                    "name" => $request->name,
                    "email" => $request->email,
                    "phone_number" => $request->phone_number,
                    "check_in" => $request->check_in,
                    "check_out" => $request->check_out,
                    "days" => $days,
                    "price" => 0,
                    "user_id" => Auth::user()->id,
                    "room_name" => $room->name,
                    "hotel_name" => $hotel->name
                ]);
                
                    
            }
        
            

    }
}   
}