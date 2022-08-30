<div class="container-fluid px-4">
    <form action="<?= base_url('admin/Contact/add_new_data') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Inputno_hp" class="form-label">no hp</label>
            <input type="number" class="form-control" name="no_hp" id="Inputno_hp">
        </div>
        <div class="mb-3">
            <label for="Inputemail" class="form-label">email</label>
            <input type="email" class="form-control" name="email" id="Inputemail">
        </div>
        <div class="mb-3">
            <label for="Inputalamat" class="form-label">alamat</label>
            <input type="text" class="form-control" name="alamat" id="Inputalamat">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>