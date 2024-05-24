<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head', ['pageTitle' => 'Wypożyczalnia'])
<body>
    @include('shared.navbar')
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Gotowy do budowy? Wynajmij sprzęt z naszą wypożyczalnią!</h5>
                                    <p class="card-text">Właśnie planujesz remont domu lub budowę ogrodu? Nie trzeba inwestować fortuny w zakup drogiego sprzętu budowlanego. Nasza wypożyczalnia oferuje szeroki wybór profesjonalnego sprzętu, od wiertarek po koparki. Z nami możesz zrealizować swoje budowlane marzenia bez nadmiernych wydatków. Wynajmij sprzęt już dziś i rozpocznij pracę nad swoim projektem!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Buduj mądrze, oszczędzaj z nami!</h5>
                                    <p class="card-text">Budowa wymaga nie tylko wysiłku, ale także rozsądnego zarządzania finansami. Nasza wypożyczalnia sprzętu budowlanego to miejsce, gdzie możesz znaleźć wszystko, czego potrzebujesz, bez niszczenia budżetu. Oferujemy konkurencyjne ceny i wysokiej jakości sprzęt, który pomoże Ci zrealizować każdy projekt budowlany. Nie marnuj pieniędzy na zakup sprzętu, wynajmij go u nas!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Buduj mądrze, oszczędzaj z nami!</h5>
                                    <p class="card-text">Budowanie może być stresujące, ale nie musi być drogie! Nasza wypożyczalnia sprzętu budowlanego zapewnia Ci wszystko, czego potrzebujesz, aby zrealizować swój projekt bez zbędnego obciążania portfela. Oferujemy konkurencyjne ceny i elastyczne warunki wynajmu, dzięki którym możesz skoncentrować się na pracy, a nie na wydatkach. Wynajmij u nas sprzęt budowlany i ciesz się spokojem!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Wypożyczalnia sprzętu budowlanego z certyfikatem!</h5>
                                    <p class="card-text">Planujesz rozpocząć budowę czy remont, ale zależy Ci na jakości i bezpieczeństwie? Wybierz naszą wypożyczalnię, która posiada certyfikowane narzędzia i maszyny budowlane. Dzięki naszym certyfikatom możesz mieć pewność, że sprzęt, który wynajmujesz, jest w pełni bezpieczny i spełnia najwyższe standardy jakości. Realizuj swój projekt z pewnością, mając profesjonalny sprzęt z certyfikatem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <br>
    <div class="my-5"></div>

    <div class="table-responsive-sm">
        <div class="container">
            <h1>Nasze maszyny budowlane</h1>
            @can('is-admin')
                <a href="{{ route('machines.create') }}">Dodaj nową maszynę</a>
             @endcan
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Marka</th>
                        <th scope="col">Model</th>
                        <th scope="col">Rodzaj</th>
                        <th scope="col">Rok produkcji</th>
                        <th scope="col">Stan techniczny</th>
                        <th scope="col">Dostępność</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($machines as $machine)
                        <tr>
                            <th scope="row">{{$machine->id}}</th>
                            <td>{{$machine->brand}}</td>
                            <td>{{$machine->model}}</td>
                            <td>{{$machine->type}}</td>
                            <td>{{$machine->production_year}} rok</td>
                            <td>{{$machine->technical_condition}}</td>
                            <td>{{$machine->availability}}</td>
                            @can('is-admin')
                                <td><a href="{{route('machines.edit', $machine->id)}}">Edycja</a></td>

                            @endcan
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
</body>
</html>
