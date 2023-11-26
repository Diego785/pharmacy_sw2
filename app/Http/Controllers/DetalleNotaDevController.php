<?php

namespace App\Http\Controllers;

use App\Models\DetalleNotaDev;
use Illuminate\Http\Request;

/**
 * Class DetalleNotaDevController
 * @package App\Http\Controllers
 */
class DetalleNotaDevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleNotaDevs = DetalleNotaDev::paginate();

        return view('detalle-nota-dev.index', compact('detalleNotaDevs'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleNotaDevs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleNotaDev = new DetalleNotaDev();
        return view('detalle-nota-dev.create', compact('detalleNotaDev'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(DetalleNotaDev::$rules);

        $detalleNotaDev = DetalleNotaDev::create($request->all());

        return redirect()->route('detalle-nota-devs.index')
            ->with('success', 'DetalleNotaDev created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleNotaDev = DetalleNotaDev::find($id);

        return view('detalle-nota-dev.show', compact('detalleNotaDev'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleNotaDev = DetalleNotaDev::find($id);

        return view('detalle-nota-dev.edit', compact('detalleNotaDev'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleNotaDev $detalleNotaDev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleNotaDev $detalleNotaDev)
    {
        //request()->validate(DetalleNotaDev::$rules);

        $detalleNotaDev->update($request->all());

        return redirect()->route('detalle-nota-devs.index')
            ->with('success', 'DetalleNotaDev updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleNotaDev = DetalleNotaDev::find($id)->delete();

        return redirect()->route('detalle-nota-devs.index')
            ->with('success', 'DetalleNotaDev deleted successfully');
    }
}
