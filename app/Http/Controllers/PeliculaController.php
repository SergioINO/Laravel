<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use DataTables;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index(Request $request)
    {
        $peliculas=Pelicula::select('id','codigo','descripcion','cantidad','precio')->get();
        if ($request->ajax()) {
            //$peliculas=Pelicula::all();
            //dd($data);
            return Datatables::of($peliculas)
                    
                    ->addIndexColumn()
                    ->addColumn('option_button', 'botones.botones')
                    ->rawColumns(['option_button'])
                    ->make(true);
        }
       
        //dd($peliculas);
        return view('pelicula.index')->with('peliculas',$peliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     * Para almacenar
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peliculas = new Pelicula();

        $peliculas->codigo = $request->get('codigo');
        $peliculas->descripcion = $request->get('descripcion');
        $peliculas->cantidad = $request->get('cantidad');
        $peliculas->precio = $request->get('precio');
        $peliculas->duracion = $request->get('duracion');
        $peliculas->anio = $request->get('anio');
        $peliculas->valoracion = $request->get('valoracion');
        $peliculas->nombre = $request->get('nombre');


        $peliculas->save();

        return redirect('/peliculas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo)
    {
       
        $peliculas=Pelicula::select('id','codigo','descripcion','cantidad','precio','duracion','anio','valoracion','nombre')->
                                where('codigo','=',$codigo)->first();
        //$pelicula=Pelicula::find($id);
        //dd($peliculas);
        return view('pelicula.edit',compact('peliculas'));
    }

    /**
     * Update the specified resource in storage.
     * Para guardar 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // //dd($request);
        // //traigo la pelicula y capturo los nuevos datos
        // $pelicula = Pelicula::find($request->id_pelicula);
        // //dd($pelicula);
        // $pelicula->codigo = $request->get('codigo');
        // $pelicula->descripcion = $request->get('descripcion');
        // $pelicula->cantidad = $request->get('cantidad');
        // $pelicula->precio = $request->get('precio');
        // $peliculas->duracion = $request->get('duracion');
        // $peliculas->anio = $request->get('anio');
        // $peliculas->valoracion = $request->get('valoracion');
        // $peliculas->nombre = $request->get('nombre');
        // $pelicula->save();
        

        Pelicula::where('id', $request->id_pelicula)
                    ->update([
                        'codigo' => $request->codigo,
                        'descripcion' => $request->descripcion,
                        'cantidad' => $request->cantidad,
                        'precio' => $request->precio,
                        'duracion' => $request->duracion,
                        'anio' => $request->anio,
                        'valoracion' => $request->valoracion,
                        'nombre' => $request->nombre,
                ]);

        return redirect('/peliculas');

        
    }

    /**
     * Remove the specified resource from storage.
     * Para Eliminar
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request);
        //eliminar 
        Pelicula::select('codigo')->where('codigo','=',$request->codigo_pelicula)->delete();  
        //DB::table('mantenimientos')->where('id', $request->id_delete)->delete();
        //dd($pelicula->codigo);      
        //$pelicula->delete();

        return redirect('/peliculas');
    }
}
