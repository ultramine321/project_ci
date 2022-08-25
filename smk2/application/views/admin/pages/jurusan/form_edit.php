<div class="container px-4">
        <h1>Form Edit Jurusan</h1>
        <form action="<?= base_url('admin/Jurusan/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="id_lama" value="<?= $data_jurusan->id?>" hidden>
            <div class="mb-3">
                <input type="number" name="id" value="<?= $data_jurusan->id?>" class="form-control" id="InputID">
            </div>
            <div class="mb-3">
                <label for="inputjurusan" class="form-label">jurusan</label> <br>
                <select name="jurusan" class="form-control">
                    <option value="rpl" <?=($data_jurusan->jurusan =='rpl') ? 'selected' :'' ?>> Rekayasa Perangkat Lunak</option>
                    <option value="tkj"<?=($data_jurusan->jurusan =='tkj') ? 'selected' :'' ?>>Tekhnik Komputer Jaringan</option>
                    <option value="akutansi"<?=($data_jurusan->jurusan =='akutansi') ? 'selected' :'' ?>>Akutansi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Inputpassfoto" class="form-label">Pass Foto</label>
                <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>