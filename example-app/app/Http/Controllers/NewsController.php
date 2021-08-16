<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('index', [
            'news' => $this->NewsList
        ]);

    }

    public function show(int $id)
    {
        $newsList = [];
        foreach($this->NewsList as $news) {
            if ($news['id'] === $id) {
                $newsList[]= $news;
            }
        }

        if (empty($newsList)) {
            abort(404);
        }
        return view('newsshow', [
            'news' => $newsList
        ]);
    }

    public function newsOfCategory(int $id)
    {
        $newsList = [];
        foreach($this->NewsList as $news) {
            if ($news['category'] === $id) {
                $newsList[]= $news;
            }
        }

        if (empty($newsList)) {
            abort(404);
        }

        return view('newsofcategory', [
            'id' => $id,
            'newsList' => $newsList
        ]);
    }
}
