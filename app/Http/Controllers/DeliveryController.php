<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /*public function index()
    {
        // Datos simulados (maqueta)
        $deliveries = [
            [
                'id' => 5056,
                'date' => '2025-09-10',
                'driver' => 'Travis J',
                'city' => 'Savannah',
                'container' => '318362-6',
                'miles' => 60,
                'customer' => 'RP Customer',
                'rate' => 200,
                'status' => 'pending',
            ],
            [
                'id' => 5058,
                'date' => '2025-09-11',
                'driver' => 'Andres',
                'city' => 'Newark',
                'container' => '50028111',
                'miles' => 193,
                'customer' => 'Arthur',
                'rate' => 350,
                'status' => 'completed',
            ],
        ];

        return view('deliveries.index', compact('deliveries'));
    }

    public function pdf($id)
    {
        // Datos simulados para el PDF
        $delivery = [
            'id' => $id,
            'driver' => 'Andres',
            'container' => '50028111',
            'city' => 'Newark',
            'miles' => 193,
            'pickup' => '295 Doremus Ave Newark 07105',
            'delivery' => '508 Buck Hill Rd Pascoag Rhode Island',
            'customer' => 'Arthur',
            'rate' => 350,
        ];

        $pdf = Pdf::loadView('deliveries.pdf', compact('delivery'));

        return $pdf->download("delivery-{$id}.pdf");
    }

    public function sheetPdf()
    {

    $data = [
    'order' => '3101325',
    'release' => '50028111',
    'driver' => 'ANDRES',
    'container' => '318362-6',
    'city' => 'NEWARK',
    'miles' => '193',
    'pickup' => '295 DOREMUS AVE NEWARK 07105',
    'delivery' => '508 BUCK HILL RD PASCOAG RHODE ISLAND 02859',
    'phone' => 'ARTHUR / 4016398981',
    'date' => '10/21/2025'
    ];

    $pdf = Pdf::loadView('deliveries.sheet_pdf', $data)
    ->setPaper('A4');

    return $pdf->download('delivery-sheet.pdf');

    }*/

     // Datos simulados para la maqueta
    // Datos simulados para la maqueta
    private $deliveries = [
        [
            'id' => 5056,
            'date' => '2026-03-10',
            'driver' => 'Travis J',
            'city' => 'Savannah',
            'container' => '318362-6',
            'miles' => 60,
            'customer' => 'RP Customer',
            'rate' => 200,
            'status' => 'Pending',
            'pickup' => '123 Main St Savannah GA',
            'delivery' => '456 Oak St Savannah GA',
            'phone' => '555-1234'
        ],
        [
            'id' => 5058,
            'date' => '2026-02-11',
            'driver' => 'Andres',
            'city' => 'Newark',
            'container' => '50028111',
            'miles' => 193,
            'customer' => 'Arthur',
            'rate' => 350,
            'status' => 'Completed',
            'pickup' => '295 Doremus Ave Newark NJ',
            'delivery' => '508 Buck Hill Rd Pascoag RI',
            'phone' => '401-639-8981'
        ],
    ];

    public function index()
    {
        $deliveries = $this->deliveries;
        return view('deliveries.index', compact('deliveries'));
    }

    public function index_releases()
    {

        // DATA DEMO (SIMULANDO EXCEL DEL CLIENTE)

        $releases = [

            [
                'id' => 65,
                'date' => '10/18/2025',
                'type' => 'REFERS',
                'measures' => '40FT',
                'seller' => 'GRAND PACIFIC',
                'depot' => 'MIAMI CONTAINER',
                'release' => 'RPT-1018R',
                'price' => 18000,
                'qty' => 1,
                'inv_inicial' => 1,
                'pickup' => 0,
                'stock' => 1,
                'pickup_date' => null
            ],

            [
                'id' => 58,
                'date' => '10/07/2025',
                'type' => 'USED',
                'measures' => '40FT',
                'seller' => 'CARU CONT',
                'depot' => 'MARITIME CONTAINER',
                'release' => '50012531',
                'price' => 1250,
                'qty' => 10,
                'inv_inicial' => 10,
                'pickup' => 3,
                'stock' => 7,
                'pickup_date' => '10/21/2025'
            ]

        ];

        $totalSales = 30500;
        $remaining = 26750;
        $stock = 8;
        $containersSold = 4;
        $containersAvailable = 8;

        return view('releases.index', compact(
            'releases',
            'totalSales',
            'remaining',
            'stock',
            'containersSold',
            'containersAvailable'
        ));
    
    }


    public function pdf($id)
    {
        // Buscar delivery en datos simulados
        $delivery = collect($this->deliveries)->firstWhere('id', $id);

        // Si no existe (nuevo delivery), usar datos de request
        if (!$delivery) {
            $query = request()->all();

            $delivery = [
                'id'        => $id,
                'driver'    => $query['driver'] ?? 'Demo Driver',
                'container' => $query['container'] ?? '000000',
                'city'      => $query['city'] ?? 'Demo City',
                'miles'     => $query['miles'] ?? 50,
                'customer'  => $query['customer'] ?? 'Demo Customer',
                'rate'      => $query['rate'] ?? 100,
                'status'    => $query['status'] ?? 'Pending',
                'pickup'    => $query['pickup'] ?? 'Demo Pickup Address',
                'delivery'  => $query['delivery'] ?? 'Demo Delivery Address',
                'phone'     => $query['phone'] ?? '000-0000',
                'date'      => $query['date'] ?? date('Y-m-d'),
            ];
        }

        $pdf = Pdf::loadView('deliveries.sheet_pdf', compact('delivery'))->setPaper('A4');

        return $pdf->download("delivery-{$id}.pdf");
    }

    public function sheetPdf($id)
    {
        $delivery = collect($this->deliveries)->firstWhere('id', $id);
        $pdf = Pdf::loadView('deliveries.sheet_pdf', compact('delivery'))->setPaper('A4');
        return $pdf->download("delivery-sheet-{$id}.pdf");
    }

    public function calendar()
    {
        $deliveries = [
            [
                'id' => 5056,
                'title' => 'Savannah - Travis J',
                'start' => '2026-03-10',
                'status' => 'Pending',
                'color' => '#f59e0b'
            ],
            [
                'id' => 5058,
                'title' => 'Newark - Andres',
                'start' => '2026-02-11',
                'status' => 'Completed',
                'color' => '#16a34a'
            ],
            [
                'id' => 5060,
                'title' => 'Miami - Carlos',
                'start' => '2026-03-12',
                'status' => 'In Transit',
                'color' => '#2563eb'
            ],
        ];

        return view('deliveries.calendar', compact('deliveries'));
    }

    public function finvoice(){

        return view('finanzas.invoice');
    }

    public function yard(){

        return view('deliveries.yard');
    }

    public function reportes_drivers(){

        return view('reportes.drivers');
    }

   /* public function pdf_yard(Request $request)
    {
     $data = $request->all();

        $pdf = Pdf::loadView('pdf.yard-receipt', $data)
            ->setPaper('letter');

        return $pdf->download('yard-service-receipt.pdf');
  
    }*/

     public function pdf_yard($id)
    {
        // Buscar delivery en datos simulados
        $delivery = collect($this->deliveries)->firstWhere('id', $id);

        // Si no existe (nuevo delivery), usar datos de request
        if (!$delivery) {
            $query = request()->all();

            $delivery = [
                'id'        => $id,
                'driver'    => $query['driver'] ?? 'Demo Driver',
                'container' => $query['container'] ?? '000000',
                'city'      => $query['city'] ?? 'Demo City',
                'miles'     => $query['miles'] ?? 50,
                'customer'  => $query['customer'] ?? 'Demo Customer',
                'rate'      => $query['rate'] ?? 100,
                'status'    => $query['status'] ?? 'Pending',
                'pickup'    => $query['pickup'] ?? 'Demo Pickup Address',
                'delivery'  => $query['delivery'] ?? 'Demo Delivery Address',
                'phone'     => $query['phone'] ?? '000-0000',
                'date'      => $query['date'] ?? date('Y-m-d'),
            ];
        }

        $pdf = Pdf::loadView('deliveries.sheet_pdf', compact('delivery'))->setPaper('A4');

        return $pdf->download("delivery-{$id}.pdf");
    }
}
