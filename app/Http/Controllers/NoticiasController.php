<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{

    // registro y actualizaciones de las novedades
    public static function importar()
    {
        $json = file_get_contents('https://api.reliefweb.int/v1/reports?appname=prueba&profile=list&preset=latest&slim=1&query[value]=primary_country.id%3A250&query[operator]=AND');
        $objs = json_decode($json, true);
        foreach ($objs['data'] as $obj) {
            $registro = array();
            foreach ($obj['fields'] as $key => $value) {
                if ($key == 'date') {
                    $registro[] = $value['created'];
                }
                if ($key == 'source') {
                    $registro[] = $value[0]['name'];
                    $registro[] = $value[0]['homepage'];
                }
                if ($key == 'title') {
                    $registro[] = $value;
                }
                if ($key == 'url') {
                    $registro[] = $value;
                }
            }
            $registros[] = $registro;
        }
        return view('noticias', compact('registros'));
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
