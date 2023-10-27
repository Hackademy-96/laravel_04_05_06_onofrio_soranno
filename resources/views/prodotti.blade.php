<x-layout>
  
  
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-6  ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        <form method="POST" action="{{route('article')}}" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
              <label  class="form-label">Nome Prodotto</label>
              <input name="name" type="text" class="form-control" >
            </div>
            <div class="mb-3">
              <label  class="form-label">Azienda</label>
              <input name="seller" type="text" class="form-control" >
            </div>
            <div class="mb-3">
              <label  class="form-label">Prezzo</label>
              <input name="price" type="text" class="form-control" >
            </div>
            <div class="mb-3">
              <label  class="form-label">Immagine</label>
              <input name="img" type="file" class="form-control" >
            </div>

          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

      </div>
    </div>
  </div>

  
</x-layout>



