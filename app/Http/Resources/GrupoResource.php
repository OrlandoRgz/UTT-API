<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GrupoResource extends JsonResource
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
            'clave'        => $this->clave,
            'cuatrimestre' => $this->cuatrimestre,
            'grupo'        => $this->grupo,
            'descripcion'  => $this->descripcion,
            'carrera'      => new CarreraResource($this->carrera),
            'especialidad' => new EspecialidadResource($this->especialidad),
            'periodo'      => new PeriodoResource($this->periodo) 
        ];
    }
}
