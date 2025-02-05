<div>
<h2>Contatore liviwere</h2>

<div class="display-3" >
    {{$count}}
</div>
<button wire:click="increment" class="btn btn-info mb-5 " > incrementa</button>
<button wire:click="decrement" class="btn btn-warning mb-5"  > decrementa</button>
<button wire:click="incrementBynum(5)" class="btn btn-info "  >incrementa di 5</button>
<button wire:click="decrementBynum(5)"  class="btn btn-warning" >decrementa di 5</button>

</div>
