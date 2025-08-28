<?php

namespace App\Http\Controllers;

use App\Http\Requests\url;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;

class QrController extends Controller
{
    public function index()
    {
        return view('qr.index');
    }

    public function show(url $request)
    {
        $qr = QrCode::format('svg')
            ->size(300)
            ->margin(1)
            ->generate($request->input('link'));

        return view('qr.show', compact('qr'));
    }

    public function descargaPdf(url $request)
    {
        $qrPng = QrCode::format('png')
            ->size(300)
            ->margin(1)
            ->generate($request->input('link'));

        $qrBase64 = base64_encode($qrPng);
        $link = $request->input('link');

        $pdf = Pdf::loadView('qr.pdf', [
            'qrBase64' => $qrBase64,
            'link' => $link
        ]);

        return $pdf->download('qr.pdf');
    }

    public function descargaPng(url $request)
    {
        $qr = QrCode::format('png')
            ->size(300)
            ->margin(1)
            ->generate($request->input('link'));

        return response($qr)
            ->header('Content-Type', 'image/png')
            ->header('Content-Disposition', 'attachment; filename="qr.png"');
    }
}
