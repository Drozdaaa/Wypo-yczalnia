<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Wypożyczalnia'])
<body>
    @include('shared.navbar')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container text-center">
              <div class="row">
                <div class="col">
                  <div class="card" style="width: 39rem;">

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Sprawdź oferty</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width:39rem;">

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Sprawdź ofertę</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item">
            <div class="container text-center">
              <div class="row">
                <div class="col">
                  <div class="card" style="width: 39rem;">

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Sprawdź ofertę</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width:39rem;">

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Sprawdź ofertę</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item">
            <div class="container text-center">
              <div class="row">
                <div class="col">
                  <div class="card" style="width: 39rem;">

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Sprawdź ofertę</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width:39rem;">

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Sprawdź ofertę</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <br><br><br><br><br><br>
    <div class="table-responsive-sm">
        <div class="container">
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
