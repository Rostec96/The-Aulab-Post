<table class="table table-success table-striped table-hover border">
    <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome Tag</th>
        <th scope="col">Q.ta articoli collegati</th>
        <th scope="col">Aggiorna</th>
        <th scope="col">Cancella</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>
            @if ($metaType == "tags")
            <td>
                <form action="{{route('admin.editTag', ['tag'=> $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                      <input name="name" type="text" class="form-control d-inline w-50" placeholder="Nuovo nome tag">
                      <button type="submit"><span>Aggiorna</span></button>
                </form>
            </td>        
            <td>
                <form action="{{route('admin.deleteTag', ['tag'=> $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                        <button type="submit"><span>Elimina</span></button>
                </form>
            </td>    
            @else 
            <td>
                <form action="{{route('admin.editCategory', ['category'=> $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                      <input name="name" type="text" class="form-control d-inline w-50" placeholder="Nuovo nome">
                      <button type="submit"><span>Aggiorna</span></button>
                </form>
            </td>        
            <td>
                <form action="{{route('admin.deleteCategory', ['category'=> $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                        <button type="submit"><span>Elimina</span></button>
                </form>
            </td>    
            @endif

        </tr>
        @endforeach

    </tbody>
  </table>