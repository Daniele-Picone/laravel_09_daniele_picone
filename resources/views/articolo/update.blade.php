<x-layout>
<h1 class="text-center" >Modifica articolo</h1>

@if ($errors->any())
    <div class="alert alert-danger alert-custom">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container mt-5 ">
    <div class="row justify-content-center align-items-center mt-5">

    <div class="col-12 col-md-6">

 <livewire:edit-article :article=$article >

 </livewire:edit-article>

    </div>
    </div>
</div>

</x-layout>