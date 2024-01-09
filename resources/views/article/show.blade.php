<x-layout>

    <div class="shadow container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                {{$article->title}}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <img src="{{Storage::url($article->image)}}" class="img-fluid my-3" alt="post">
                <div class="text-center">
                    <h2 class="card-text">{{$article->subtitle}}</h2>
                    <p class="small fst-italic text-capitalize">
                        @foreach ($article->tags as $tag)
                            #{{$tag->name}}
                        @endforeach
                    </p>
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                    </div>                    
                </div>
                <hr>
                <p>{{$article->body}}</p>
                <div class="text-center">
                    <a href="{{route('article.index')}}" class="btn btn-info my-5">Torna indietro</a>

                    @if (Auth::user() && Auth::user()->is_revisor)
                        <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-warning btn-outline-danger">Accetta l'articolo</a>
                        <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-warning btn-outline-danger">Rifiuta l'articolo</a>
                    @endif
                </div>
            </div>
        </div>
    </div>



</x-layout>