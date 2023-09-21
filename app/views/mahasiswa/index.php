<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
  </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah data Mahasiswa
            </button>
            <br><br>
            <h3>Daftar Mahasiswa</h3>
                    <ul class="list-group">
                        <?php foreach($data['mhs'] as $mhs ) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge rounded-pill bg-danger float-end m-lg-1" onclick="return confirm('YAKIN NI BOSS??');">Hapus</a>

                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge rounded-pill bg-success float-end m-lg-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>

                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge rounded-pill bg-secondary float-end m-lg-1">Detail</a>

                           
                        </li>
                        <?php endforeach; ?>
                    </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
      </div>

        <div class="mb-3">
    <label for="nrp" class="form-label">NRP</label>
    <input type="number" class="form-control" id="nrp" name="nrp">
      </div>

        <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="form-group">
            <label for="jurusan">Example select</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Pangan">Teknik Pangan</option>
            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit " class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>