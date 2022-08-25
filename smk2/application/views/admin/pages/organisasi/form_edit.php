<div class="container px-4">
        <h1>Form Edit Organisasi</h1>
        <form action="<?= base_url('admin/Organisasi/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="id_lama" value="<?= $data_organisasi->id?>" hidden>
            <div class="mb-3">
                <input type="number" name="id" value="<?= $data_organisasi->id?>" class="form-control" id="InputID">
            </div>
            <div class="mb-3">
                <label for="inputorganisasi" class="form-label">Organisasi</label> <br>
                <select name="organisasi" class="form-control">
                    <option value="pmr" <?=($data_organisasi->organisasi =='pmr') ? 'selected' :'' ?>> pmr</option>
                    <option value="osis"<?=($data_organisasi->organisasi =='osis') ? 'selected' :'' ?>>osis</option>
                    <option value="polsis"<?=($data_organisasi->organisasi =='polsis') ? 'selected' :'' ?>>polsis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Inputpassfoto" class="form-label">Pass Foto</label>
                <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>