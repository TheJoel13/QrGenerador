<?php
namespace App\Http\Controllers;

use App\Http\Requests\url;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class QrController extends Controller
{
    public function index(){
        return view('qr.index');
    }

    public function show(url $request)
    {
        $qr = QrCode::size(300)
            ->margin(1)
            ->generate($request->input('link'));
        $ruta = public_path('qr_images/qr_temp.png');
        File::put($ruta, $qr);
        return view('qr.show', compact('qr', 'ruta'));
    }

    public function descargaPdf(url $request)
    {
        $qr = QrCode::size(300)->generate($request->input('link'));
        $path = public_path('qr_images/qr_temp.png');
        File::put($path, $qr);
        $pdf = PDF::loadView('qr.pdf', compact('qr'));

        return $pdf->download('qr.pdf');
    }

    public function descargaPng(url $request)
    {
        $qr = QrCode::format('png')
        ->margin(1)
        ->size(300)
        ->generate($request->input('link'));
        $path = public_path('qr_images/Qr.png');
        File::put($path, $qr);

        return response()->download($path);
    }
}
