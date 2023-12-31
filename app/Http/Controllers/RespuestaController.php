<?php

namespace App\Http\Controllers;

use App\Respuesta;
use App\Pregunta;
use Illuminate\Http\Request;

/**
 * Class RespuestaController
 * @package App\Http\Controllers
 */
class RespuestaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuestas = Respuesta::paginate();
        
        return view('respuesta.index', compact('respuestas'))
            ->with('i', (request()->input('page', 1) - 1) * $respuestas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $respuesta = new Respuesta();
        $preguntas = Pregunta::pluck('pregunta','id');
        return view('respuesta.create', compact('respuesta','preguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Respuesta::$rules);

        $respuesta = Respuesta::create($request->all());

        return redirect()->route('respuestas.index')
            ->with('success', 'Respuesta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respuesta = Respuesta::find($id);

        return view('respuesta.show', compact('respuesta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $respuesta = Respuesta::find($id);
        
        return view('respuesta.edit', compact('respuesta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Respuesta $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        request()->validate(Respuesta::$rules);

        $respuesta->update($request->all());
        
        return redirect()->route('respuestas.index')
            ->with('success', 'Respuesta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $respuesta = Respuesta::find($id)->delete();

        return redirect()->route('respuestas.index')
            ->with('success', 'Respuesta deleted successfully');
    }
    private $historial = [];

    private function agregarAlHistorial($pregunta, $respuesta)
    {
        $this->historial[] = [
            'pregunta' => $pregunta,
            'respuesta' => $respuesta ?: 'Lo siento, no tengo respuesta para esa pregunta.',
        ];
    }

    public function chat(Request $request)
    {
        $preguntaUsuario = $request->input('pregunta');
    
        // Buscar la respuesta en base a la pregunta del usuario
        $respuesta = Respuesta::whereHas('pregunta', function ($query) use ($preguntaUsuario) {
            $query->where('pregunta', $preguntaUsuario);
        })->first();
    
        $historial = $request->session()->get('historial', []);

        $historial[] = [
            'pregunta' => $preguntaUsuario,
            'respuesta' => $respuesta ? $respuesta->respuesta : 'Lo siento, no tengo respuesta para esa pregunta.',
        ];
    
        // Guardar el historial en la sesión
        $request->session()->put('historial', $historial);
    
        return view('paginas.cuerpochat', [
            'preguntaUsuario' => $preguntaUsuario,
            'respuestaBot' => $respuesta ? $respuesta->respuesta : 'Lo siento, no tengo respuesta para esa pregunta.',
            'historial' => $historial,
        ]);
    }       
   
}
