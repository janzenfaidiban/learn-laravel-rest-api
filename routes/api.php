<?php

use App\Item;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

Route::get('items', function() {
    // return Item::all();
    return Item::paginate(5);
});

// Route::get('items/{item}', function($id) {
//     return Item::find($id);
// });

Route::get('items/{item}', function(Item $item) {
    return $item;
});

Route::post('items', function() {
    return Item::create(request()->all());
});

Route::delete('items/{item}', function (Item $item) {
    $item->delete();
    return 'Success';
});