<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Resources\ItemFullResource;

class GetItemAllDataController extends Controller
{
    public function __invoke(Item $item) {

        return response()->json(new ItemFullResource($item));

    }
}
