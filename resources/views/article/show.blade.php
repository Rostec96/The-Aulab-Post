<x-layout>

    <div class="dv-head container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                {{$article->title}}
            </h1>
        </div>
    </div>

            <div class="container my-5 bg-transparent">
                <div class="row justify-content-center">
                    <div class="col-12 my-5 d-flex justify-content-center">
                        <img src="{{Storage::url($article->image)}}" class="img-fluid my-3" alt="post">
                    </div>
                    <div class="col-12 card-work">

                        <div class="card-body">
                            <h2 class="card-text">{{$article->subtitle}}</h2>
                            <p class="small fst-italic text-capitalize">
                            @foreach ($article->tags as $tag)
                                #{{$tag->name}}
                            @endforeach
                            </p>
                            <div class="my-3 text-muted fst-italic">
                                <p>Redatto da {{Auth::user()->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                            </div>                    
                        </div>

                        <hr>

                        <p>{{$article->body}}</p>
                        <div class="text-center">
                            <a href="{{route('article.index')}}" class="btn btn-success my-5">Torna indietro</a>
                                @if (Auth::user() && Auth::user()->is_revisor)
                                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-warning">Accetta l'articolo</a>
                                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger">Rifiuta l'articolo</a>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>