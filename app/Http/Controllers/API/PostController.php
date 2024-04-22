<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        try {
            $posts = Post::latest()->get();
            return response()->json([
                "success" => true,
                "message" => "Get Posts Successful",
                "posts" => $posts,
            ]);
        } catch (Exception $e) {
            return response()->json([
                "success" => false,
                "message" => "An error occurred: " . $e->getMessage(),
            ], 500);
        }
    }

    public function show(Post $post)
    {
        try {
            $post = Post::where('slug', $post->slug)->first();

            if (!$post) {
                return response()->json([
                    "success" => false,
                    "message" => "Post Not Found",
                ], 404);
            }

            return response()->json([
                "success" => true,
                "message" => "Get Post Successful",
                "post" => $post
            ]);
        } catch (Exception $e) {
            return response()->json([
                "success" => false,
                "message" => "An error occurred: " . $e->getMessage(),
            ], 500);
        }
    }
}
