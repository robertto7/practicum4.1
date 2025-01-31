<?php

namespace App\Http\Controllers;


use App\Models\CitaMedica;
use App\Models\Enfermedad;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class CitaMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = CitaMedica::with('enfermedad')->get();
        return view('citas_medicas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enfermedades = Enfermedad::all();
        $patients = Patient::all();
        $doctors = Doctor::all();
        return view('citas_medicas.create', compact('patients', 'doctors', 'enfermedades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'paciente_id' => 'required|integer',
            'doctor_id' => 'required|integer',
            'enfermedad_id' => 'nullable|integer',
        ]);

        CitaMedica::create($request->all());
        return redirect()->route('citas_medicas.index')->with('success','Citas Medicas se creo satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(CitaMedica $citaMedica)
    {
    
        return view('citas_medicas.show', compact('citaMedica'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CitaMedica $citaMedica)
    {
        
        $enfermedades = Enfermedad::all();
        return view('citas_medicas.edit',compact('citaMedica','enfermedades'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CitaMedica $citaMedica)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required|date',
            'paciente_id' => 'required|integer',
            'doctor_id' => 'required|integer',
            'enfermedad_id' => 'nullable|integer',
        ]);

        $citaMedica->update($request->all());
        return redirect()->route('citas_medicas.index')->with('success','Citas Medicas actualizada satisfactoriamente');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CitaMedica $citaMedica)
    {
        $citaMedica->delete();
        return redirect()->route('citas_medicas.index')->with('success','Citas Medicas eliminada satisfactoriamente');

    }
}
