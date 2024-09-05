
<div class="container mt-3">


<div class="row">

<div class="col-6">
    <h3>Ubah Data Galeri</h3>

    <?php 
    // var_dump($data['galeri']);
    // die;
     ?>

    

    <form action="<?= BASEURL; ?>/galeri/updateData" method="post">

    <input type="hidden" name="id" id="id" value="<?= $data['galeri']['id'] ?>">

    <div class="form-group">
  <label for="album_id" class="form-label">Album</label>
  <select class="form-select" id='album_id' name='album_id'>
      <option selected value="<?= $data['galeri']['album_id'] ?>"><?= $data['galeri']['album'] ?></option>
      <?php foreach ($data['album'] as $album) : ?>
        
  <option value="<?= $album['id'] ?>"><?= $album['album'] ?></option>
  
  <?php endforeach; ?>
</select>
</div>
    <div class="form-group">
  <label for="judul" class="form-label">Judul</label>
  <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" value="<?= $data['galeri']['judul'] ?>">
</div>
    <div class="form-group">
  <label for="foto" class="form-label">Foto</label>
  <input type="text" class="form-control" id="foto" placeholder="Masukkan Nama Foto" name="foto" value="<?= $data['galeri']['foto'] ?>">
</div>
  <div class="form-group">
  <label for="keterangan" class="form-label">Keterangan</label>
  <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan"value="<?= $data['galeri']['keterangan'] ?>">
</div>
  <div class="form-group">
  <label for="tanggal" class="form-label">Tanggal</label>
  <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="<?= $data['galeri']['tanggal'] ?>">
</div>
<div class="form-group">
  <label for="status" class="form-label">Status</label>
  <select class="form-select" id="status" name="status">
  <option selected><?= $data['galeri']['status'] ?></option>
  <option>Publish</option>
  <option>Unpublish</option>
</select>
</div>
<button type="submit" class="btn btn-primary">Ubah</button>
</form>
</div>
</div>
</div>