<div class="container-fluid px-4">
    <form action="<?= base_url('admin/MasterSiswa/add_new_data') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="InputNIK" class="form-label">NIK</label>
            <input type="number" name="nik" class="form-control" id="InputNIK">
        </div>
        <div class="mb-3">
            <label for="Inputnama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" name="nama_siswa" id="Inputnama">
        </div>
        <div class="mb-3">
            <label for="InputNIK" class="form-label">Jenis Kelamin</label> <br>
            <input type="radio" name="jk" value="L">Laki Laki <br>
            <input type="radio" name="jk" value="P">Perempuan
        </div>
        <div class="mb-3">
            <label for="inputjurusan" class="form-label">jurusan</label> <br>
            <select name="jurusan" class="form-control">
                <option value="rpl">Rekayasa Perangkat Lunak</option>
                <option value="tkj">Tekhnik Komputer Jaringan</option>
                <option value="akutansi">Akutansi</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="inputAlamat" class="form-label">Alamat</label> <br>
            <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="Inputpassfoto" class="form-label">Pass Foto</label>
            <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>