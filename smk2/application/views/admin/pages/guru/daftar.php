<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Guru</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rekap Guru</h6>
        <a href="<?= base_url('admin/guru/form_add')?>" class="btn btn-primary mt-3">  <i class="fa fa-plus"></i>Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Mapel</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Status Pegawaian</th>
                        <th>Passfoto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $row): ?>
                    <tr>
                        <td><?= $row->nip?></td>
                        <td><?= $row->nama?></td>
                        <td><?= $row->tempat_lahir?></td>
                        <td><?= $row->tanggal_lahir?></td>
                        <td><?= $row->mapel?></td>
                        <td><?= $row->alamat?></td>
                        <td><?= $row->jk?></td>
                        <td><?= $row->status_pegawaian?></td>
                        <td><img src="<?= base_url('images/guru/'). $row->passfoto?>" alt="<?= $row->passfoto?>" width="120" height="120"></td>
                        <td>
                            <a href="<?= base_url('admin/Guru/form_edit/'). $row->nip?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('admin/Guru/hapus/'). $row->nip?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus data?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>    
            </table>
        </div>
    </div>
</div>

</div>