<x-layout>

    <div class="shadow container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Tutti gli articoli per: {{$query}}
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
                           @if ($article->category)
                           <a href="{{route('article.byCategory', ['category'=> $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                           @else
                               <p class="small text-muted fst-italic text-capitalize">
                                Non categorizzata
                               </p>
                           @endif
                        </div>
                        <span class="small text-muted fst-italic text-capitalize">- tempo di lettura {{$article->readDuration()}} min</span>
                        <hr>
                        <p class="small fst-italic text-capitalize">
                            @foreach ($article->tags as $tag)
                            #{{$tag->name}}
                            @endforeach
                        </p>
                        
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            Redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('article.byUser', ['user'=> $article->user->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->user->name}}</a>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-success fw-bold">Leggi</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>


</x-layout>