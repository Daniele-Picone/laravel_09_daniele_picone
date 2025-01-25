<x-layout>
   <header class="lounge_header">
    <div class="row lounge_header_row">
        <div class="col-12 col-md-6 loung_register">
            <h1>Per registrarti clicca qui</h1>
            <i class="fa-solid fa-down-long "></i>
          
               <a href=" {{route('register')}}"> <button> Registrarti</button></a>
            
        </div>
        <div class="col-12 col-md-6 lounge_login">
            <h1>Sei già registrato?</h1>
            <i class="fa-solid fa-down-long "></i>
           <a href="{{route('login')}}"> <button> Accedi</button></a>
           </div>
    </div>

   </div>
</x-layout>

