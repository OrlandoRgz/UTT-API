<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlumnosResource extends JsonResource
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
            'matricula'        => $this->matricula,
            'Nombre'           => $this->nombreCompleto,
            'datosPersonales' => new DatosPersonalesResource($this->datosPersonales),
            'datosFamiliares' => new DatosFamiliaresResource($this->datosFamiliares),
            'datosLaborales'  => new DatosLaboralesResource($this->datosLaborales)
        ];
    }
}
