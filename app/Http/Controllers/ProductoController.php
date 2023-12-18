<?php

namespace App\Http\Controllers;

use App\Models\Categorium;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate();
        $categorias = Categorium::pluck('nombre', 'id');

        return view('producto.index', compact('productos', 'categorias'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $categorias = Categorium::pluck('nombre', 'id');
        return view('producto.create', compact('producto', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $categorias = Categorium::pluck('nombre', 'id');
        return view('producto.edit', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }


    public function findAnomaly()
    {
        $currentStock = Producto::orderBy('id')->pluck('cantidad_stock', 'id');

        $threshold = $currentStock->avg();

        foreach ($currentStock as $productId => $stock) {

            if ($stock > $threshold + 700 || $stock < $threshold - 700) {
                $productName = Producto::find($productId)->nombre_producto;
                return Redirect::route('dashboard-error', ['productName' => $productName]);
            }
        }
        return Redirect::route('dashboard-success');
    }

    public function report()
    {
        // Obtener datos necesarios
        $products = Producto::take(50)->get();


        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('my_views.testing.testing-pdfs', compact('alerts'));
        // return $pdf->download('Lista de alertas: ' . now() . '.pdf');
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('reports.productos.productos-report', compact('products'));
        return $pdf->download('Lista de productos: ' . now() . '.pdf');
        // return view('my_views.testing.testing-pdfs', compact('alerts'));
    }
}
