<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TsuResource extends JsonResource
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
            'bachillerato'        => $this->bachillerato,
            'nivelIngles'         => $this->nivelIngles,
            'puntosExamenIngreso' => $this->puntosExamenIngreso,
            'porCuatrimestre'     => new PorCuatrimestreResource($this->porCuatrimestre),
            'promedio'            => $this->promedio
        ];
    }
}
