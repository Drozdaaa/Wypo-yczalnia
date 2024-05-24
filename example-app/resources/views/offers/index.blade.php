<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Oferty'])
<body>
    @include('shared.navbar')
    <div class="row mt-4 mb-4 text-center">
        <h1>Nasze oferty</h1>
    </div>
    <div class="container mt-5">
        @can('is-admin')
        <a href="{{ route('offers.table') }}">Edytuj oferty</a>
        @endcan
        <div class="row">
            @forelse ($offers as $offer)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center mb-3">

                        <div class="card-body">
                            <h5 class="card-title">{{ $offer->name }}</h5>

                            <a href="{{route('offers.show', ['id' => $offer->id])}}" class="btn btn-primary">Więcej szczegółów...</a>
                            <br><br>
                        </div>
                    </div>
                </div>
                @empty
                <h1>Brak ofert.</h1>
                @endforelse
            </div>
        </div>
    </div>
