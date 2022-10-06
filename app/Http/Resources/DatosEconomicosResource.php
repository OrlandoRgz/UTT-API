<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DatosEconomicosResource extends JsonResource
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
            'viveCon'            => new ViveConResource($this->viveCon),
            'vivienda'           => new ViviendaResource($this->vivienda),
            'transporte'         => new TransporteResource($this->transporte),
            'apoyoEconomico'     => new ApoyoEconomicoResource($this->apoyoEconomico),
            'ingresosFamiliares' => new IngresosFamiliaresResource($this->ingresosFamiliares)
        ];
    }
}
