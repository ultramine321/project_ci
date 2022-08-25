<div class="container-fluid px-4">
    <form action="<?= base_url('admin/Alumni/add_new_data') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Inputnama" class="form-label">nama</label>
            <input type="text" class="form-control" name="nama" id="Inputnama">
        </div>
        <div class="mb-3">
            <label for="Inputfoto" class="form-label">foto</label>
            <input type="file" name="foto" class="form-control" id="Inputfoto">
        </div>
        <div class="mb-3">
            <label for="Inputnama" class="form-label">Jenis Kelamin</label> <br>
            <input type="radio" name="jk" value="L">Laki Laki <br>
            <input type="radio" name="jk" value="P">Perempuan
        </div>
        <div class="mb-3">
            <label for="Inputangkatan" class="form-label">Angkatan</label>
            <input type="text" class="form-control" name="angkatan" id="Inputangkatan">
        </div>
        <div class="mb-3">
            <label for="Inputtahun" class="form-label">Tahun Lulus</label>
            <input type="text" class="form-control" name="tahun_lulus" id="Inputtahun">
        </div>
        <div class="mb-3">
            <label for="inputpekerjaan" class="form-label">Pekerjaan</label> <br>
            <select name="pekerjaan" class="form-control">
                <option value="karyawan">Karyawan</option>
                <option value="guru">guru</option>
                <option value="pekerjaan">pengusaha</option>
                <option value="pengangguran">pengangguran</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>