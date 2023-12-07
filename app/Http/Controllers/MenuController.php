<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Factura;
use App\Models\Producto;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showMenu()
    {
        $qtyProducts = Producto::count();
        $qtyClients = Cliente::count();
        $sumVentas = Factura::sum('total');
        
        return view('menu', compact('qtyProducts', 'qtyClients', 'sumVentas'));
    }
    
    public function showMenuProjects()
    {
        $qtyProducts = Producto::count();
        $qtyClients = Cliente::count();
        $sumVentas = Factura::sum('total');
        
        smilify('error', 'No hay más proyectos!');
        return view('menu', compact('qtyProducts', 'qtyClients', 'sumVentas'));
    }

    public function showInicio()
    {
        return view('inicio');
    }

    public function showSoporte()
    {
        return view('soporte');
    }

    public function showContact()
    {
        return view('contactanos');
    }

    public function showPreguntas()
    {
        return view('preguntas-frecuentes');
    }

}
