<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Contact</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rekap Contact</h6>
        <a href="<?= base_url('admin/Contact/form_add')?>" class="btn btn-primary mt-3">  <i class="fa fa-plus"></i>Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>no hp</th>
                        <th>email</th>
                        <th>alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $row): ?>
                    <tr>
                        <td><?= $row->no_hp?></td>
                        <td><?= $row->email?></td>
                        <td><?= $row->alamat?></td>
                        <td>
                            <a href="<?= base_url('admin/Contact/form_edit/'). $row->no_hp?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('admin/Contact/hapus/'). $row->no_hp?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus data?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>    
            </table>
        </div>
    </div>
</div>

</div>