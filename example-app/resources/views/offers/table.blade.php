@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj Ofertę'])

<body>
    @include('shared.navbar')
    <div class="container mt-5 mb-5">
        <a href="{{ route('offers.create') }}">Dodaj nową ofertę</a>
        <div class="table-responsive-sm">
            <div class="container">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nazwa oferty</th>
                            <th scope="col">Cena za dzień</th>
                            <th scope="col">Typ silnika</th>
                            <th scope="col">Edytuj</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($offers as $offer)
                        <tr>
                            <th scope="row">{{$offer->id}}</th>
                            <td>{{$offer->name}}</td>
                            <td>{{$offer->price}}</td>
                            <td>silnik {{$offer->engine}} </td>
                            <td><a href="{{route('offers.edit', $offer->id)}}">Edycja</a></td>
                            <td>
                        </td>
                        </tr>
                        @empty
                        <tr>
                            <th scope="row" colspan="7">Brak maszyn.</th>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
