<x-layout>
    <div class="shadow container-fluid p-5 m-4 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bentornato, Amministratore
            </h1>
        </div>
    </div>

    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
@endif

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richiesta per ruolo di revisore</h2>
            <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richiesta per ruolo di redattore</h2>
            <x-requests-table :roleRequests="$writerRequests" role="redattore" />
        </div>
    </div>
</div>
</x-layout>