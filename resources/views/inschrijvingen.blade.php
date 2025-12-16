@extends('layouts.app')

@section('title', 'Mijn Inschrijvingen')

@section('content')
    <nav class="mb-8">
        <a href="/dashboard" class="inline-flex items-center text-tcr-green hover:text-tcr-lime transition-all duration-300 group">
            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Terug naar overzicht
        </a>
    </nav>

    <h1 class="text-3xl font-bold text-tcr-green mb-6">MIJN INSCHRIJVINGEN</h1>

    <section class="bg-white rounded-lg shadow p-6 mb-6">
        <h2 class="text-xl font-bold text-tcr-green mb-4">HUIDIGE INSCHRIJVING</h2>
        <div class="flex items-center gap-4 p-4 border border-gray-200 rounded">
            <div class="w-16 h-16 bg-tcr-green rounded flex items-center justify-center">
                <span class="text-2xl text-white">X</span>
            </div>
            <div class="flex-1">
                <p class="font-semibold text-tcr-green">KEUZEDEEL A</p>
                <p class="text-gray-600">PERIODE: 1 | PLAATSEN: 15/30</p>
            </div>
            <button class="bg-red-500 text-white px-4 py-2 rounded font-semibold hover:bg-red-600 transition-colors">UITSCHRIJVEN</button>
        </div>
    </section>

    <section class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-bold text-tcr-green mb-4">GESCHIEDENIS</h2>
        <ul class="space-y-2">
            <li class="p-3 bg-gray-50 rounded flex items-center justify-between">
                <span>KEUZEDEEL X (PERIODE 1, 2024)</span>
                <span class="text-green-600 font-semibold">AFGEROND</span>
            </li>
            <li class="p-3 bg-gray-50 rounded flex items-center justify-between">
                <span>KEUZEDEEL Y (PERIODE 2, 2024)</span>
                <span class="text-green-600 font-semibold">AFGEROND</span>
            </li>
            <li class="p-3 bg-gray-50 rounded flex items-center justify-between">
                <span>KEUZEDEEL Z (PERIODE 3, 2024)</span>
                <span class="text-green-600 font-semibold">AFGEROND</span>
            </li>
        </ul>
    </section>
@endsection