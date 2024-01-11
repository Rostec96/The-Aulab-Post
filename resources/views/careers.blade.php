<x-layout>

    <div class="dv-head container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Lavora con noi
            </h1>
        </div>
    </div>

    <div class="card-work container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2">

            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Cosa farai: dirigere e organizzarzione</p>
                <h2>Lavora come revisore</h2>
                <p>Cosa farai: revisiona articoli</p>
                <h2>Lavora come redattore</h2>
                <p>Cosa farai: crea articoli</p>
            </div>

            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <form class="p-5" action="{{route('careers.submit')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="role" class="form-control">Per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">Scegli qui...</option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Redattore</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="fw-bold form-label">Email: </label>
                    <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                </div>
                <div class="mb-3">
                    <label for="message" class="fw-bold form-label">Parlaci di te: </label>
                    <textarea name="message" type="message" class="form-control" id="message" rows="7" cols="30" value="{{old('message')}}"></textarea>
                </div>
                <div class="mt-2">
                    <button class="fw-bold">Invia la candidatura</button>
                </div>

            </form>
        </div>
    </div>

</x-layout>