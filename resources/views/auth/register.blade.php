<x-layout>

    <div class="shadow container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Registrati
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

                <form class="card bg-warning p-5 shadow" action="{{route('register')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                      <label for="username" class="fw-bold form-label">Username: </label>
                      <input name="name" type="text" class="form-control" id="username" value="{{old('name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="fw-bold form-label">Email: </label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                      </div>
  
                      <div class="mb-3">
                        <label for="password" class="fw-bold form-label">Password: </label>
                        <input name="password" type="password" class="form-control" id="password">
                      </div>

                    <div class="mb-3">
                      <label for="password_confirmation" class="fw-bold form-label">Conferma password: </label>
                      <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>

                    <div class="mt-2">
                       <button class="fw-bold" type="submit">Registrati</button>
                        <p class="fw-bold small mt-2">Sei già registrato?<a class="fw-bold text-dark" href="{{route('login')}}">Clicca qui</a></p>
                    </div>
                  </form>

            </div>
        </div>
    </div>

</x-layout>