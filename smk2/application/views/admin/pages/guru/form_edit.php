<div class="container px-4">
        <h1>Form Edit Guru</h1>
        <form action="<?= base_url('admin/Guru/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="nip_lama" value="<?= $data_guru->nip?>" hidden>
            <div class="mb-3">
                <input type="number" name="nip" value="<?= $data_guru->nip?>" class="form-control" id="InputNIP">
            </div>
            <div class="mb-3">
                <label for="Inputnama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $data_guru->nama?>" id="Inputnama">
            </div>
            <div class="mb-3">
                <label for="Inputtempat" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?= $data_guru->tempat_lahir?>" id="Inputtempat">
            </div>
            <div class="mb-3">
                <label for="Inputtanggal" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?= date_format(date_create($data_guru->tanggal_lahir), "Y-m-d")?>" id="Inputtanggal">
            </div>
            <div class="mb-3">
                <label for="inputmapel" class="form-label">mapel</label> <br>
                <select name="mapel" class="form-control">
                    <option value="mtk" <?=($data_guru->mapel =='mtk') ? 'selected' :'' ?>> Matematika</option>
                    <option value="inggris"<?=($data_guru->mapel =='inggris') ? 'selected' :'' ?>>Bahasa Inggris</option>
                    <option value="bahasa"<?=($data_guru->mapel =='bahasa') ? 'selected' :'' ?>>Bahasa Indonesia</option>
                </select>
            </div>
            <div class="mb-3">
                    <label for="inputAlamat" class="form-label">Alamat</label> <br>
                    <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control"><?= $data_guru->alamat?></textarea>
            </div>
            <div class="mb-3">
                <label for="inputJK" class="form-label">Jenis Kelamin</label> <br>
                <input type="radio" name="jk" value="L" <?=($data_guru->jk =='L') ? 'checked' :'' ?>>Laki Laki <br>
                <input type="radio" name="jk" value="P" <?=($data_guru->jk =='P') ? 'checked' :'' ?>>Perempuan 
            </div>
            <div class="mb-3">
                <label for="Inputstatus" class="form-label">Status Pegawaian</label>
                <input type="text" class="form-control" name="status_pegawaian" value="<?= $data_guru->status_pegawaian?>" id="Inputstatus">
            </div>
            <div class="mb-3">
                <label for="Inputpassfoto" class="form-label">Pass Foto</label>
                <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>