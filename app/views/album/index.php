<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">

    <?php Flasher::flash(); ?>

    </div>
</div>


<div class="row">

<div class="col-lg-6">
    <h3>Daftar Album</h3>
    <a href="<?= BASEURL; ?>/album/insert" class="btn btn-primary">Tambah Album</a>
    <?php foreach ($data['album'] as $album) : ?>

    

        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= BASEURL; ?>/image/album.png" class="img-fluid rounded-start" style="width: 100px;" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $album['album']; ?></h5>
        <p class="card-text">Keterangan : <?=  $album['keterangan']; ?></p>
        <a href="<?= BASEURL ?>/album/editData/<?= $album['id'] ?>" class="btn btn-success">Ubah</a>
        <a href="<?= BASEURL ?>/album/deleteData/<?= $album['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin?!');">Hapus</a>
      </div>
    </div>
  </div>
</div>

<!-- <div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div> -->


    <?php endforeach; ?>


</div>
</div>
</div>