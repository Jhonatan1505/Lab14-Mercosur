<?php

namespace App\Http\Controllers;

use App\Mercosur;
use Illuminate\Http\Request;

class MercosurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mercosurs = Mercosur::orderBy('id','DESC')->paginate(3);
        return view('Mercosur.index',compact('mercosurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Mercosur.create');
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
        $this->validate($request,[ 'nombre'=>'required', 'paisA'=>'required', 
        'paisB'=>'required','tipo'=>'required','producto'=>'required', 'descripcion'=>'required']);
        Mercosur::create($request->all());
        return redirect()->route('mercosur.index')->with('success','Registro creado satisfactoriamente');
    }
        
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mercosurs=Mercosur::find($id);
        return view('mercosur.show',compact('mercosurs'));
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
        $mercosur=mercosur::find($id);
        return view('mercosur.edit',compact('mercosur'));
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
        $this->validate($request,[ 'nombre'=>'required', 'paisA'=>'required', 
        'paisB'=>'required','tipo'=>'required','producto'=>'required', 'descripcion'=>'required']);
        mercosur::find($id)->update($request->all());
        return redirect()->route('mercosur.index')->with('success','Registro actualizado satisfactoriamente');
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
        Mercosur::find($id)->delete();
        return redirect()->route('mercosur.index')->with('success','Registro eliminado satisfactoriamente');
    }
    /**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */
    public function getMercosurs(){
        $mercosurs=Mercosur::all ();
        return response()->json($mercosurs);
    }
}
