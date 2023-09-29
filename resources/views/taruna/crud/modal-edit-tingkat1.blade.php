<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">  
                <form action="{{ route('update-tingkat1') }}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="form-group col-md12">
                <label>Tingkat</label>
                <select id="inputState" class="form-control" id="tingkat" name="tingkat"  required>
                    <option value="{{ $item->tingkat }}" selected>{{ $item->tingkat }}</option>
                    <option value="satu">Tingkat satu</option>
                    <option value="dua">Tingkat dua</option>
                    <option value="tiga">Tingkat tiga</option>
                   
                
                </select>
            </div></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>