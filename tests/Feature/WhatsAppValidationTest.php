<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class WhatsAppValidationTest extends TestCase
{
    /** @test */
    public function it_can_check_if_a_number_is_whatsapp()
    {
        // fake response (اختياري لو مش عاوز تستهلك الـ API فعليًا كل مرة)
        Http::fake([
            'https://whatsapp-number-validator3.p.rapidapi.com/*' => Http::response([
                [
                    'number' => '447781888081',
                    'status' => 'valid',
                    'isWhatsapp' => true
                ]
            ], 200),
        ]);

        // استدعاء فعلي لـ route بتاعك
        $response = $this->get('/check-whatsapp');

        $response->assertStatus(200);
        $response->assertSee('447781888081');
        $response->assertSee('valid');
        $response->assertSee('isWhatsapp');
    }
}
