@extends ('layout')

@section('content')
@include('layouts.carousel')  

<div class="row no-gutters">
@foreach ($people as $person) 

  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 d-sm-flex d-md-flex d-lg-flex p-3">
<div class="card small">
  <div class="card-body">
   
   <h5 ><img src="{{$person->imgpath}}" class="rounded-circle" align="left">{{ $person->fullname }}</h5>

  <p><a class="btn btn-outline-primary" href="{{ route('showPerson', ['id'=>$person->id]) }}">Подробнее</a></p>
  </div>
</div>
</div>

@endforeach
</div>

@endsection