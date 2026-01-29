@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <h1 class="text-3xl font-bold text-tcr-green mb-6">ADMIN DASHBOARD</h1>

    <section class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <p class="text-gray-600 mb-2">TOTAAL STUDENTEN</p>
            <p class="text-4xl font-bold text-tcr-green">{{ $totaalStudenten }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <p class="text-gray-600 mb-2">INGESCHREVEN</p>
            <p class="text-4xl font-bold text-tcr-green">{{ $ingeschreven }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <p class="text-gray-600 mb-2">ACTIEVE KEUZEDELEN</p>
            <p class="text-4xl font-bold text-tcr-green">{{ $actieveKeuzedelen }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <p class="text-gray-600 mb-2">STATUS</p>
            <p class="text-xl font-bold text-tcr-lime">INSCHRIJVINGEN OPEN</p>
        </div>
    </section>

    <section class="bg-white rounded-lg shadow p-6 mb-8">
        <h2 class="text-xl font-bold text-tcr-green mb-4">SNELLE ACTIES</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="{{ route('admin.keuzedelen.create') }}" class="bg-tcr-lime text-tcr-green py-3 px-4 rounded font-semibold hover:bg-opacity-90 transition-colors inline-block text-center">
                + NIEUW KEUZEDEEL TOEVOEGEN
            </a>
            <a href="{{ route('admin.studenten.inlezen') }}" class="bg-tcr-green text-white py-3 px-4 rounded font-semibold hover:bg-opacity-90 transition-colors inline-block text-center">
                STUDENTEN INLEZEN (CSV)
            </a>
            <a href="{{ route('admin.instellingen') }}" class="bg-tcr-green text-white py-3 px-4 rounded font-semibold hover:bg-opacity-90 transition-colors inline-block text-center">
                INSCHRIJVINGEN OPENEN/SLUITEN
            </a>
            <a href="{{ route('admin.inschrijvingen.export') }}" class="bg-tcr-green text-white py-3 px-4 rounded font-semibold hover:bg-opacity-90 transition-colors inline-block text-center">
                EXPORT INSCHRIJVINGEN
            </a>
        </div>
    </section>

    <section class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-bold text-tcr-green mb-4">RECENTE ACTIVITEIT</h2>
        <ul class="space-y-2">
            @forelse($recenteActiviteit as $activiteit)
                <li class="p-3 bg-gray-50 rounded border-l-4 border-tcr-lime">
                    {{ strtoupper($activiteit->user->voornaam ?? $activiteit->user->name) }} {{ strtoupper($activiteit->user->achternaam ?? '') }} INGESCHREVEN VOOR {{ strtoupper($activiteit->keuzedeel->naam) }} ({{ $activiteit->created_at->diffForHumans() }})
                </li>
            @empty
                <li class="p-3 bg-gray-50 rounded border-l-4 border-gray-300">GEEN RECENTE ACTIVITEIT</li>
            @endforelse
        </ul>
    </section>
@endsection
