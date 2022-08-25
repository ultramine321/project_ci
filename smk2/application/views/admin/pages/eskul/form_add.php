<div class="container-fluid px-4">
    <form action="<?= base_url('admin/Eskul/add_new_data') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="InputID" class="form-label">ID</label>
            <input type="number" name="id" class="form-control" id="InputID">
        </div>
        <div class="mb-3">
            <label for="inputeskul" class="form-label">Ekstrakulikuler</label> <br>
            <select name="eskul" class="form-control">
                <option value="futsal">Futsal</option>
                <option value="basket">Basket</option>
                <option value="volly">Volly</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Inputpassfoto" class="form-label">Pass Foto</label>
            <input type="file" name="passfoto" class="form-control" id="Inputpassfoto">
        </div>
        <div class="mb-3">
            <label for="Inputdeskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" id="Inputdeskripsi">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>