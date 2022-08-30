<div class="container px-4">
        <h1>Form Edit carousel</h1>
        <form action="<?= base_url('admin/carousel/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="judul_lama" value="<?= $data_carousel->judul?>" hidden>
            <div class="mb-3">
                <input type="text" name="judul" value="<?= $data_carousel->judul?>" class="form-control" id="Inputjudul">
            </div>
            <div class="mb-3">
                <label for="Inputdeskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" cols="30" rows="10" class="form-control"><?= $data_carousel->deskripsi?></textarea>
            </div>
            <div class="mb-3">
                <label for="Inputpassfoto" class="form-label">Pass Foto</label>
                <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>