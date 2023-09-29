{{-- Modal create --}}
<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Isi Form dibawah!</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Taruna.store') }}" method="POST">
                    @csrf
                    <div class="form-group col-md12">
                        <label>Nit Taruna/i</label>
                        <input type="text" class="form-control" name="nit" placeholder="Nit" required>
                    </div>
                    <div class="form-group col-md12">
                        <label>Nama Taruna/i</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group col-md12">
                        <label>Jurusan</label>
                        <select id="inputState" class="form-control" name="jurusan" required>
                            <option value="" disabled selected>Pilih Jurusan</option>
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
                        <label>Tingkat</label>
                        <select id="inputState" class="form-control" name="tingkat" required>
                            <option value="" disabled selected>Pilih Tingkat</option>
                            <option value="satu">Tingkat satu</option>
                            <option value="dua">Tingkat dua</option>
                            <option value="tiga">Tingkat tiga</option>
                           
                        
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