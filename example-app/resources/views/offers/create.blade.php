@include('shared.html')

@include('shared.head', ['pageTitle' => 'Dodaj nową ofertę'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">

        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Dodaj nową ofertę</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('offer.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ old('name') }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="price" class="form-label">Cena</label>
                        <div class="input-group mb-2">
                            <input id="price" type="number" name="price" min="0" placeholder="0"
                                step="any" class="form-control @if ($errors->first('price')) is-invalid @endif" value="{{ old('price') }}">
                            <span class="input-group-text"> PLN</span>
                        </div>
                        <div class="invalid-feedback">Nieprawidłowa cena!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="description" class="form-label">Opis</label>
                        <textarea id="description" name="description" type="text" rows="5" class="form-control @if ($errors->first('description')) is-invalid @endif" value="{{ old('description') }}"></textarea>
                        <div class="invalid-feedback">Nieprawidłowy opis!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="engine" class="form-label">Typ silnika</textarea></label>
                        <select id="engine" name="engine" class="form-select @if ($errors->first('engine')) is-invalid @endif">
                            <option value="Diesel">Diesel</option>
                            <option value="Benzyna">Benzyna</option>
                            <option value="Elektryczny">Elektryczny</option>
                        </select>
                        <div class="invalid-feedback">Nieprawidłowy Typ silnika!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="machine_id" class="form-label">Rodzaj maszyny</label>
                        <select id="machine_id" name="machine_id" class="form-select @if ($errors->first('machine_id')) is-invalid @endif">
                            @foreach($machines as $machine)
                                <option value="{{$machine->id}}">{{$machine->id}}.{{$machine->type}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Nieprawidłowa maszyna!</div>
                    </div>

                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
