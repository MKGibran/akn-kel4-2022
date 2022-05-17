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
        <h4 class="card-title">Persediaan Metode FIFO</h4>
        <div class="table-responsive mt-3">
          <table class="table soal2 order-column table-borderless border-white">
            <thead>
              <tr>
                <th> No </th>
                <th> Tanggal </th>
                <th> Keterangan </th>
                <th> Kuantitas </th>
                <th> Unit </th>
                <th> Harga </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              <?php foreach($results as $result): ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $result['tanggal']; ?></td>
                <td><?= $result['keterangan']; ?></td>
                <td><?= $result['kuantitas']; ?></td>
                <td><?= $result['unit']; ?></td>
                <td>Rp <?= $result['harga']; ?></td>
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
                            <form action="<?= base_url('C_Soal2/updateData') ?>" method="post">
                              <input type="hidden" name="id" value="<?= $result['id']; ?>">
                              <div class="mb-3">
                                <label for="Tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="Tanggal" name="Tanggal"
                                value="<?= $result['tanggal']; ?>" placeholder="<?= $result['tanggal']; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="Keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="Keterangan" name="Keterangan"
                                value="<?= $result['keterangan']; ?>" placeholder="<?= $result['keterangan']; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="Kuantitas" class="form-label">Kuantitas</label>
                                <input type="number" class="form-control" id="Kuantitas" name="Kuantitas"
                                value="<?= $result['kuantitas']; ?>" placeholder="<?= $result['kuantitas']; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="Unit" class="form-label">Unit</label>
                                <input type="number" class="form-control" id="Unit" name="Unit"
                                value="<?= $result['unit']; ?>" placeholder="<?= $result['unit']; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="Harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="Harga" name="Harga"
                                value="<?= $result['harga']; ?>" placeholder="Rp <?= $result['harga']; ?>">
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
                      <a class="btn btn-danger btn-sm" href="<?= base_url('C_Soal2/deleteData') ?>/<?= $result['id']; ?>">
                        <i class="mdi mdi-delete-forever"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <?php $i++; ?>
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
        <form action="<?= base_url('C_Soal2/addData') ?>" method="post">
          <div class="mb-3">
            <label for="Tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="Tanggal" placeholder="" name="Tanggal">
          </div>
          <div class="mb-3">
            <label for="Keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" placeholder="" name="Keterangan">
          </div>
          <div class="mb-3">
            <label for="Kuantitas" class="form-label">Kuantitas</label>
            <input type="number" class="form-control" id="Kuantitas" placeholder="" name="Kuantitas">
          </div>
          <div class="mb-3">
            <label for="Unit" class="form-label">Unit</label>
            <input type="number" class="form-control" id="Unit" placeholder="" name="Unit">
          </div>
          <div class="mb-3">
            <label for="Harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="Harga" placeholder="" name="Harga">
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