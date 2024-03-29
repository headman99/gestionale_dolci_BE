<?php

namespace App\Http\Resources;

use App\Models\Menu;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            "client" => User::find($this->client_id)->username,
            "code" => $this->code,
            "created_at" => Carbon::parse($this->created_at)->format('d/m/Y'),
            "event_date" => Carbon::parse($this->event_date)->format('d/m/Y'),
            "menu_id" => $this->menu_id,    
            "quantity" =>$this->quantity,
            "richiesta" => $this->richiesta,
            "name" =>Menu::find($this->menu_id)->nome
        ];
    }
}
