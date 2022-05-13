@foreach ($data as $train)

<div class="container">
    <div class="img-box">
        <img src="" class="card-img" alt="">

    </div>
    <div class="card-text">
        <h5 class="card-title">{{$train->azienda}}</h5>
        <h5 class="card-title">{{$train->stazione_di_partenza}}</h5>
        <h5 class="card-title">{{$train->stazione_di_arrivo}}</h5>
        <h5 class="card-title">{{$train->orario_di_partenza}}</h5>
        <h5 class="card-title">{{$train->orario_di_arrivo}}</h5>
        <h5 class="card-title">{{$train->data}}</h5>
        <h5 class="card-title">{{$train->codice_treno}}</h5>
    </div>

</div>
@endforeach