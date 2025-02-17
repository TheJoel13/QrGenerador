<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;
class QrController extends Controller
{
    public function index(){
        return view('qr.index');
    }

    public function show(Request $request){
        $request->validate([
            'link' => 'required|url',
        ]);

        $qrCode = QrCode::size(300)->generate($request->input('link'));

        $path = public_path('qr_images/qr_temp.png');
        File::put($path, $qrCode);

        return view('qr.show', compact('qrCode'));
    }

    public function downloadPdf(Request $request)
    {
        $request->validate([
            'link' => 'required|url',
        ]);

        $qrCode = QrCode::size(300)->generate($request->input('link'));

        $path = public_path('qr_images/qr_temp.png');
        File::put($path, $qrCode);
        $pdf = PDF::loadView('qr.pdf', compact('qrCode'));

        return $pdf->download('qr_code.pdf');
    }
}
