@extends('layouts.admin')

@section('title', 'Keuzedeel Toevoegen/Bewerken')

@section('content')
    <h1 class="text-3xl font-bold text-tcr-green mb-6">KEUZEDEEL TOEVOEGEN</h1>

    <form method="POST" action="" class="bg-white rounded-lg shadow p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-semibold mb-2">NAAM *</label>
                <input type="text" name="naam" placeholder="Keuzedeel naam invoeren" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-tcr-lime focus:ring-2 focus:ring-tcr-lime">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">CODE * (VERPLICHT)</label>
                <input type="text" name="code" placeholder="B.V. 26604K0059" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-tcr-lime focus:ring-2 focus:ring-tcr-lime">
            </div>

            <div class="md:col-span-2">
                <label class="block text-gray-700 font-semibold mb-2">BESCHRIJVING *</label>
                <textarea name="beschrijving" placeholder="Beschrijving invoeren" rows="4" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-tcr-lime focus:ring-2 focus:ring-tcr-lime"></textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">AFBEELDING</label>
                <input type="file" name="afbeelding" class="w-full border border-gray-300 rounded px-3 py-2 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:bg-tcr-lime file:text-tcr-green file:font-semibold">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">PERIODE *</label>
                <select name="periode" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-tcr-lime focus:ring-2 focus:ring-tcr-lime">
                    <option value="1">Periode 1</option>
                    <option value="2">Periode 2</option>
                    <option value="3">Periode 3</option>
                    <option value="4">Periode 4</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">DOCENT</label>
                <input type="text" name="docent" placeholder="Docent naam" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-tcr-lime focus:ring-2 focus:ring-tcr-lime">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">LOCATIE</label>
                <input type="text" name="locatie" placeholder="Locatie" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-tcr-lime focus:ring-2 focus:ring-tcr-lime">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">MAX STUDENTEN *</label>
                <input type="number" name="max_studenten" placeholder="30" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-tcr-lime focus:ring-2 focus:ring-tcr-lime">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">MIN STUDENTEN *</label>
                <input type="number" name="min_studenten" placeholder="15" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-tcr-lime focus:ring-2 focus:ring-tcr-lime">
            </div>

            <div class="md:col-span-2">
                <h3 class="text-gray-700 font-semibold mb-3">OPTIES</h3>
                <div class="space-y-2">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="herhaalbaar" class="w-4 h-4 text-tcr-green rounded">
                        <span>HERHAALBAAR (MAG MEERDERE KEREN GEVOLGD WORDEN)</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="actief" class="w-4 h-4 text-tcr-green rounded" checked>
                        <span>ACTIEF (ZICHTBAAR VOOR STUDENTEN)</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="flex gap-4 mt-6 pt-6 border-t border-gray-200">
            <button type="button" class="bg-gray-200 text-gray-700 px-6 py-2 rounded font-semibold hover:bg-gray-300 transition-colors">ANNULEREN</button>
            <button type="submit" class="bg-tcr-lime text-tcr-green px-6 py-2 rounded font-semibold hover:bg-opacity-90 transition-colors">OPSLAAN</button>
        </div>
    </form>
@endsection