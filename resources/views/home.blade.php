<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <h1>Treni in partenza oggi</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Azienda</th>
                        <th>Stazione di partenza</th>
                        <th>Stazione di arrivo</th>
                        <th>Data di partenza</th>
                        <th>Data di arrivo</th>
                        <th>Orario di partenza</th>
                        <th>Orario di arrivo</th>
                        <th>Codice treno</th>
                        <th>Numero di carrozze</th>
                        <th>Stato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->Azienda }}</td>
                        <td>{{ $train->Stazione_di_partenza }}</td>
                        <td>{{ $train->Stazione_di_arrivo }}</td>
                        <td>{{ $train->Data_di_partenza }}</td>
                        <td>{{ $train->Data_di_arrivo }}</td>
                        <td>{{ $train->Orario_di_partenza }}</td>
                        <td>{{ $train->Orario_di_arrivo }}</td>
                        <td>{{ $train->Codice_Treno }}</td>
                        <td>{{ $train->Numero_Carrozze }}</td>
                        <td>
                            @if($train->In_orario)
                            In orario
                            @elseif($train->In_ritardo)
                            In ritardo
                            @elseif($train->Cancellato)
                            Cancellato
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>

</body>

</html>