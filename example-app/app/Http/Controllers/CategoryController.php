<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category', [
            'category' => $this->CategoryList
        ]);

    }

    public function show(int $id)
    {
        $categoryList = [];
        foreach($this->CategoryList as $category) {
            if ($category['id'] === $id) {
                $categoryList[]= $category;
            }
        }

        if (empty($categoryList)) {
            abort(404);
        }
        return view('categoryshow', [
            'category' => $categoryList
        ]);
    }
}
