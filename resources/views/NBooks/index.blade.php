@extends('layouts.Store')
@section('content')
  @if (isset($NBooks))
    @if (count($NBooks) == 0)
      {{ "he" }}
    @endif
  @foreach ($NBooks as $NBook)
    {{-- <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">{{$NBook->Catagory}} {{$NBook->Sub_Catagory}} {{$NBook->Name}} </h4>
      <p class="list-group-item-text">{{$NBook->Discription}}</p>
      <p class="list-group-item-text">Size: {{$NBook->Size}}</p>
      <p class="list-group-item-text">Paper Weight: {{$NBook->PaperWeight}}</p>
      <p class="list-group-item-text">Cover Type: {{$NBook->CoverType}}</p>
    </a> --}}
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                {{-- Load the images here --}}
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/Academy/public/NBooks/show">{{$NBook->Sub_Catagory}}</a>
                  </h4>
                  <h5>
                    <a href="#">{{$NBook->Name}}</a>
                  </h5>
                  <p class="card-text">{{$NBook->Discription}}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
  @endforeach
  </div>
    @endif
@endsection
