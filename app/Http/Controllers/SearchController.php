<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $key){
        $q= $key->key;

        // Search in the title and body columns from the posts table
        $blogs = Blog::query()
            ->where('title', 'LIKE', "%{$q}%")
            ->orWhere('detail', 'LIKE', "%{$q}%")
            ->orWhere('tags', 'LIKE', "%{$q}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('blogs'));
    }
}
