@extends('layouts.app')

@section('title', 'SLB Presentatie')

@section('content')
    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 bg-tcr-green flex items-center justify-center p-12">
                <div class="w-64 h-64 bg-white/10 rounded-lg flex items-center justify-center">
                    <span class="text-8xl text-white">X</span>
                </div>
            </div>

            <div class="md:w-1/2 p-8">
                <h1 class="text-3xl font-bold text-tcr-green mb-6">KEUZEDEEL NAAM</h1>

                <h2 class="text-lg font-semibold text-tcr-green mb-2">BESCHRIJVING:</h2>
                <p class="text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <div class="space-y-2 text-gray-700">
                    <p><span class="font-semibold">PERIODE:</span> 1</p>
                    <p><span class="font-semibold">DOCENT:</span> [Naam]</p>
                    <p><span class="font-semibold">LOCATIE:</span> [Locatie]</p>
                    <p><span class="font-semibold">PLAATSEN:</span> 15-30 STUDENTEN</p>
                    <p><span class="font-semibold">CODE:</span> 26604K0059</p>
                </div>
            </div>
        </div>

        <section class="bg-gray-50 p-6 border-t border-gray-200">
            <h3 class="text-lg font-semibold text-tcr-green mb-3">EXTRA INFORMATIE:</h3>
            <ul class="space-y-1 text-gray-700">
                <li class="flex items-center gap-2"><span class="text-tcr-lime">→</span> Vereiste voorkennis</li>
                <li class="flex items-center gap-2"><span class="text-tcr-lime">→</span> Leerdoelen</li>
                <li class="flex items-center gap-2"><span class="text-tcr-lime">→</span> Toetsing</li>
            </ul>
        </section>
    </div>

    <nav class="fixed bottom-0 left-0 right-0 bg-tcr-green text-white p-4 flex items-center justify-center gap-6">
        <button class="bg-white/10 hover:bg-white/20 px-6 py-2 rounded font-semibold transition-colors">&larr; VORIGE</button>
        <span class="text-lg font-semibold">SLIDE 1 / 12</span>
        <button class="bg-tcr-lime text-tcr-green px-6 py-2 rounded font-semibold hover:bg-opacity-90 transition-colors">VOLGENDE &rarr;</button>
        <button class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded font-semibold transition-colors ml-4">SLUITEN</button>
    </nav>

    <div class="h-20"></div>
@endsection
