<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MunicipioPrueba;
use App\http\Resources\MunicipioPruebaResource;

use App\Models\GeneroPrueba;
use App\http\Resources\GeneroPruebaResource;

use App\Models\EstadoCivilPrueba;
use App\http\Resources\EstadoCivilPruebaResource;

use App\Models\RazonTrabajaPrueba;
use App\http\Resources\RazonTrabajaPruebaResource;

use App\Models\ViveConPrueba;
use App\http\Resources\ViveConPruebaResource;

use App\Models\ViviendaPrueba;
use App\http\Resources\ViviendaPruebaResource;

use App\Models\TransportePrueba;
use App\http\Resources\TransportePruebaResource;

use App\Models\ApoyoEconomicoPrueba;
use App\http\Resources\ApoyoEconomicoPruebaResource;

use App\Models\IngresosFamiliaresPrueba;
use App\http\Resources\IngresosFamiliaresPruebaResource;

use App\Models\TipoBachilleratoPrueba;
use App\http\Resources\TipoBachilleratoPruebaResource;

use App\Models\EntidadFederativaPrueba;
use App\http\Resources\EntidadFederativaPruebaResource;

class CatalogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipio          = MunicipioPrueba::all();
        $genero             = GeneroPrueba::all();
        $estadoCivil        = EstadoCivilPrueba::all();
        $razonTrabajaPrueba = RazonTrabajaPrueba::all();
        $viveConPrueba      = ViveConPrueba::all();
        $vivienda           = ViviendaPrueba::all();
        $transporte         = TransportePrueba::all();
        $apoyoEconomico     = ApoyoEconomicoPrueba::all();
        $ingresosFamiliares = IngresosFamiliaresPrueba::all();
        $tipoBachillerato   = TipoBachilleratoPrueba::all();
        $entidadFederativa  = EntidadFederativaPrueba::all();

        return response()->json([
            'status'             => 0,
            'municipio'          => MunicipioPruebaResource::collection($municipio),
            'genero'             => GeneroPruebaResource::collection($genero),
            'estadoCivil'        => EstadoCivilPruebaResource::collection($estadoCivil),
            'razonTrabaja'       => RazonTrabajaPruebaResource::collection($razonTrabajaPrueba),
            'viveCon'            => ViveConPruebaResource::collection($viveConPrueba),
            'vivienda'           => ViviendaPruebaResource::collection($vivienda),
            'transporte'         => TransportePruebaResource::collection($transporte),
            'apoyoEconomico'     => ApoyoEconomicoPruebaResource::collection($apoyoEconomico),
            'ingresosFamiliares' => IngresosFamiliaresPruebaResource::collection($ingresosFamiliares),
            'tipoBachillerato'   => TipoBachilleratoPruebaResource::collection($tipoBachillerato),
            'entidadFederativa'  => EntidadFederativaPruebaResource::collection($entidadFederativa)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
