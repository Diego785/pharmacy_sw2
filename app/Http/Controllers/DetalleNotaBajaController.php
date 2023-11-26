<?php

namespace App\Http\Controllers;

use App\Models\DetalleNotaBaja;
use Illuminate\Http\Request;

/**
 * Class DetalleNotaBajaController
 * @package App\Http\Controllers
 */
class DetalleNotaBajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleNotaBajas = DetalleNotaBaja::paginate();

        return view('detalle-nota-baja.index', compact('detalleNotaBajas'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleNotaBajas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleNotaBaja = new DetalleNotaBaja();
        return view('detalle-nota-baja.create', compact('detalleNotaBaja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(DetalleNotaBaja::$rules);

        $detalleNotaBaja = DetalleNotaBaja::create($request->all());

        return redirect()->route('detalle-nota-bajas.index')
            ->with('success', 'DetalleNotaBaja created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleNotaBaja = DetalleNotaBaja::find($id);

        return view('detalle-nota-baja.show', compact('detalleNotaBaja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleNotaBaja = DetalleNotaBaja::find($id);

        return view('detalle-nota-baja.edit', compact('detalleNotaBaja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleNotaBaja $detalleNotaBaja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleNotaBaja $detalleNotaBaja)
    {
        //request()->validate(DetalleNotaBaja::$rules);

        $detalleNotaBaja->update($request->all());

        return redirect()->route('detalle-nota-bajas.index')
            ->with('success', 'DetalleNotaBaja updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleNotaBaja = DetalleNotaBaja::find($id)->delete();

        return redirect()->route('detalle-nota-bajas.index')
            ->with('success', 'DetalleNotaBaja deleted successfully');
    }
}
