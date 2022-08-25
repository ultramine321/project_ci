<div class="container-fluid px-4">
    <form action="<?= base_url('admin/Jurusan/add_new_data') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="InputID" class="form-label">ID</label>
            <input type="number" name="id" class="form-control" id="InputID">
        </div>
        <div class="mb-3">
            <label for="inputjurusan" class="form-label">jurusan</label> <br>
            <select name="jurusan" class="form-control">
                <option value="rpl">Rekayasa Perangkat Lunak</option>
                <option value="tkj">Tekhnik Komputer Jaringan</option>
                <option value="akutansi">Akutansi</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Inputpassfoto" class="form-label">Pass Foto</label>
            <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>