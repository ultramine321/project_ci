<div class="container-fluid px-4">
    <form action="<?= base_url('admin/About/add_new_data') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Inputjudul" class="form-label">judul</label>
            <input type="text" class="form-control" name="judul" id="Inputjudul">
        </div>
        <div class="mb-3">
            <label for="Inputvisi" class="form-label">Visi</label>
            <input type="text" class="form-control" name="visi" id="Inputvisi">
        </div>
        <div class="mb-3">
            <label for="Inputmisi" class="form-label">Misi</label>
            <input type="text" class="form-control" name="misi" id="Inputmisi">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>