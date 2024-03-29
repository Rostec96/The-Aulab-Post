<x-layout>
    <div class="dv-head container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bentornato Amministratore
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
            <div class="row justify-content-around">
                <div class="col-12">
                    <h2>Richiesta per ruolo di revisore</h2>
                </div>
                <div class="col-12">
                    <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
                </div>
            </div>


  
                <div class="row justify-content-around">
                    <div class="col-12">
                        <h2>Richiesta per ruolo di redattore</h2>
                    </div>
                    <div class="col-12">
                        <x-requests-table :roleRequests="$writerRequests" role="redattore" />
                    </div>
                </div> 
        </div>   

<hr>

<div class="container my-5">
    <div class="row justify-content-between">
        <div class="col-12">
            <h2>I tags della piattafroma</h2>
        </div>
        <div class="col-12">
            <x-metainfo-table :metaInfos="$tags" metaType="tags" />
        </div>

        <div class="col-12">
            <h2>Le categorie della piattafroma</h2>
        </div>
        <div class="col-12">
            <x-metainfo-table :metaInfos="$categories" metaType="categorie" />
        </div>
        <div class="col-12">
            <form class="d-flex" action="{{route('admin.storeCategory')}}" method="POST">
                @csrf
                  <input name="name" type="text" class="form-control me-2" placeholder="Inserisci una nuova categorie" >
                  <button type="submit" class="fw-bold"><span>Aggiungi</span></button>
            </form>
        </div>
    </div>
</div>

</x-layout>