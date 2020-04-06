<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    //
    function store(Request $request){ 

        $data = [
            'placeName' => $request->placeName,
            'street' => $request->street, 
            'number' => $request->number,
            'additional' => $request->additional,
            'neighborhood' => $request->neighborhood,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'addtionalInfos' => $request->addtionalInfos,
            'typeOfDonations' => $request->typeOfDonations,
        ];
    
        return Place::create($data);

        
    }

    function update(Request $request, $id){

        $place = Place::findOrFail($id);
        $product->placeName       = $request->placeName;
        $product->street          = $request->street;
        $product->number          = $request->number;
        $product->additional      = $request->additional;
        $product->neighborhood    = $request->neighborhood;
        $product->latitude        = $request->latitude;
        $product->longitude       = $request->longitude;
        $product->addtionalInfos  = $request->addtionalInfos;
        $product->typeOfDonations = $request->typeOfDonations;
        return $product->save();
    }

    function getAll(){
        return Place::all();
    }
}
