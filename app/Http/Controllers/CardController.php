<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function eliminar($id)
{
    $card = Card::find($id);
    if ($card) {
        $card->delete();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false]);
}

}
