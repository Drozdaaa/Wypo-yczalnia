<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Wypożyczalnia'])
<body>
    @include('shared.navbar')
    <div class="container mt-5">
        <div class="row">
            @forelse ($offers as $offer)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center mb-3">

                        <div class="card-body">
                            <h5 class="card-title">{{ $offer->name }}</h5>
                            <p class="card-text">{{ $offer->description }}</p>
                            <a href="{{route('offers.show', ['id' => $offer->id])}}" class="btn btn-primary">Więcej szczegółów...</a>
                            <br><br>
                            @can('is-admin')
                                <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-primary mb-2">Edycja</a>
                            @endcan
                        </div>
                    </div>
                </div>
                @empty
                <p>Brak ofert.</p>
                @endforelse
            </div>
        </div>
    </div>
