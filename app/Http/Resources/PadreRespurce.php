<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PadreRespurce extends JsonResource
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
            'nombre'    => $this->nombre,
            'ocupacion' => $this->ocupacion,
            'telefono'  => $this->telefono
        ];
    }
}
