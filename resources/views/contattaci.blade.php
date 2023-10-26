<x-layout>
    {{-- FORM  --}}
    
    <div class="container">
        <div class="row d-flex justify-content-center p-5">
            <div class="col-12 p-5 ">
                <h1 class=" fs-3 text-center">COMPILA IL NOSTRO FORM PER RICEVERE INFORMAZIONI</h1>
            </div>
            <div class="col-8">
                <form method="POST" action="{{route('contattaci_submit')}}" class="shadow rounded">
                    @csrf

                   <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Indirizzo e-mail</label>
                     <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     <div id="emailHelp" class="form-text"></div>
                   </div>
                   <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Nome e Cognome</label>
                     <input type="text"  name="name" class="form-control" id="exampleInputPassword1">
                   </div>
                   <div class="mb-3 form-floating">
                    <textarea  class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                    <label class="form-check-label" for="message">Lascia il tuo messaggio:</label>
                  </div>
                   <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
                
            </div>
        </div>
    </div>
    {{-- FINE FORM --}}
    
    
    </x-layout>