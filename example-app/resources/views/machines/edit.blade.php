@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj Maszyny'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">



        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane maszyn</h1>
        </div>



        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('machines.update', $machine->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="brand" class="form-label">Nazwa</label>
                        <input id="brand" name="brand" type="text"
                        class="form-control @if ($errors->first('brand')) is-invalid @endif" value="{{ $machine->brand }}">
                        <div class="invalid-feedback">Nieprawidłowe nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="model" class="form-label">Model</label>
                        <input id="model" name="model" type="text"
                        class="form-control @if ($errors->first('model')) is-invalid @endif"  value="{{ $machine->model }}">
                        <div class="invalid-feedback">Nieprawidłowy Model!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="type" class="form-label">Typ</label>
                        <input id="type" name="type" type="text"
                        class="form-control @if ($errors->first('type')) is-invalid @endif"  value="{{ $machine->type }}">
                        <div class="invalid-feedback">Nieprawidłowy typ!</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="production_year" class="form-label">Rok produkcji</label>
                        <div class="input-group mb-3">
                            <input id="production_year" type="number" name="production_year" min="1980" placeholder="0"
                                step="any" class="form-control @if ($errors->first('production_year')) is-invalid @endif" value="{{ $machine->production_year }}">
                        </div>
                        <div class="invalid-feedback">Nieprawidłowy rok!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="technical_condition" class="form-label">Stan techniczny</label>
                        <select id="technical_condition" name="technical_condition" class="form-select @if ($errors->first('technical_condition')) is-invalid @endif">
                            <option value="Bardzo dobry">Bardzo dobry</option>
                            <option value="Używany">Używany</option>
                            <option value="Uszkodzony">Uszkodzony</option>
                            <option value="W naprawie">W naprawie</option>
                        </select>
                        <div class="invalid-feedback">Nieprawidłowy stan techniczny!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="availability" class="form-label">Dostępność</label>
                        <select id="availability" name="availability" class="form-select @if ($errors->first('availability')) is-invalid @endif">
                            <option value="Dostępny">Dostępny</option>
                            <option value="Niedostępny">Niedostępny</option>
                        </select>
                        <div class="invalid-feedback">Nieprawidłowa dostępność!</div>
                    </div>

                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>

                </form>
                <form method="POST" action="{{ route('machines.destroy', $machine->id) }}">
                    @csrf
                    @method('DELETE')
                    <div class="text-center mt-4 mb-4">
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
