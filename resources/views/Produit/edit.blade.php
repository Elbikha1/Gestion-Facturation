<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('edit/Produit') }}

        </h2>
    </x-slot>
    
        <div class="w3-container w3-blue">
            <h4>Edit Product</h4>
        </div><br>
        <div class="w3-container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        @endforeach
                    </ul>
                </div><br>
            @endif
            <form method="post" action="{{ route('Produit.update', $produit->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="prod_name">Nom</label>
                    <input class="w3-input" type="text" class="form-control" name="nom"
                           value={{ $produit->nom }} >
                </div><br>
                <div class="form-group">
                    <label for="prod_desc">Reference</label>
                    <input class="w3-input"  type="text" class="form-control" name="reference"
                           value={{ $produit->reference }} >
                </div><br>
                <div class="form-group">
                    <label  for="prod_price">Total</label>
                    <input class="w3-input"  type="text" class="total" name="total"
                           value={{ $produit->total }} >
                </div><br>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
</x-app-layout>
