<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class CommentsController extends Controller
{
  

    public function store(Request $request) {
        $params = $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'body' => 'required|max:2000',
        ]);

        $shop = Shop::findOrFail($params['shop_id']);
        $shop->comments()->create($params);
        return redirect()
               ->route('shop.detail', $shop->id);
      }
}
