<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;

class AddItemToCartController extends Controller
{
    public function __invoke(Item $item) {

        Cart::create(['id_item' => $item->id]);
        return http_response_code(200);

    }
}
