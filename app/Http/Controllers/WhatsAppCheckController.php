<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsAppCheckController extends Controller
{
    public function form()
    {
        return view('whatsapp-check-form');
    }

    public function check(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
        ]);

        $phoneNumber = $request->input('phone_number');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-RapidAPI-Key' => 'a12b72e8acmsh68e856f0f9a96e8p16d3acjsn7829def8a231',
            'X-RapidAPI-Host' => 'whatsapp-number-validator3.p.rapidapi.com',
        ])->post('https://whatsapp-number-validator3.p.rapidapi.com/WhatsappNumberHasItBulkWithToken', [
            'phone_numbers' => [$phoneNumber],
        ]);

        $result = $response->json();


        if (isset($result[0])) {
            $formattedResult = $result[0];
        } else {
            $formattedResult = $result; // في حالة error
        }

        return view('whatsapp-check-form', [
            'result' => $formattedResult,
            'number' => $phoneNumber
        ]);
    }
}
