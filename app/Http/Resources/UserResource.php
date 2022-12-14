<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->username,
            'email' => $this->email,
            'iduser' => $this->id,
            'api_token' => $this->api_token,
            'isadmin'=>$this->isadmin
        ];
    }
}
