<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\GeneroGrupoCollection;
use App\Models\GeneroGrupo;

use App\Http\Resources\EstadoCivilGrupoCollection;
use App\Models\EstadoCivilGrupo;

use App\Http\Resources\ViveConGrupoCollection;
use App\Models\ViveConGrupo;

use App\Http\Resources\IngresosFamiliaresGrupoCollection;
use App\Models\IngresosFamiliaresGrupo;

class DatosPersonalesGrupoResource extends JsonResource
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
            'genero'             => new GeneroGrupoCollection(GeneroGrupo::all()),
            'estadoCivil'        => new EstadoCivilGrupoCollection(EstadoCivilGrupo::all()),
            'viveCon'            => new ViveConGrupoCollection(ViveConGrupo::all()),
            'ingresosFamiliares' => new IngresosFamiliaresGrupoCollection(IngresosFamiliaresGrupo::all())
        ];
    }
}
