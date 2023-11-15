<?php

namespace App\Http\Controllers;

use App\Models\NotaDevolucion;
use Illuminate\Http\Request;

/**
 * Class NotaDevolucionController
 * @package App\Http\Controllers
 */
class NotaDevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notaDevolucions = NotaDevolucion::paginate();

        return view('nota-devolucion.index', compact('notaDevolucions'))
            ->with('i', (request()->input('page', 1) - 1) * $notaDevolucions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notaDevolucion = new NotaDevolucion();
        return view('nota-devolucion.create', compact('notaDevolucion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(NotaDevolucion::$rules);

        $notaDevolucion = NotaDevolucion::create($request->all());

        return redirect()->route('nota-devolucions.index')
            ->with('success', 'NotaDevolucion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notaDevolucion = NotaDevolucion::find($id);

        return view('nota-devolucion.show', compact('notaDevolucion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notaDevolucion = NotaDevolucion::find($id);

        return view('nota-devolucion.edit', compact('notaDevolucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  NotaDevolucion $notaDevolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaDevolucion $notaDevolucion)
    {
        //request()->validate(NotaDevolucion::$rules);

        $notaDevolucion->update($request->all());

        return redirect()->route('nota-devolucions.index')
            ->with('success', 'NotaDevolucion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $notaDevolucion = NotaDevolucion::find($id)->delete();

        return redirect()->route('nota-devolucions.index')
            ->with('success', 'NotaDevolucion deleted successfully');
    }
}
