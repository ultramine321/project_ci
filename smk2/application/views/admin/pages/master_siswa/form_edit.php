<div class="container px-4">
        <h1>Form Edit Siswa</h1>
        <form action="<?= base_url('admin/MasterSiswa/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="nik_lama" value="<?= $data_siswa->nik?>" hidden>
            <div class="mb-3">
                <input type="number" name="nik" value="<?= $data_siswa->nik?>" class="form-control" id="InputNIK">
            </div>
            <div class="mb-3">
                <label for="Inputnama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" name="nama_siswa" value="<?= $data_siswa->nama_siswa?>" id="Inputnama">
            </div>
            <div class="mb-3">
                <label for="inputJK" class="form-label">Jenis Kelamin</label> <br>
                <input type="radio" name="jk" value="L" <?=($data_siswa->jk =='L') ? 'checked' :'' ?>>Laki Laki <br>
                <input type="radio" name="jk" value="P" <?=($data_siswa->jk =='P') ? 'checked' :'' ?>>Perempuan 
            </div>
            <div class="mb-3">
                <label for="inputjurusan" class="form-label">jurusan</label> <br>
                <select name="jurusan" class="form-control">
                    <option value="rpl" <?=($data_siswa->jurusan =='rpl') ? 'selected' :'' ?>> Rekayasa Perangkat Lunak</option>
                    <option value="tkj"<?=($data_siswa->jurusan =='tkj') ? 'selected' :'' ?>>Tekhnik Komputer Jaringan</option>
                    <option value="akutansi"<?=($data_siswa->jurusan =='akutansi') ? 'selected' :'' ?>>Akutansi</option>
                </select>
            </div>
            <div class="mb-3">
                    <label for="inputAlamat" class="form-label">Alamat</label> <br>
                    <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control"><?= $data_siswa->alamat?></textarea>
            </div>
            <div class="mb-3">
                <label for="Inputpassfoto" class="form-label">Pass Foto</label>
                <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>