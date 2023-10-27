<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
  @endif
    
    <div class="container">
        <div class="row d-flex ">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 justify-content-center align-items-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->name}}</h5>
                      <p class="card-text">{{$article->seller}}</p>
                      <p class="card-text">${{$article->price}}</p>
                      <a href="" class="btn btn-primary">Vedi di più</a>
                    </div>
                  </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>