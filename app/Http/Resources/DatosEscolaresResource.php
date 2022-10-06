<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DatosEscolaresResource extends JsonResource
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
            'nombreBachillerato' => $this->nombreBachillerato,
            'tipoBachillerato'   => new TipoBachilleratoResource($this->tipoBachillerato),
            'entidadFederativa'  => new EntidadFederativaResource($this->entidadFederativa)
        ];
    }
}
