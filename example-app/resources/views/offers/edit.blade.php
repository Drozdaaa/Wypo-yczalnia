@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj Ofertę'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">



        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane oferty</h1>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('offers.update', $offer->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text"
                        class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ $offer->name }}">
                        <div class="invalid-feedback">Nieprawidłowe nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="price" class="form-label">Cena</label>
                        <input id="price" name="price" type="text"
                        class="form-control @if ($errors->first('price')) is-invalid @endif"  value="{{ $offer->price }}">
                        <div class="invalid-feedback">Nieprawidłowy Model!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="description" class="form-label">Opis</label>
                        <textarea id="description" name="description" type="text" rows="5"
                        class="form-control @if ($errors->first('description')) is-invalid @endif" >{{ $offer->description }}</textarea>
                        <div class="invalid-feedback">Nieprawidłowy opis!</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="engine" class="form-label">Typ silnika</label>
                        <select id="engine" name="engine" class="form-select @if ($errors->first('engine')) is-invalid @endif">
                            <option value="Diesel">Diesel</option>
                            <option value="Benzyna">Benzyna</option>
                            <option value="Elektryczny">Elektryczny</option>
                        </select>
                        <div class="invalid-feedback">Nieprawidłowy silnik!</div>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
                <form method="POST" action="{{ route('offers.destroy', $offer->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Usuń</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
