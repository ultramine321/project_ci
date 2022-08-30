<div class="container px-4">
        <h1>Form Edit About</h1>
        <form action="<?= base_url('admin/About/edit_data')?>" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" name="judul_lama" value="<?= $data_about->judul?>" hidden>

            <div class="mb-3">
                <label for="Inputjudul" class="form-label">judul</label>
                <input type="text" class="form-control" name="judul" value="<?= $data_about->judul?>" id="Inputjudul">
            </div>

            <div class="mb-3">
                <label for="Inputvisi" class="form-label">visi</label>
                <textarea name="visi" cols="30" rows="10" class="form-control"><?= $data_about->visi?></textarea>
            </div>

            <div class="mb-3">
                <label for="Inputmisi" class="form-label">misi</label>
                 <textarea name="misi" cols="30" rows="10" class="form-control"><?= $data_about->misi?></textarea>
            </div>
 

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>