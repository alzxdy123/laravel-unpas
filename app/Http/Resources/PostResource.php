<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request)
    {
        return parent::toArray($request);
        // return [
        //     'id' => $this->id,
        //     'timestamps' => $this->timestamps,
        //     'title' => $this->title,
        //     'slug' => $this->slug,
        //     'exerpt' => $this->exerpt,
        //     'body' => $this->body,
        //     'published_at' => $this->published_at,
        //     'user_id' => $this->user_id,
        //     'category_id' => $this->category_id,
        // ];
        // return ['data' => $this->collection];

        // return [
        //     'data' => $this->collection->map(function ($post) {
        //         return [
        //             'id' => $post->id,
        //             'title' => $post->title,
        //             'excerpt' => $post->excerpt,
        //             'body' => $post->body,
        //             'published_at' => $post->published_at,
        //             'user_id' => $post->user_id,
        //             'category_id' => $post->category_id,
        //         ];
        //     }),
        // ];
    }
}
