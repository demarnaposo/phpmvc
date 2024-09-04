<div class="container mt-3">


<div class="row">

<div class="col-6">
    <h3>Daftar Galeri</h3>
    <?php foreach ($data['galeri'] as $galeri) : ?>

    

        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="<?= $galeri['foto']; ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $galeri['judul']; ?></h5>
        <p class="card-text">Album : <?=  $galeri['album']; ?></p>
        <p class="card-text"><?= $galeri['keterangan'] ?></p>
        <p class="card-text"><?= $galeri['status'] ?></p>
        <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
        <p class="card-text"><small class="text-body-secondary">Tanggal : <?= $galeri['tanggal'] ?></small></p>
      </div>
    </div>
  </div>
</div>


    <?php endforeach; ?>


</div>
</div>
</div>