<div class="container-fluid px-4">
    <form action="<?= base_url('admin/Blog/add_new_data') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Inputjudul" class="form-label">judul</label>
            <input type="text" class="form-control" name="judul" id="Inputjudul">
        </div>
        <div class="mb-3">
            <label for="Inputfoto" class="form-label">foto</label>
            <input type="file" name="foto" class="form-control" id="Inputfoto">
        </div>
        <div class="mb-3">
            <label for="Inputangkatan" class="form-label">tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="Inputtanggal">
        </div>
        <div class="mb-3">
            <label for="Inputtahun" class="form-label">Isi</label>
            <input type="text" class="form-control" name="isi" id="Inputisi">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>