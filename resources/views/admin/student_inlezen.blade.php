@extends('layouts.admin')

@section('title', 'Studenten Inlezen')

@section('content')
    <h1 class="text-3xl font-bold text-tcr-green mb-6">STUDENTEN INLEZEN</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {!! session('success') !!}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            {{ session('error') }}
        </div>
    @endif

    {{-- Toon gedetailleerde statistieken na import --}}
    @if(session('importStats'))
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                <div class="text-3xl font-bold text-blue-600">{{ session('importStats')['studenten'] }}</div>
                <div class="text-sm text-blue-700">Studenten geïmporteerd</div>
            </div>
            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                <div class="text-3xl font-bold text-green-600">{{ count(session('importStats')['behaalde_keuzedelen']) }}</div>
                <div class="text-sm text-green-700">Keuzedelen met behaalde resultaten</div>
            </div>
            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4">
                <div class="text-3xl font-bold text-purple-600">{{ session('importStats')['keuzedelen_nieuw'] }}</div>
                <div class="text-sm text-purple-700">Nieuwe keuzedelen aangemaakt</div>
            </div>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <p class="text-gray-700 mb-2">UPLOAD EEN CSV BESTAND MET STUDENTGEGEVENS EN KEUZEDEEL HISTORIE.</p>
        <p class="text-red-500 text-sm mb-2">OUDE INSCHRIJVINGEN WORDEN AUTOMATISCH BIJGEWERKT.</p>
        <p class="text-green-600 text-sm">✓ BEHAALDE KEUZEDELEN WORDEN AUTOMATISCH GEDETECTEERD</p>
    </div>

    <form action="{{ route('admin.studenten.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="bg-white rounded-lg shadow p-8 mb-6 border-2 border-dashed border-gray-300 hover:border-tcr-lime transition-colors">
            <div class="text-6xl text-gray-300 mb-4 text-center">📁</div>
            <p class="text-gray-600 mb-2 text-center">SELECTEER CSV BESTAND</p>
            <p class="text-gray-400 text-sm text-center mb-4">ONDERSTEUNDE FORMATEN: CSV (met ; als scheidingsteken)</p>
            
            <div class="flex justify-center">
                <input type="file" 
                       name="csv_file" 
                       accept=".csv" 
                       required
                       class="block w-full max-w-md text-sm text-gray-500
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-tcr-lime file:text-tcr-green
                              hover:file:bg-tcr-gold hover:file:text-white
                              cursor-pointer">
            </div>
            
            @error('csv_file')
                <p class="text-red-500 text-sm mt-2 text-center">{{ $message }}</p>
            @enderror
        </div>

        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h2 class="text-xl font-bold text-tcr-green mb-4">INSTRUCTIES:</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>CSV bestand moet een ; (puntkomma) als scheidingsteken gebruiken</li>
                <li>Studentnummer staat in kolom 3</li>
                <li>Naam staat in kolom 4</li>
                <li>Keuzedeel codes staan in de header (regel 5)</li>
                <li>Studenten krijgen automatisch email: [studentnummer]@student.tcr.nl</li>
                <li>Standaard wachtwoord: password123</li>
                <li>Status 'x' of 'pv' = pending, anders = completed</li>
            </ul>
        </div>

        <div class="flex justify-center mt-6">
            <button type="submit" 
                    class="bg-tcr-lime text-tcr-green font-bold py-3 px-8 rounded-full hover:bg-tcr-gold hover:text-white transition-colors">
                IMPORTEER CSV
            </button>
        </div>
    </form>

    {{-- Toon behaalde keuzedelen details --}}
    @if(session('behaaldeKeuzedelen'))
        <div class="bg-white rounded-lg shadow p-6 mt-6">
            <h2 class="text-xl font-bold text-tcr-green mb-4">📊 BEHAALDE KEUZEDELEN PER VAK</h2>
            <div class="space-y-4">
                @foreach(session('behaaldeKeuzedelen') as $code => $info)
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="font-semibold text-lg">{{ $info['naam'] }}</h3>
                                <p class="text-sm text-gray-600">Code: {{ $code }}</p>
                            </div>
                            <div class="text-right">
                                <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">
                                    {{ count($info['studenten']) }} student(en) behaald
                                </span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button onclick="toggleStudenten('{{ $code }}')" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                                Toon studenten ▼
                            </button>
                            <div id="studenten-{{ $code }}" class="hidden mt-2">
                                <div class="bg-gray-50 rounded p-3">
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                                        @foreach($info['studenten'] as $student)
                                            <span class="text-sm text-gray-700">• {{ $student }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script>
            function toggleStudenten(code) {
                const element = document.getElementById('studenten-' + code);
                element.classList.toggle('hidden');
                event.target.textContent = element.classList.contains('hidden') ? 'Toon studenten ▼' : 'Verberg studenten ▲';
            }
        </script>
    @endif

    {{-- Informatie over CSV formaat --}}
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 mt-6">
        <h2 class="text-lg font-semibold text-blue-900 mb-3">ℹ️ CSV FORMAAT INFORMATIE</h2>
        <ul class="space-y-2 text-sm text-blue-800">
            <li>• Het systeem detecteert automatisch behaalde keuzedelen op basis van cijfers en resultaten</li>
            <li>• Cijfer ≥ 5.5 = Behaald</li>
            <li>• "V", "Voldoende", "G", "Goed" = Behaald</li>
            <li>• "x", "pv" of leeg = Nog bezig/Gepland</li>
            <li>• Keuzedelen die nog niet bestaan worden automatisch aangemaakt</li>
        </ul>
    </div>
@endsection