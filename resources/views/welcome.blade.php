<x-layout>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
    
    <div class="shadow container-fluids p-5 m-4 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                The Aulab Post
            </h1>
        </div>
    </div>


</x-layout>