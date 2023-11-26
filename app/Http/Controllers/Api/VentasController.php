<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    public function calcularTotalVentas()
    {
        // Assuming "ventas" refers to the total sales in the "factura" table
        $totalVentas = Factura::sum('total');

        return response()->json(['total_ventas' => $totalVentas]);
    }
    public function countVentas()
    {
        // Assuming "ventas" refers to the total sales in the "factura" table
        $totalVentas = Factura::count('id');

        return response()->json(['count_ventas' => $totalVentas]);
    }

    public function calculateOverallGrowth()
    {
        $porcentajesPorFecha = Factura::selectRaw('fecha, SUM(total) as total_sum')
            ->groupBy('fecha')
            ->orderBy('fecha')
            ->get()
            ->map(function ($item, $key) {
                return [
                    'fecha' => $item->fecha,
                    'total_sum' => $item->total_sum,
                ];
            })
            ->each(function ($item, $key) use (&$anteriorTotal) {
                $item['porcentaje_crecimiento'] = isset($anteriorTotal)
                    ? (($item['total_sum'] - $anteriorTotal) / abs($anteriorTotal)) * 100
                    : 0;
                $anteriorTotal = $item['total_sum'];
            });
    
        // Calcular el porcentaje de crecimiento total
        $porcentajeTotal = (($porcentajesPorFecha->last()['total_sum'] - $porcentajesPorFecha->first()['total_sum']) / abs($porcentajesPorFecha->first()['total_sum'])) * 100;
    
        return response()->json(['overall_growth_percentage' => $porcentajeTotal]);
    }
}
