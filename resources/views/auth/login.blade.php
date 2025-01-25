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
   
<div class="row justify-content-center align-items-center mt-5"> 
    <div class="col-8 col-md-4 ">
    <form class="p-4 shadow rounded-3" action="{{route('login')}}"  method="POST" >
        @csrf
        <h1 class="text-center" >Accedi</h1>
  <div class="mb-3">
    <label for="email" class="form-label">La Tua email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">la tua Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary mt-5">Accedi</button>

</form>
    </div>
</div>


 </x-layout>