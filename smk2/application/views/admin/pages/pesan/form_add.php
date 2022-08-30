<div class="container-fluid px-4">
    <form action="<?= base_url('admin/Pesan/add_new_data') ?>" method="POST">
        <div class="mb-3">
            <label for="Inputnama" class="form-label">nama</label>
            <input type="text" class="form-control" name="nama" id="Inputnama">
        </div>
        <div class="mb-3">
            <label for="Inputemail" class="form-label">email</label>
            <input type="email" class="form-control" name="email" id="Inputemail">
        </div>
        <div class="mb-3">
            <label for="Inputpesan" class="form-label">pesan</label>
            <input type="text" class="form-control" name="pesan" id="Inputpesan">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>