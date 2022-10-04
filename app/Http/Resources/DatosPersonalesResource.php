<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DatosPersonalesResource extends JsonResource
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
            'FechaNacimiento'   => $this->fechaNacimiento,
            'edad'              => $this->edad,
            'lugarDeNacimiento' => new LugarDeNacimientoResource($this->lugarDeNacimiento),
            'genero'            => new GeneroResource($this->genero),
            'estadoCivil'       => new EstadoCivilResource($this->estadoCivil),
            'domicilio'         => new DomicilioResource($this->domicilio),
            'contacto'          => new ContactoResource($this->contacto)
        ];
    }
}
