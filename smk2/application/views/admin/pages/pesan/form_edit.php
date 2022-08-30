<div class="container px-4">
        <h1>Form Edit pesan</h1>
        <form action="<?= base_url('admin/Pesan/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="pesan_lama" value="<?= $data_pesan->nama?>" hidden>
            <div class="mb-3">
                <label for="Inputnama" class="form-label">nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $data_pesan->nama?>" id="Inputnama">
            </div>
            <div class="mb-3">
                <label for="Inputemail" class="form-label">email</label>
                <input type="email" class="form-control" name="email" value="<?= $data_pesan->email?>" id="Inputemail">
            </div>
            <div class="mb-3">
                <label for="Inputpesan" class="form-label">pesan</label>
                 <textarea name="pesan" cols="30" rows="10" class="form-control"><?= $data_pesan->pesan?></textarea>
            </div>
 

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>