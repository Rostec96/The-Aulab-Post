<x-layout>
    <div class="dv-head container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bentornato Revisore
            </h1>
        </div>
    </div>

    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
@endif

@if (session('delete'))
<div class="alert alert-danger text-center">
    {{session('delete')}}
</div>
@endif

@if (session('revision'))
<div class="alert alert-warning text-center">
    {{session('revision')}}
</div>
@endif

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Articoli da revisionare</h2>
        </div>
        <div class="col-12">
            <x-articles-table :articles="$unrevisionedArticles"/>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Articoli pubblicati</h2>
        </div>
        <div class="col-12">
            <x-articles-table :articles="$acceptedArticles" />
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Articoli respinti</h2>
        </div>
        <div class="col-12">
            <x-articles-table :articles="$rejectedArticles"/>
        </div>
    </div>
</div>

</x-layout>