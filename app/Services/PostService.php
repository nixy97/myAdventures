<?php

namespace App\Services;
use App\ModelRepositoryInterfaces\PostModelRepositoryInterface;
use App\Models\Post;
use App\Contracts\PostContract;
use App\Http\Resources\Post as PostResource;
use Validator;

class PostService implements PostContract
{
    public function storePost($data)
    {
        $post = Post::create([
//            'user_id' =>  $data->userId,
            'title' => $data->title,
            'location' => $data->location,
            'body' => $data->body,
        ]);

        if ($post->save()) {
            return new PostResource($post);

        }
    }
}