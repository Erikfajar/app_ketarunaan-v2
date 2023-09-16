<table class="table table-responsive-sm">
    <thead>
        <tr>
            <th class="col-1" style="color:black; text-align:center">No</th>
            <th style="color:black; text-align:center">Pasal</th>
            
         
            {{-- <th class="col-3" style="color:black; text-align:center;">Aksi</th> --}}
        </tr>
    </thead>
    @foreach ($data as $item)
    <tbody>
       <tr>
        <td style="color:black; text-align:center">{{$loop->iteration}}</td>
        <td style="color:black; text-align:center">{{$item->pasal}}</td>
        {{-- <td style="text-align: center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal{{ $item->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
            <form method="POST" action="{{ route('pasal.destroy', $item->id) }}" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger delete-btn" type="button">
                    <i class="fa-solid fa-trash"></i> Delete
                </button>
            </form>
        </td> --}}
       </tr>
    </tbody>
    {{-- @include('pasal.modal-edit') --}}
    @endforeach
</table>