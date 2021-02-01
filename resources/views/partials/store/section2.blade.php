<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src={{$section[0]->image}} alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$section[0]->titre1}}</span>
                <span class="section-heading-lower">{{$section[0]->titre2}}</span>
              </h2>
              <p>{{$section[0]->textA}}{{$section[0]->textB}}</p>
              <p class="mb-0">{!!$section[0]->textC!!}{{$section[0]->textD}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>