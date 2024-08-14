<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getDataBuku($category_id)
    {

        try {
            $books = Book::where('category_id', $category_id)->get();
            return response()->json(['data' => $books, 'message' => 'Fetch Success!!']);
        } catch (\Throwable $th) {
            return response()->json(['data' => [], 'error' => $th->getMessage()]);
            //throw $th;
        }
    }
}
