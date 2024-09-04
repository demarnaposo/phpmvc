
<div class="container mt-3">


<div class="row">

<div class="col-6">
    <h3>Tambah Data Album</h3>

    <form action="<?= BASEURL; ?>/album/insertData" method="post">

    <div class="form-group">
  <label for="album" class="form-label">Nama Album</label>
  <input type="text" class="form-control" id="album" placeholder="Masukkan Nama Album" name="album">
</div>
    <div class="form-group">
  <label for="keterangan" class="form-label">Keterangan</label>
  <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan">
</div>
<button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
</div>
</div>