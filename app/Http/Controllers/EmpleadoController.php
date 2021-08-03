<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\empleado;
use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleado.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'DNI_persona' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'ID_sucursal' => 'required',
        ]);
        Persona::create($request->all());
        $DNI_empleado= $request->input('DNI_persona');
        $ID_sucursal= $request->input('ID_sucursal');
        $hora_entrada= $request->input('hora_entrada');
        $hora_salida= $request->input('hora_salida');
        $sueldo= $request->input('sueldo');
        $password= $request->input('password');

        empleado::create(['DNI_empleado' => $DNI_empleado],
                        ['ID_sucursal' => $ID_sucursal],
                        ['hora_entrada' => $hora_entrada],
                        ['hora_salida' => $hora_salida],
                        ['sueldo' => $sueldo],
                        ['password' => $password]
                        );

        $cargo= $request->input('cargo');
        
       // return redirect()->route('empleado.show');
       return view('empleado.show');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_all()
    {
        $empleado = DB::table('EMPLEADO')
                        ->leftjoin('PERSONA','EMPLEADO.DNI_EMPLEADO','=','PERSONA.DNI_PERSONA')
                        ->select('EMPLEADO.DNI_EMPLEADO', 
                        'PERSONA.NOMBRES', 
                        'PERSONA.APELLIDOS' ,
                        'EMPLEADO.ID_SUCURSAL')
                        ->paginate(5);
                        ;


        return view('empleado.show_all', compact('empleado'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($DNI_EMPLEADO)
    {
        $empleado = DB::table('EMPLEADO')
        ->leftjoin('PERSONA','EMPLEADO.DNI_EMPLEADO','=','PERSONA.DNI_PERSONA')
        ->select('EMPLEADO.DNI_EMPLEADO', 
        'PERSONA.NOMBRES', 
        'PERSONA.APELLIDOS',
        'PERSONA.TELEFONO',
        'PERSONA.EMAIL',
        'EMPLEADO.HORA_ENTRADA',
        'EMPLEADO.HORA_SALIDA',
        'EMPLEADO.SUELDO',
        'EMPLEADO.ID_SUCURSAL')
        ->WHERE('EMPLEADO.DNI_EMPLEADO',$DNI_EMPLEADO)
        ->first()
        ;

        return view('empleado.show', compact('empleado'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado $empleado)
    {
        //
    }
}
