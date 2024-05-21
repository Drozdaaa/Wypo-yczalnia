@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Wycieczka '.$offer->name])
  <body>
    @include('shared.navbar')

    <div id="wycieczki" class="container mt-5 mb-5">
        <div class="row m-2 text-center">
          <h1>Oferta</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">{{ $offer->name }}</h5>
                        <p class="card-text">{{ $offer->description }}</p>
                    </div>
                    <div class="card-footer text-center">
                        Silnik: {{$offer->engine}}
                </div>
                    <div class="card-footer text-center">
                            {{$offer->price}} PLN
                    </div>
                </div>
            </div>
        </div>
      </div>


</html>
