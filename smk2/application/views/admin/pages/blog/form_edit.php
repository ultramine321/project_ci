<div class="container px-4">
        <h1>Form Edit Blog</h1>
        <form action="<?= base_url('admin/Blog/edit_data')?>" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="judul_lama" value="<?= $data_blog->judul?>" hidden>
            <div class="mb-3">
                <input type="text" name="judul" value="<?= $data_blog->judul?>" class="form-control" id="Inputjudul">
            </div>
            <div class="mb-3">
                <label for="Inputjudul" class="form-label">judul</label>
                <input type="text" class="form-control" name="judul" value="<?= $data_blog->judul?>" id="Inputjudul">
            </div>
            <div class="mb-3">
                <label for="Inputfoto" class="form-label">foto</label>
                <input type="file" name="foto" class="form-control" id="Inputfoto">
            </div>
            <div class="mb-3">
                <label for="Inputtanggal" class="form-label">tanggal</label>
                <input type="text" class="form-control" name="tanggal" value="<?= $data_blog->tanggal?>" id="Inputtanggal">
            </div>
            <div class="mb-3">
                <label for="Inputisi" class="form-label">Isi</label>
                 <textarea name="isi" cols="30" rows="10" class="form-control"><?= $data_blog->isi?></textarea>
            </div>
 

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>