<x-layout>

    <div class="shadow container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Accedi
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

                <form class="card bg-danger p-5 shadow" action="{{route('login')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                      <label for="email" class="fw-bold form-label">Email: </label>
                      <input name="email" type="email" class="form-control" id="email" placeholder="mario@emial.com" value="{{old('email')}}">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="fw-bold form-label">Password: </label>
                      <input name="password" type="password" class="form-control" placeholder="..." id="password">
                    </div>
                    <div class="mt-2">
                       <button class="fw-bold" type="submit">Accedi</button>
                        <p class="fw-bold small mt-2">Non sei registrato? <a href="{{route('register')}}" class="fw-bold text-dark">Clicca qui</a></p>
                    </div>
                  </form>

            </div>
        </div>
    </div>

</x-layout>