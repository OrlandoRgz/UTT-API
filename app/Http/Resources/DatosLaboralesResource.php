<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DatosLaboralesResource extends JsonResource
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
            'trabaja'                 => $this->trabaja,
            'estaRelacionadoEstudios' => $this->estaRelacionadoEstudios,
            'empresa'                 => new EmpresaResource($this->empresa)
        ];
    }
}
