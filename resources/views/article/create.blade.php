<x-layout>

    <div class="shadow container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Inserisci il tuo articolo
            </h1>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="card p-5 shadow" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                      <label for="title" class="fw-bold form-label">Titolo: </label>
                      <input name="title" type="text" class="form-control" id="title" value="{{old('title')}}">
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="fw-bold form-label">Sottotitolo: </label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{old('subtitle')}}">
                    </div>
  
                    <div class="mb-3">
                      <label for="image" class="fw-bold form-label">Immagine: </label>
                      <input name="image" type="file" class="form-control" id="image">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="fw-bold form-label">Categoria: </label>
                        <select name="category" type="password" class="form-control text-capitalize" id="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="fw-bold form-label">Corpo dell'articolo: </label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="7">{{old('body')}}</textarea>
                    </div>

                    <div class="mt-2">
                       <button class="fw-bold text-white" type="submit">Inserisci</button>
                       <a class="btn bg-warning btn-outline-danger" href="{{route('homepage')}}">Torna alla Home</a></p>
                    </div>
                  </form>

            </div>
        </div>
    </div>

</x-layout>