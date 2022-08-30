<div class="container px-4">
        <h1>Form Edit Alumni</h1>
        <form action="<?= base_url('admin/Alumni/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="nama_lama" value="<?= $data_alumni->nama?>" hidden>
            <div class="mb-3">
                <label for="Inputnama" class="form-label">nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $data_alumni->nama?>" id="Inputnama">
            </div>
            <div class="mb-3">
                <label for="Inputfoto" class="form-label">foto</label>
                <input type="file" name="foto" class="form-control" id="Inputfoto">
            </div>
            <div class="mb-3">
                <label for="inputJK" class="form-label">Jenis Kelamin</label> <br>
                <input type="radio" name="jk" value="L" <?=($data_alumni->jk =='L') ? 'checked' :'' ?>>Laki Laki <br>
                <input type="radio" name="jk" value="P" <?=($data_alumni->jk =='P') ? 'checked' :'' ?>>Perempuan 
            </div>
            <div class="mb-3">
                <label for="Inputangkatan" class="form-label">Angkatan</label>
                <input type="text" class="form-control" name="angkatan" value="<?= $data_alumni->angkatan?>" id="Inputangkatan">
            </div>
            <div class="mb-3">
                <label for="Inputtahun" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" name="tahun_lulus" value="<?= $data_alumni->tahun_lulus?>" id="Inputtahun">
            </div>
            <div class="mb-3">
                <label for="inputpekerjaan" class="form-label">Pekerjaan</label> <br>
                <select name="pekerjaan" class="form-control">
                    <option value="rpl" <?=($data_alumni->pekerjaan =='karyawan') ? 'selected' :'' ?>> Karyawan</option>
                    <option value="guru"<?=($data_alumni->pekerjaan =='guru') ? 'selected' :'' ?>>Guru</option>
                    <option value="pengusaha"<?=($data_alumni->pekerjaan =='pengusaha') ? 'selected' :'' ?>>Pengusaha</option>
                    <option value="pengangguran"<?=($data_alumni->pekerjaan =='pengangguran') ? 'selected' :'' ?>>Pengangguran</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>