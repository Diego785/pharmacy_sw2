<?php

namespace App\Http\Controllers;

use App\Models\NotaBaja;
use Illuminate\Http\Request;

/**
 * Class NotaBajaController
 * @package App\Http\Controllers
 */
class NotaBajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notaBajas = NotaBaja::paginate();

        return view('nota-baja.index', compact('notaBajas'))
            ->with('i', (request()->input('page', 1) - 1) * $notaBajas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notaBaja = new NotaBaja();
        return view('nota-baja.create', compact('notaBaja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(NotaBaja::$rules);

        $notaBaja = NotaBaja::create($request->all());

        return redirect()->route('nota-bajas.index')
            ->with('success', 'NotaBaja created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notaBaja = NotaBaja::find($id);

        return view('nota-baja.show', compact('notaBaja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notaBaja = NotaBaja::find($id);

        return view('nota-baja.edit', compact('notaBaja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  NotaBaja $notaBaja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaBaja $notaBaja)
    {
        //request()->validate(NotaBaja::$rules);

        $notaBaja->update($request->all());

        return redirect()->route('nota-bajas.index')
            ->with('success', 'NotaBaja updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $notaBaja = NotaBaja::find($id)->delete();

        return redirect()->route('nota-bajas.index')
            ->with('success', 'NotaBaja deleted successfully');
    }
}
