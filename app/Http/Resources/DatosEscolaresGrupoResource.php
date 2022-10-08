<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\TipoBachilleraroGrupoCollection;
use App\Models\TipoBachilleraroGrupo;

class DatosEscolaresGrupoResource extends JsonResource
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
            'bachilleratos' => new TipoBachilleraroGrupoCollection(TipoBachilleraroGrupo::all())
        ];
    }
}
