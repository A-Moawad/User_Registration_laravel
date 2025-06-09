@extends('welcome')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">
                {{ __('messages.check_whatsapp_number') ?? 'تحقق من رقم WhatsApp' }}
            </h2>

            @if ($errors->any())
                <div class="mb-4 text-red-600 bg-red-100 p-2 rounded">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('whatsapp.check') }}" class="space-y-4">
                @csrf
                <label for="phone_number" class="block text-sm font-medium text-gray-700">
                    {{ __('messages.phone_number') ?? 'رقم الهاتف مع كود الدولة' }}
                </label>
                <input type="text" id="phone_number" name="phone_number"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="+201234567890" required>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded font-semibold transition">
                    {{ __('messages.check') ?? 'تحقق' }}
                </button>
            </form>

            @if (isset($result))
                <div class="mt-6 p-4 bg-gray-50 border rounded">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">النتيجة:</h3>
                    <p class="text-gray-700">📱 الرقم: <strong>{{ $number }}</strong></p>

                    <p class="mt-2 text-lg font-bold">
                        الحالة:
                        @if (isset($result['isWhatsapp']))
                            @if ($result['isWhatsapp'])
                                <span class="text-green-600">✅ الرقم مسجل على WhatsApp</span>
                            @else
                                <span class="text-red-600">❌ الرقم غير مسجل على WhatsApp</span>
                            @endif
                        @elseif(isset($result['message']))
                            <span class="text-yellow-600">⚠️ {{ $result['message'] }}</span>
                        @else
                            ⚠️ لا يمكن تحديد الحالة من البيانات
                        @endif
                    </p>
                </div>
            @endif

        </div>
    </div>
@endsection
