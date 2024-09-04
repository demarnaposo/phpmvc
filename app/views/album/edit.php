
<div class="container mt-3">


<div class="row">

<div class="col-6">
    <h3>Ubah Data Album</h3>

    <form action="<?= BASEURL; ?>/album/updateData" method="post">
        
    <input type="hidden" name="id" id="id" value="<?= $data['album']['id'] ?>">

    <div class="form-group">
  <label for="album" class="form-label">Nama Album</label>
  <input type="text" class="form-control" id="album" placeholder="Masukkan Nama Album" name="album" value="<?= $data['album']['album'] ?>">
</div>
    <div class="form-group">
  <label for="keterangan" class="form-label">Keterangan</label>
  <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan" value="<?= $data['album']['keterangan'] ?>">
</div>
<button type="submit" class="btn btn-primary">Ubah</button>
</form>
</div>
</div>
</div>