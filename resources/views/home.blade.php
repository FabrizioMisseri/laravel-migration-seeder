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

                                    azienda:
                                </strong>
                                {{ $train->azienda }}
                            </li>
                            <li>
                                <strong>

                                    stazione partenza:
                                </strong>
                                {{ $train->stazione_partenza }}
                            </li>
                            <li>
                                <strong>

                                    stazione arrivo:
                                </strong>
                                {{ $train->stazione_arrivo }}
                            </li>
                            <li>
                                <strong>

                                    codice treno:
                                </strong>
                                {{ $train->codice_treno }}
                            </li>
                            <li>
                                <strong>

                                    numero carrozze:
                                </strong>
                                {{ $train->numero_carrozze }}
                            </li>
                            <li>
                                <strong>

                                    orario partenza:
                                </strong>
                                {{ $train->orario_partenza }}
                            </li>
                            <li>
                                <strong>

                                    orario arrivo:
                                </strong>
                                {{ $train->orario_arrivo }}
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
