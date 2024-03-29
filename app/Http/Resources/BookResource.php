<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'category' =>$this->category->name,
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => $this->slug,
            'author' => $this->author,
            'file' =>$this->file,
            'comments' => $this->whenLoaded('comments'),
            'image' =>"http://localhost:8000/storage/photos/" . $this->image,
            'description' => $this->description,
            'tags' => explode("," , $this->tags),
            'downloads' => $this->download->downloads,
            'created_at' => $this->created_at->format('d-m-Y'),
            'updated_at' => $this->updated_at
        ];
    }
}
