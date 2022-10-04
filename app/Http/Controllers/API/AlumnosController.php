<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Alumnos;
use App\http\Resources\AlumnosResource;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumnos::all();
        //return $alumnos;
        return response()->json([
            'status' => 0,
            'alumnos' => AlumnosResource::collection($alumnos)
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
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show($matricula)
    {
        $consulta = DB::table('alumnos')
        ->select('id')
        ->where('matricula', $matricula)->get();

        $id = $consulta[0]->id;

        $post = Alumnos::findOrFail($id);
        return new AlumnosResource($post);


        
        /*
        $consulta = DB::table('alumnos')
        ->select('id')
        ->where('matricula', $matricula)->get();

        $id = $consulta[0]->id;

        $alumno = Alumnos::with(['datosPersonales', 'datosFamiliares'])->where('id',$id)->first();

        return $alumno;*/

        /*$alumnos = Alumnos::all();
        $alumno = $alumnos->find($consulta[0]->id);

        return $alumno;

        return response()->json([
            'status' => 0,
            'alumnos' => AlumnosResource::collection($alumno)
        ]);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumnos $alumnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumnos $alumnos)
    {
        //
    }
}
