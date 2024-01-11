<x-layout>

    <div class="dv-head container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Tutti gli articoli per: {{$query}}
            </h1>
        </div>
    </div>

    <div class="container my-5 bg-transparent">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 my-5">
                <div class="row my-5">
                    <div class="col-4 col-md-4">
                        <img src="{{Storage::url($article->image)}}" class="img-fluid" alt="post">
                    </div>
                    <div class="col-6 col-md-5 card-work">
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
                            <span class="mx-4 small text-muted fst-italic text-capitalize">- tempo di lettura {{$article->readDuration()}} min</span>
                            <p class="mx-4 small fst-italic text-capitalize">
                            @foreach ($article->tags as $tag)
                                #{{$tag->name}}
                            @endforeach
                            </p>
                        </div>  
                        <div class="card-footer text-muted d-flex justify-content-around align-items-center">
                            Redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('article.byUser', ['user'=> $article->user->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->user->name}}</a>                            
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-success fw-bold mx-2">Leggi</a>
                        </div>
                    </div>    
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>