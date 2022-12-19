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
                                <strong>

                                    azienda: {{ $train->azienda }}
                                </strong>
                            </li>
                            <li>
                                <strong>

                                    stazione partenza: {{ $train->stazione_partenza }}
                                </strong>
                            </li>
                            <li>
                                <strong>

                                    stazione arrivo: {{ $train->stazione_arrivo }}
                                </strong>
                            </li>
                            <li>
                                <strong>

                                    codice treno: {{ $train->codice_treno }}
                                </strong>
                            </li>
                            <li>
                                <strong>

                                    numero carrozze: {{ $train->numero_carrozze }}
                                </strong>
                            </li>
                            <li>
                                <strong>

                                    orario partenza: {{ $train->orario_partenza }}
                                </strong>
                            </li>
                            <li>
                                <strong>

                                    orario arrivo: {{ $train->orario_arrivo }}
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
