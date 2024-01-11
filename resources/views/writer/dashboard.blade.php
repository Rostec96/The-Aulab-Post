<x-layout>
    <div class="dv-head container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bentornato Redattore
            </h1>
        </div>
    </div>

    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli in fase di revisione</h2>
            </div>    
            <div class="col-12">
                <x-writer-articles-table :articles="$unrevisionedArticles" />
            </div>        
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
            </div>
            <div class="col-12">
                <x-writer-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
            </div>
            <div class="col-12">
                <x-writer-articles-table :articles="$rejectedArticles" />
            </div>            
        </div>
    </div>

</x-layout>