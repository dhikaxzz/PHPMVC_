<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash_Jurusan(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal2">
                Tambah data Jurusan
            </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?=BASEURL; ?>/jurusan/cari" method="post">
            <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari Jurusan" name="keyword" id="keyword" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
      </div>
    </form>
    </div>
  </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Jurusan</h3>
                    <ul class="list-group">
                        <?php foreach($data['jurusan'] as $jurusan ) : ?>
                        <li class="list-group-item">
                            <?= $jurusan['nama']; ?>
                            <a href="<?= BASEURL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>" class="badge rounded-pill bg-danger float-end m-lg-1" onclick="return confirm('Yakin?');">Hapus</a>

                            <a href="<?= BASEURL; ?>/jurusan/ubah/<?= $jurusan['id']; ?>" class="badge rounded-pill bg-success float-end m-lg-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal2" data-id="<?= $jurusan['id']; ?>">Ubah</a>

                            <a href="<?= BASEURL; ?>/jurusan/detail/<?= $jurusan['id']; ?>" class="badge rounded-pill bg-primary float-end m-lg-1">Detail</a>

                           
                        </li>
                        <?php endforeach; ?>
                    </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal2" tabindex="-1" aria-labelledby="formModal2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel2">Tambah Data Jurusan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL; ?>/jurusan/tambah" method="post">
        <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
      </div>

        <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
      </div>
  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit " class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>