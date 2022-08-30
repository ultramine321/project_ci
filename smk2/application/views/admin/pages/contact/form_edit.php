<div class="container px-4">
        <h1>Form Edit Contact</h1>
        <form action="<?= base_url('admin/Contact/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="nohp_lama" value="<?= $data_contact->no_hp?>" hidden>
            <div class="mb-3">
                <label for="Inputno_hp" class="form-label">no_hp</label>
                <input type="number" class="form-control" name="no_hp" value="<?= $data_contact->no_hp?>" id="Inputno_hp">
            </div>
            <div class="mb-3">
                <label for="Inputemail" class="form-label">email</label>
                <input type="email" class="form-control" name="email" value="<?= $data_contact->email?>" id="Inputemail">
            </div>
            <div class="mb-3">
                <label for="Inputalamat" class="form-label">alamat</label>
                 <textarea name="alamat" cols="30" rows="10" class="form-control"><?= $data_contact->alamat?></textarea>
            </div>
 

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>