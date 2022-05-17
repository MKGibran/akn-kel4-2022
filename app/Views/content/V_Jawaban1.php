<?= $this->extend('Template/V_Template') ?>
<?= $this->section('content') ?>

<div class="page-header">
  <h3 class="page-title">
    <button class="btn btn-gradient-primary btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#tambahData">
      <i class="mdi mdi-plus"></i>
    </button> Tambah Data
  </h3>
</div>

<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Perusahaan Dagang Metode Perpetual</h4>
        <div class="table-responsive mt-3">
          <table class="table jawaban1 order-column table-borderless border-white">
            <thead>
              <tr>
                <th> No </th>
                <th> Tanggal </th>
                <th> Nama </th>
                <th> Debit </th>
                <th> Kredit</th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              <?php foreach($results as $result): ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $result['tanggal']; ?></td>
                <td><?= $result['nama']; ?></td>
                <td>Rp <?= $result['debit']; ?></td>
                <td>Rp <?= $result['kredit']; ?></td>
                <td>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ubahData<?= $result['id']; ?>">
                        <i class="mdi mdi-grease-pencil"></i>
                      </button>
                    </li>
                    <!-- Modal of Update Data -->
                    <div class="modal fade" id="ubahData<?= $result['id']; ?>" tabindex="-1" aria-labelledby="ubahDataLabel"
                      aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header bg-gradient-primary">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Ubah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="<?= base_url('C_Jawaban1/updateData') ?>" method="post">
                              <input type="hidden" name="id" value="<?= $result['id']; ?>">
                              <div class="mb-3">
                                <label for="Tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="Tanggal" id="Tanggal" 
                                value="<?= $result['tanggal']; ?>" placeholder="<?= $result['tanggal']; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="Nama" id="Nama" 
                                value="<?= $result['nama']; ?>" placeholder="<?= $result['nama']; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="Debit" class="form-label">Debit</label>
                                <input type="number" class="form-control" name="Debit" id="Debit" 
                                value="<?= $result['debit']; ?>" placeholder="Rp <?= $result['debit']; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="Kredit" class="form-label">Kredit</label>
                                <input type="number" class="form-control" name="Kredit" id="Kredit" 
                                value="<?= $result['kredit']; ?>" placeholder="Rp <?= $result['kredit']; ?>">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-gradient-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- End of Modal -->

                    <li class="list-inline-item">
                      <a class="btn btn-danger btn-sm" href="<?= base_url('C_Jawaban1/deleteData') ?>/<?= $result['id']; ?>">
                        <i class="mdi mdi-delete-forever"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal of Add Data -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-gradient-primary">
        <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('C_Jawaban1/addData') ?>" method="post">
          <div class="mb-3">
            <label for="Tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="Tanggal" placeholder="" name="Tanggal">
          </div>
          <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="Nama" placeholder="" name="Nama">
          </div>
          <div class="mb-3">
            <label for="Debit" class="form-label">Debit</label>
            <input type="number" class="form-control" id="Debit" placeholder="" name="Debit">
          </div>
          <div class="mb-3">
            <label for="Kredit" class="form-label">Kredit</label>
            <input type="number" class="form-control" id="Kredit" placeholder="" name="Kredit">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-gradient-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End of Modal -->
<?= $this->endsection() ?>