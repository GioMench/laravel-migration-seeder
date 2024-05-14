@extends('layouts.app')
@section('content')
    <section class="container">
        <h2 class="my-5">ultimi posti disponibili</h2>

        <div class="card my-5">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Arrivo</th>
                        <th scope="col">Orario partenza</th>
                        <th scope="col">N.treno</th>
                        <th scope="col">N.carrozze</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mytime_trains as $train )
                        <tr>
                            <th scope="row">{{ $train->azienda }}</th>
                            <td>{{ $train->stazione_di_partenza }}</td>
                            <td>{{ $train->stazione_di_arrivo }}</td>
                            <td>{{ $train->orario_di_partenza }}</td>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->numero_carrozze }}</td>
                        </tr>
                        @empty
                        <p>Scusa, non ci sono treni</p>
                    @endforelse
                </tbody>
            </table>
        </div>

    </section>
@endsection
