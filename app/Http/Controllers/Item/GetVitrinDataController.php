<?php

namespace App\Http\Controllers\Item;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Http\Resources\ItemResource;

class GetVitrinDataController extends Controller {

    public function __invoke() {

        return response()->json(ItemResource::collection(Item::all()));

    }

}