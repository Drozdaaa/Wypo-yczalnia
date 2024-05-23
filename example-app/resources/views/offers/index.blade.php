zrobić przycisk edytuj oferty który przenosi na stronę z tabelą ofert
<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Oferty'])
<body>
    @include('shared.navbar')
    <div class="row mt-4 mb-4 text-center">
        <h1>Nasze oferty</h1>
    </div>

        @can('is-admin')
        <div class="row mb-2">
            <a href="{{ route('offers.table') }}" >edytuj oferty</a>
        </div>
        @endcan

    <div class="container mt-5">
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
                <p>Brak ofert.</p>
                @endforelse
            </div>
        </div>
    </div>
