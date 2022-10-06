<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PorCuatrimestreResource extends JsonResource
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
            'primero' => $this->primero,
            'segundo' => $this->segundo,
            'tercero' => $this->tercero,
            'cuarto'  => $this->cuarto,
            'quinto'  => $this->quinto,
            'sexto'   => $this->sexto,
            'septimo' => $this->septimo,
            'octavo'  => $this->octavo,
            'noveno'  => $this->noveno
        ];
    }
}
