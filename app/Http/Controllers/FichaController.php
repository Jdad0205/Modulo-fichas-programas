<?php

namespace App\Http\Controllers;
use App\Models\Ficha;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;


class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fichas = DB::table('fichas')
        ->join(
        'programas',
        'fichas.id_programa_formacion',
        '=',
        'programas.id')
        ->select(
        'fichas.*',
        'programas.nombre AS namePrograma'
        )
        ->get();
        return view('fichas.index', compact('fichas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Programas=DB::table('programas')
        ->select('programas.*')
        ->get();
        return view('fichas.create',
        compact('Programas')
    );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_ficha' ,
            'id_programa_formacion' => 'required',
            'nombre' => 'required',
            'hora_entrada' => 'required',
            'hora_salida' => 'required',
            'jornada' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required'
        ]);

        Ficha::create($request->all());
        return redirect()->route('fichas.index')->with('success', 'Ficha creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_ficha)
    {
        $ficha = Ficha::findOrFail($id_ficha);
        return view('fichas.show', compact('ficha'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_ficha)
    {
        $ficha = Ficha::findOrFail($id_ficha);
        return view('fichas.edit', compact('ficha'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_ficha)
    {
        $request->validate([
            'id_ficha',
            'id_programa_formacion' => 'required',
            'nombre' => 'required',
            'hora_entrada' => 'required',
            'hora_salida' => 'required',
            'jornada' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required'
        ]);

        $ficha = Ficha::findOrFail($id_ficha);
        $ficha->update($request->all());
        return redirect()->route('fichas.index')->with('success', 'Ficha actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_ficha)
    {
        $ficha = Ficha::findOrFail($id_ficha);
        $ficha->delete();
        return redirect()->route('fichas.index')->with('success', 'Ficha eliminada exitosamente.');
    }

    public function generarPDF()
    {
        $fichas = DB::table('fichas')
        ->join(
        'programas',
        'fichas.id_programa_formacion',
        '=',
        'programas.id')
        ->select(
        'fichas.*',
        'programas.nombre AS namePrograma'
        )
        ->get();

       // Generar el PDF con los datos y la vista 'pdf.ambientes'
$pdf = PDF::loadView('fichas.pdf', compact('fichas'));

// Retorna el PDF para que el navegador lo descargue o visualice
return $pdf->stream('fichas.pdf'); // Para mostrar en navegador
// return $pdf->download('ambientes.pdf'); // Para descargar directamente

    }
}
