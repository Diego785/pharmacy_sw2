<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Http\Request;

/**
 * Class NotificacionController
 * @package App\Http\Controllers
 */
class NotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notificacions = Notificacion::paginate();

        return view('notificacion.index', compact('notificacions'))
            ->with('i', (request()->input('page', 1) - 1) * $notificacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notificacion = new Notificacion();
        return view('notificacion.create', compact('notificacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Notificacion::$rules);

        $notificacion = Notificacion::create($request->all());

        return redirect()->route('notificacions.index')
            ->with('success', 'Notificacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notificacion = Notificacion::find($id);

        return view('notificacion.show', compact('notificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notificacion = Notificacion::find($id);

        return view('notificacion.edit', compact('notificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Notificacion $notificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notificacion $notificacion)
    {
        //request()->validate(Notificacion::$rules);

        $notificacion->update($request->all());

        return redirect()->route('notificacions.index')
            ->with('success', 'Notificacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $notificacion = Notificacion::find($id)->delete();

        return redirect()->route('notificacions.index')
            ->with('success', 'Notificacion deleted successfully');
    }
}
