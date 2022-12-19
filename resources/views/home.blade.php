@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @foreach ($trains as $train)
                <div class="col-10 offset-1 p-3">
                    <div class="rounded-4 p-4" style="background-color: white;">
                        <h4>
                            TRENO N°{{ $train->id }}
                        </h4>
                        <ul>
                            <li>
                                azienda: {{ $train->azienda }}
                            </li>
                            <li>
                                stazione partenza: {{ $train->stazione_partenza }}
                            </li>
                            <li>
                                stazione arrivo: {{ $train->stazione_arrivo }}
                            </li>
                            <li>
                                codice treno: {{ $train->codice_treno }}
                            </li>
                            <li>
                                numero carrozze: {{ $train->numero_carrozze }}
                            </li>
                            <li>
                                orario partenza: {{ $train->orario_partenza }}
                            </li>
                            <li>
                                orario arrivo: {{ $train->orario_arrivo }}
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
