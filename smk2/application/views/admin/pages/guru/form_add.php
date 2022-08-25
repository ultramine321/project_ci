<div class="container-fluid px-4">
    <form action="<?= base_url('admin/Guru/add_new_data') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="InputNIP" class="form-label">NIP</label>
            <input type="number" name="nip" class="form-control" id="InputNIP">
        </div>
        <div class="mb-3">
            <label for="Inputnama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="Inputnama">
        </div>
        <div class="mb-3">
            <label for="Inputtempat" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" id="Inputtempat">
        </div>
        <div class="mb-3">
            <label for="Inputtanggal" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" id="Inputtanggal">
        </div>
        <div class="mb-3">
            <label for="inputmapel" class="form-label">Mapel</label> <br>
            <select name="mapel" class="form-control">
                <option value="mtk">Matematika</option>
                <option value="inggris">Bahasa inggris</option>
                <option value="bahasa">Bahasa Indonesia</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="inputAlamat" class="form-label">Alamat</label> <br>
            <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="Inputjk" class="form-label">Jenis Kelamin</label> <br>
            <input type="radio" name="jk" value="L">Laki Laki <br>
            <input type="radio" name="jk" value="P">Perempuan
        </div>
        <div class="mb-3">
            <label for="Inputstatus" class="form-label">Status Pegawaian</label>
            <input type="text" class="form-control" name="status_pegawaian" id="Inputstatus">
        </div>
        <div class="mb-3">
            <label for="Inputpassfoto" class="form-label">Pass Foto</label>
            <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>