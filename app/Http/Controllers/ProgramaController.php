<?php

namespace App\Http\Controllers;
use App\Models\programa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class programaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programas = DB::table('programas')
        ->join(
        'red',
        'programas.red_conocimiento',
        '=',
        'red.id')
        ->select(
        'programas.*',
        'red.nombre AS nombreRed'
        )
        ->get();
        return view('programas.index', compact('programas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        $redes=DB::table('red')->select('*')->get();
        return view('programas.create', compact('redes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required',
            'version'=> 'required',
            'red_conocimiento'=> 'required',
            'duracion_meses'=> 'required',
            'requisitos_ingreso'=> 'required',
            'requisitos_formacion'=> 'required'
        ]);

        programa::create($request->all());
        return redirect()->route('programas.index')->with('succes', 'programa creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('programas.show', compact('programa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $programa = programa::findOrFail($id);
        return view('programas.edit', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre',
            'version',
            'red_conocimiento',
            'duracion_meses',
            'requisitos_ingreso',
            'requisitos_formacion'
        ]);
        $programa = programa::findOrFail($id);
        $programa->update($request->all());
        return redirect()->route('programas.index')->with('succes', 'programa actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $programa = programa::findOrFail($id);
        $programa->delete();
        return redirect()->route('programas.index')->with('success', 'programa eliminado exitosamente. ');
    }

    public function generarPDF()
    {
        $programas = DB::table('programas')
        ->join(
        'red',
        'programas.red_conocimiento',
        '=',
        'red.id')
        ->select(
        'programas.*',
        'red.nombre AS nombreRed'
        )
        ->get();
       // Generar el PDF con los datos y la vista 'pdf.ambientes'
$pdf = PDF::loadView('programas.pdf', compact('programas'));

// Retorna el PDF para que el navegador lo descargue o visualice
return $pdf->stream('programas.pdf'); // Para mostrar en navegador
// return $pdf->download('ambientes.pdf'); // Para descargar directamente

    }
}