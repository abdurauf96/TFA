<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TrenerResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'position'=>$this->position,
            'experience'=>$this->experience,
            'info'=>$this->info,
            'success'=>$this->success,
            'image'=>$this->image,
            'year'=>$this->year
        ];
    }
}
