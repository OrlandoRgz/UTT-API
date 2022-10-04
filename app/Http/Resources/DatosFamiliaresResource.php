<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DatosFamiliaresResource extends JsonResource
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
            'padre'      => new PadreRespurce($this->padre),
            'madre'      => new MadreResource($this->madre),
            'conyugue'   => new ConyugeResource($this->conyuge),
            'emergencia' => new EmergenciaResource($this->emergencia)
        ];
    }
}
