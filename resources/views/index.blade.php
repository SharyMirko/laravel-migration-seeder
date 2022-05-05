<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Che treno cerchi?</title>
</head>

<body>
    <header>
        <h1>Treni Fallimentari s.p.a</h1>
    </header>
    <main>
        <h2>Forse puoi prendere<h2>
                <div class="table-trains">
                    @foreach ($trains as $item)
                        @if ($item->data_partenza < date('H:i:s', time()))
                            <span>il treno n°{{ $item->codice_treno }} delle ore {{ $item->data_partenza }}
                                proveniente da
                                {{ $item->stazione_partenza }} e diretto a {{ $item->stazione_arrivo }}</span>
                        @endif
                    @endforeach
                </div>
    </main>
</body>

</html>
