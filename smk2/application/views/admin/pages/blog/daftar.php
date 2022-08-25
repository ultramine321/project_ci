<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Blog</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rekap Blog</h6>
        <a href="<?= base_url('admin/Blog/form_add')?>" class="btn btn-primary mt-3">  <i class="fa fa-plus"></i>Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>judul</th>
                        <th>Foto</th>
                        <th>Tanggal</th>
                        <th>Isi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $row): ?>
                    <tr>
                        <td><?= $row->judul?></td>
                        <td><img src="<?= base_url('images/blog/'). $row->foto?>" alt="<?= $row->foto?>" width="120" height="120"></td>
                        <td><?= $row->tanggal?></td>
                        <td><?= $row->isi?></td>
                        <td>
                            <a href="<?= base_url('admin/Blog/form_edit/'). $row->judul?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('admin/Blog/hapus/'). $row->judul?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus data?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>    
            </table>
        </div>
    </div>
</div>

</div>