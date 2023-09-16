{{-- Modal create --}}
<div class="modal fade" id="basicModal{{ $item->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Isi Form dibawah!</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pasal.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="form-group col-md12">
                    <label>Pasal</label>
                    <textarea class="form-control" name="pasal" rows="4" id="comment">{{ $item->pasal }}</textarea>
                </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        </div>
    </div>
</div>