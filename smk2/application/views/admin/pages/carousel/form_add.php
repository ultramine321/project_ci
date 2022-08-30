<div class="container-flujudul px-4">
    <form action="<?= base_url('admin/Carousel/add_new_data') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Inputjudul" class="form-label">judul</label>
            <input type="text" name="judul" class="form-control" id="Inputjudul">
        </div>
        <div class="mb-3">
            <label for="Inputdeskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" id="Inputdeskripsi">
        </div>
        <div class="mb-3">
            <label for="Inputpassfoto" class="form-label">Pass Foto</label>
            <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>