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
                      <a href="{{route('offers.show', ['id' => $offers[1]->id])}}" class="btn btn-primary">Więcej szczegółów...</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width:39rem;">

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width:39rem;">

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width:39rem;">

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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

        <div class="row">

            </div>
        </div>
