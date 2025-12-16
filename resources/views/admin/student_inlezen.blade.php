@extends('layouts.admin')

@section('title', 'Studenten Inlezen')

@section('content')
    <h1 class="text-3xl font-bold text-tcr-green mb-6">STUDENTEN INLEZEN</h1>

    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <p class="text-gray-700 mb-2">UPLOAD EEN OF MEERDERE CSV BESTANDEN MET STUDENTGEGEVENS EN KEUZEDEEL HISTORIE.</p>
        <p class="text-red-500 text-sm">OUDE INSCHRIJVINGEN WORDEN AUTOMATISCH VERWIJDERD.</p>
    </div>

    <div class="bg-white rounded-lg shadow p-8 mb-6 border-2 border-dashed border-gray-300 text-center hover:border-tcr-lime transition-colors cursor-pointer">
        <div class="text-6xl text-gray-300 mb-4">📁</div>
        <p class="text-gray-600 mb-2">SLEEP BESTANDEN HIERHEEN OF KLIK OM TE UPLOADEN</p>
        <p class="text-gray-400 text-sm">ONDERSTEUNDE FORMATEN: CSV</p>
        <input type="file" class="hidden" multiple accept=".csv">
    </div>

    <section class="bg-white rounded-lg shadow p-6 mb-6">
        <h2 class="text-xl font-bold text-tcr-green mb-4">GESELECTEERDE BESTANDEN:</h2>
        <ul class="space-y-2">
            <li class="p-3 bg-gray-50 rounded flex justify-between items-center">
                <span>SD2A_KEUZEDELEN.CSV</span>
                <button class="text-red-500 hover:text-red-700">VERWIJDEREN</button>
            </li>
            <li class="p-3 bg-gray-50 rounded flex justify-between items-center">
                <span>SD2B_KEUZEDELEN.CSV</span>
                <button class="text-red-500 hover:text-red-700">VERWIJDEREN</button>
            </li>
            <li class="p-3 bg-gray-50 rounded flex justify-between items-center">
                <span>SD2C_KEUZEDELEN.CSV</span>
                <button class="text-red-500 hover:text-red-700">VERWIJDEREN</button>
            </li>
        </ul>
    </section>

    <div>
        <button class="bg-tcr-lime text-tcr-green px-6 py-3 rounded font-semibold hover:bg-opacity-90 transition-colors">BESTANDEN INLEZEN EN VERWERKEN</button>
    </div>
@endsection