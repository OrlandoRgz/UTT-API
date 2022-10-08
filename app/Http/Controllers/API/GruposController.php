<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Grupo;
use App\http\Resources\GrupoResource;

use App\Models\AlumnosGrupo;
use App\http\Resources\AlumnosGrupoResource;

use App\Models\EstadisticasGrupo;
use App\http\Resources\EstadisticasGrupoResource;

use App\Models\DatosLaboralesGrupo;
use App\http\Resources\DatosLaboralesGrupoResource;

use App\Models\DatosEscolaresGrupo;
use App\http\Resources\DatosEscolaresGrupoResource;


class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos         = Grupo::all();
        $alumnos        = AlumnosGrupo::all();
        $estadisticas   = EstadisticasGrupo::all();
        $datosLaborales = DatosLaboralesGrupo::all();
        $datosEscolares = DatosEscolaresGrupo::all();

        return response()->json([
            'status'         => 0,
            'grupos'         => GrupoResource::collection($grupos),
            'alumnos'        => AlumnosGrupoResource::collection($alumnos),
            'estadisticas'   => EstadisticasGrupoResource::collection($estadisticas),
            'datosLaborales' => DatosLaboralesGrupoResource::collection($datosLaborales),
            'datosEscolares' => DatosEscolaresGrupoResource::collection($datosEscolares)
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
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        //
    }
}
