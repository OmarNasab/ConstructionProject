<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(): Factory|View|Application
    {
        $posts=Post::all();
        return view("post.index",compact("posts"));
    }

    public function create(): Factory|View|Application
    {
        return view("post.create");
    }

    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();
        $image=$request->file("image");
        $path=$image->storeAs("images",$image->getClientOriginalName(),"public");
        $validatedData["image"]=$path;
        Post::query()->create($validatedData);
        return redirect()->route("post.index");
    }
}
