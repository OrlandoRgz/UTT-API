<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DomicilioResource extends JsonResource
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
            'calle'     => $this->calle,
            'numero'    => $this->numero,
            'colonia'   => $this->colonia,
            'municipio' => new MunicipioResource($this->municipio)
        ];
    }
}
