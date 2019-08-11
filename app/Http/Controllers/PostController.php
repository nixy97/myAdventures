<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use App\Contracts\PostContract;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Post as PostResource;

class PostController extends Controller
{
    private $postRetriever;
    public function __construct(PostContract $postContract)
    {
        $this->postRetriever = $postContract;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);

        return PostResource::collection($posts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePost(Request $request)
    {
//        $post = $request->isMethod('put') ?
//            Post::FindOrFail($request->post_id) : new Post;
//
//        $post->id = $request->input('post_id');
//        $post->title = $request->input('title');
//        $post->location = $request->input('location');
//        $post->body = $request->input('body');

//        if($post->save()){
//            return new PostResource($post);
//        }

        $validatedData = Validator::make($request->all(), [
            'title'=>'required',
            'location'=>'required',
            'body' => 'required',
        ]);

        if($validatedData->fails()){
            return $validatedData->errors()->all();
        }
        $data = $request;

        $post = $this->postRetriever->storePost($data);
        if($post){
            return response()->json([ $post ], 201);
        } else {
            return response()->json([
                'errors' => [
                    'invalid' => 'Unable to create new post.'
                ]
            ], 406);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return new PostResource($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->delete()) {
            return new PostResource($post);
        }
    }

}
