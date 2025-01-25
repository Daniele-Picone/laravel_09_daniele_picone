<x-layout>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <h1 class="text-center" >Registrati</h1>
<div class="row justify-content-center align-items-center mt-5"> 
    <div class="col-8 col-md-4 ">
    <form class="p-4 shadow rounded-3" action="{{route('register')}}"  method="POST" >
        @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Il Tuo Nome</label>
      <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">La Tua email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">la tua Password</label>
    <input type="password" class="form-control" name="password"  id="password">
  </div>
  <div class="mb-3">
    <label for="confirm_password" class="form-label"> Conferma Password</label>
    <input type="password" class="form-control" id="confirm_password" name="password_confirmation">
  </div>
 
  <button type="submit" class="btn btn-primary mt-5">Registrati</button>

</form>
    </div>
</div>


 </x-layout>
