<div class="container px-4">
        <h1>Form Edit Ekstrakulikuler</h1>
        <form action="<?= base_url('admin/Eskul/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="id_lama" value="<?= $data_eskul->id?>" hidden>
            <div class="mb-3">
                <input type="number" name="id" value="<?= $data_eskul->id?>" class="form-control" id="InputID">
            </div>
            <div class="mb-3">
                <label for="inputeskul" class="form-label">Ekstrakulikuler</label> <br>
                <select name="eskul" class="form-control">
                    <option value="futsal" <?=($data_eskul->eskul =='futsal') ? 'selected' :'' ?>> Futsal</option>
                    <option value="basket"<?=($data_eskul->eskul =='futsal') ? 'selected' :'' ?>>Basket</option>
                    <option value="volly"<?=($data_eskul->eskul =='volly') ? 'selected' :'' ?>>Volly</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Inputpassfoto" class="form-label">Pass Foto</label>
                <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
            </div>
            <div class="mb-3">
                <label for="Inputdeskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" cols="30" rows="10" class="form-control"><?= $data_eskul->deskripsi?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>