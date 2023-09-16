{{-- Modal create --}}
<div class="modal fade" id="basicModal{{$item->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Isi Form dibawah!</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Tingkat2-pelanggaran.update',$item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="form-group col-md12">
                    <label>Nit Taruna/i</label>
                    <input type="text" value="{{ $item->nit }}" class="form-control" name="nit" placeholder="Nit">
                </div>
                <div class="form-group col-md12">
                    <label>Nama Taruna/i</label>
                    <input type="text" value="{{ $item->nama }}" class="form-control" name="nama" placeholder="Nama">
                </div>
                <div class="form-group col-md12">
                    <label>Jurusan</label>
                    <select id="inputState" class="form-control" name="jurusan">
                        <option selected>{{ $item->jurusan }}</option>
                        <option value="ATPH">ATPH</option>
                        <option value="APHP">APHP</option>
                        <option value="APAT">APAT</option>
                        <option value="ATU">ATU</option>
                        <option value="NKPI">NKPI</option>
                        <option value="NKN">NKN</option>
                        <option value="TKN">TKN</option>
                        <option value="ULW">ULW</option>
                        <option value="KULINER">KULINER</option>
                        <option value="DPB">DPB</option>
                        <option value="TSM">TSM</option>
                        <option value="TPM">TPM</option>
                        <option value="TLOG">TLOG</option>
                        <option value="TAB">TAB</option>
                        <option value="TITL">TITL</option>
                        <option value="RPL">RPL</option>
                    </select>
                </div>
                
                <div class="form-group col-md12">
                    <label>Tanggal kejadian</label>
                    <input type="date" name="tgl" value="{{ $item->tgl }}" class="form-control" placeholder="Tanggal">
                </div>
                {{-- <div class="form-group col-md12">
                    <label>Poto bukti taruna/i</label>
                    <input type="file" name="poto" class="form-control" placeholder="Poto">
                </div> --}}
                <div class="form-group col-md12">
                    <label>Pasal yang dilanggar Taruna/i</label>
                    <select id="inputState" class="form-control" name="pasal_id">
                        <option disabled value>Pasal</option>
                        <option value="{{ $item->id }}">{{ $item->pasal->pasal }}</option>
                        @foreach ($pasal as $item)
                            
                        <option value="{{ $item->id }}">{{ $item->pasal }}</option>
                        @endforeach
                       
                    </select>
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