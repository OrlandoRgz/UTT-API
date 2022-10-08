<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\TrabajanGrupoCollection;
use App\Models\TrabajanGrupo;

use App\Http\Resources\TrabajoRelacionadoEstudiosGrupoCollection;
use App\Models\TrabajoRelacionadoEstudioGrupo;


class DatosLaboralesGrupoResource extends JsonResource
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
            'trabajan'                   => new TrabajanGrupoCollection(TrabajanGrupo::all()),
            'trabajoRelacionadoEstudios' => new TrabajoRelacionadoEstudiosGrupoCollection(TrabajoRelacionadoEstudioGrupo::all())
        ];
    }
}
