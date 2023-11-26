<?php

namespace App\Http\Controllers;

use App\Models\DetalleInventario;
use Illuminate\Http\Request;

/**
 * Class DetalleInventarioController
 * @package App\Http\Controllers
 */
class DetalleInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleInventarios = DetalleInventario::paginate();

        return view('detalle-inventario.index', compact('detalleInventarios'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleInventarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleInventario = new DetalleInventario();
        return view('detalle-inventario.create', compact('detalleInventario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(DetalleInventario::$rules);

        $detalleInventario = DetalleInventario::create($request->all());

        return redirect()->route('detalle-inventarios.index')
            ->with('success', 'DetalleInventario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleInventario = DetalleInventario::find($id);

        return view('detalle-inventario.show', compact('detalleInventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleInventario = DetalleInventario::find($id);

        return view('detalle-inventario.edit', compact('detalleInventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleInventario $detalleInventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleInventario $detalleInventario)
    {
        //request()->validate(DetalleInventario::$rules);

        $detalleInventario->update($request->all());

        return redirect()->route('detalle-inventarios.index')
            ->with('success', 'DetalleInventario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleInventario = DetalleInventario::find($id)->delete();

        return redirect()->route('detalle-inventarios.index')
            ->with('success', 'DetalleInventario deleted successfully');
    }
}
