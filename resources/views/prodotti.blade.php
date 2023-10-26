<x-layout>

    <form method="POST" action="{{route('article')}}" >
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
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


</x-layout>