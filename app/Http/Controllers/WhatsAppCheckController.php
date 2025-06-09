<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsAppCheckController extends Controller
{
    public function check(Request $request)
    {
        // أرقام الهاتف لاختبار الـ API (ممكن تخليها من الـ form)
        $phoneNumbers = [
            "447781888081",  // مثال رقم
            "447999999999"   // مثال رقم
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-RapidAPI-Key' => 'a12b72e8acmsh68e856f0f9a96e8p16d3acjsn7829def8a231', // غيره بمفتاحك الفعلي
            'X-RapidAPI-Host' => 'whatsapp-number-validator3.p.rapidapi.com',
        ])->post('https://whatsapp-number-validator3.p.rapidapi.com/WhatsappNumberHasItBulkWithToken', [
            'phone_numbers' => $phoneNumbers,
        ]);

        $result = $response->json();

        return view('whatsapp-check', compact('result'));
    }
}

