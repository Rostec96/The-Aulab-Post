<x-layout>

    <div class="shadow container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1 text-capitalize">
                Categoria {{$category->name}}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)

                <div class="col-12 col-md-3 my-2">
                    <div class="card">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="post">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <p class="small fst-italic text-capitalize">
                                @foreach ($article->tags as $tag)
                                #{{$tag->name}}
                                @endforeach
                            </p>    
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-success fw-bold">Leggi</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>


</x-layout>