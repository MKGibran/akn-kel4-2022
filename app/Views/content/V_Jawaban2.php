<?= $this->extend('Template/V_Template') ?>
<?= $this->section('content') ?>

<div class="row">
  <div class="col-12 grid-margin">
    <!-- Card of Metode FIFO -->
    <div class="card" style="max-height: 800px;">
      <div class="card-body">

        <ul class="list-inline">
          <li class="list-inline-item float-start">
            <h4 class="card-title">Metode FIFO</h4>
          </li>
          <li class="list-inline-item float-end">
              <button class="btn btn-gradient-primary btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#tambahData">
              <i class="mdi mdi-plus"></i>
            </button>
          </li>
        </ul>
        <div class="mb-5">
        </div>

        <div class="table-responsive mt-3">
          <table class="table jawaban2 order-column table-borderless border-white">
            <thead>
              <tr>
                <th rowspan="2"> No </th>
                <th rowspan="2"> Tanggal </th>
                <th colspan="3"> Pembelian </th>
                <th colspan="3"> Harga Pokok Penjualan </th>
                <th colspan="3"> Persediaan </th>
                <th rowspan="2"> Aksi </th>
              </tr>
              <tr>
                <th> Unit </th>
                <th> Harga (Unit) </th>
                <th> Total Harga </th>
                <th> Unit </th>
                <th> Harga (Unit) </th>
                <th> Total Harga </th>
                <th> Unit </th>
                <th> Harga (Unit) </th>
                <th> Total Harga </th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              <?php foreach($results1 as $result): ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $result['tanggal']; ?></td>
                <td><?= $result['unit1']; ?></td>
                <td>Rp <?= $result['harga1']; ?></td>
                <td>Rp <?= $result['total_harga1']; ?></td>
                <td><?= $result['unit2']; ?></td>
                <td>Rp <?= $result['harga2']; ?></td>
                <td>Rp <?= $result['total_harga2']; ?></td>
                <td><?= $result['unit3']; ?></td>
                <td>Rp <?= $result['harga3']; ?></td>
                <td>Rp <?= $result['total_harga3']; ?></td>
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
                            <h5 class="modal-title number-white" id="exampleModalLabel">Ubah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="<?= base_url('C_Jawaban2/updateData1') ?>" method="post">
                              <input type="hidden" name="id" value="<?= $result['id']; ?>">
                              <div class="mb-3">
                                <label for="Tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="Tanggal" 
                                placeholder="<?= $result['tanggal']; ?>" value="<?= $result['tanggal']; ?>" name="Tanggal">
                              </div>
                              <hr>
                              <h5>Pembelian</h5>
                              <div class="mb-3">
                                <label for="Unit1" class="form-label">Unit</label>
                                <input type="number" class="form-control" id="Unit1" 
                                placeholder="<?= $result['unit1']; ?>" value="<?= $result['unit1']; ?>" name="Unit1">
                              </div>
                              <div class="mb-3">
                                <label for="Harga1" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="Harga1" 
                                placeholder="<?= $result['harga1']; ?>" value="<?= $result['harga1']; ?>" name="Harga1">
                              </div>
                              <div class="mb-3">
                                <label for="Total_Harga1" class="form-label">Total Harga</label>
                                <input type="number" class="form-control" id="Total_Harga1" 
                                placeholder="<?= $result['total_harga1']; ?>" value="<?= $result['total_harga1']; ?>" name="Total_Harga1">
                              </div>
                              <hr>
                              <h5>Harga Pokok Penjualan</h5>
                              <div class="mb-3">
                                <label for="Unit2" class="form-label">Unit</label>
                                <input type="number" class="form-control" id="Unit2" 
                                placeholder="<?= $result['unit2']; ?>" value="<?= $result['unit2']; ?>" name="Unit2">
                              </div>
                              <div class="mb-3">
                                <label for="Harga2" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="Harga2" 
                                placeholder="<?= $result['harga2']; ?>" value="<?= $result['harga2']; ?>" name="Harga2">
                              </div>
                              <div class="mb-3">
                                <label for="Total_Harga2" class="form-label">Total Harga</label>
                                <input type="number" class="form-control" id="Total_Harga2" 
                                placeholder="<?= $result['total_harga2']; ?>" value="<?= $result['total_harga2']; ?>" name="Total_Harga2">
                              </div>
                              <hr>
                              <h5>Persediaan</h5>
                              <div class="mb-3">
                                <label for="Unit3" class="form-label">Unit</label>
                                <input type="number" class="form-control" id="Unit3" 
                                placeholder="<?= $result['unit3']; ?>" value="<?= $result['unit3']; ?>" name="Unit3">
                              </div>
                              <div class="mb-3">
                                <label for="Harga3" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="Harga3" 
                                placeholder="<?= $result['harga3']; ?>" value="<?= $result['harga3']; ?>" name="Harga3">
                              </div>
                              <div class="mb-3">
                                <label for="Total_Harga3" class="form-label">Total Harga</label>
                                <input type="number" class="form-control" id="Total_Harga3" 
                                placeholder="<?= $result['total_harga3']; ?>" value="<?= $result['total_harga3']; ?>" name="Total_Harga3">
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
                      <a class="btn btn-danger btn-sm" href="<?= base_url('C_Jawaban2/deleteData') ?>/<?= $result['id']; ?>">
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
    <!-- End of Card Metode FIFO -->

    <!-- Card of Harga Pokok -->
    <div class="card mt-5" style="max-height: 800px;">
      <div class="card-body">

        <ul class="list-inline">
          <li class="list-inline-item float-start">
            <h4 class="card-title">Harga Pokok Penjualan FIFO Sistem Perpetual</h4>
          </li>
          <li class="list-inline-item float-end">
              <button class="btn btn-gradient-warning btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#ubahDataHargaPokok">
              <i class="mdi mdi-grease-pencil"></i>
            </button>
          </li>
        </ul>
        <div class="mb-5">
        </div>

        <div class="table-responsive mt-3">
          <table class="table order-column">
            <tbody>
              <tr>
                <th> Persediaan Awal </th>
                <td> <?= $results2[0]['persediaan_awal']; ?> </td>
              </tr>
              <tr>
                <th> Pembelian </th>
                <td> <?= $results2[0]['pembelian']; ?> </td>
              </tr>
              <tr>
                <th> Barang Tersedia Untuk Dijual </th>
                <td> <?= $results2[0]['barang_tersedia']; ?> </td>
              </tr>
              <tr>
                <th> Persediaan Akhir </th>
                <td> <?= $results2[0]['persediaan_akhir']; ?> </td>
              </tr>
              <tr>
                <th> Harga Pokok Penjualan </th>
                <td> Rp <?= $results2[0]['harga_pokok']; ?> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- End of Card Harga Pokok -->
  </div>
</div>

<!-- Modal of Add Data Metode FIFO -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-gradient-primary">
        <h5 class="modal-title number-white" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('C_Jawaban2/addData') ?>" method="post">
          <div class="mb-3">
            <label for="Tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="Tanggal" placeholder="" name="Tanggal">
          </div>
          <hr>
          <h5>Pembelian</h5>
          <div class="mb-3">
            <label for="Unit1" class="form-label">Unit</label>
            <input type="number" class="form-control" id="Unit1" placeholder="" name="Unit1">
          </div>
          <div class="mb-3">
            <label for="Harga1" class="form-label">Harga</label>
            <input type="number" class="form-control" id="Harga1" placeholder="" name="Harga1">
          </div>
          <div class="mb-3">
            <label for="Total_Harga1" class="form-label">Total Harga</label>
            <input type="number" class="form-control" id="Total_Harga1" placeholder="" name="Total_Harga1">
          </div>
          <hr>
          <h5>Harga Pokok Penjualan</h5>
          <div class="mb-3">
            <label for="Unit2" class="form-label">Unit</label>
            <input type="number" class="form-control" id="Unit2" placeholder="" name="Unit2">
          </div>
          <div class="mb-3">
            <label for="Harga2" class="form-label">Harga</label>
            <input type="number" class="form-control" id="Harga2" placeholder="" name="Harga2">
          </div>
          <div class="mb-3">
            <label for="Total_Harga2" class="form-label">Total Harga</label>
            <input type="number" class="form-control" id="Total_Harga2" placeholder="" name="Total_Harga2">
          </div>
          <hr>
          <h5>Persediaan</h5>
          <div class="mb-3">
            <label for="Unit3" class="form-label">Unit</label>
            <input type="number" class="form-control" id="Unit3" placeholder="" name="Unit3">
          </div>
          <div class="mb-3">
            <label for="Harga3" class="form-label">Harga</label>
            <input type="number" class="form-control" id="Harga3" placeholder="" name="Harga3">
          </div>
          <div class="mb-3">
            <label for="Total_Harga3" class="form-label">Total Harga</label>
            <input type="number" class="form-control" id="Total_Harga3" placeholder="" name="Total_Harga3">
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

<!-- Modal of Add Data Harga Pokok -->
<div class="modal fade" id="ubahDataHargaPokok" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-gradient-primary">
        <h5 class="modal-title number-white" id="exampleModalLabel">Ubah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('C_Jawaban2/updateData2') ?>" method="post">
        <input type="hidden" name="id" value="<?= $results2[0]['id']; ?>">
          <div class="mb-3">
            <label for="PersediaanAwal" class="form-label">Persediaan Awal</label>
            <input type="number" class="form-control" id="PersediaanAwal"
             placeholder="<?= $results2[0]['persediaan_awal']; ?>" 
             value="<?= $results2[0]['persediaan_awal']; ?>" name="Persediaan_Awal">
          </div>
          <div class="mb-3">
            <label for="Pembelian" class="form-label">Pembelian</label>
            <input type="number" class="form-control" id="Pembelian"
             placeholder="<?= $results2[0]['pembelian']; ?>" 
             value="<?= $results2[0]['pembelian']; ?>" name="Pembelian">
          </div>
          <div class="mb-3">
            <label for="BarangTersedia" class="form-label">Barang Tersedia</label>
            <input type="number" class="form-control" id="BarangTersedia"
             placeholder="<?= $results2[0]['barang_tersedia']; ?>" 
             value="<?= $results2[0]['barang_tersedia']; ?>" name="Barang_Tersedia">
          </div>
          <div class="mb-3">
            <label for="PersediaanAkhir" class="form-label">Persediaan Akhir</label>
            <input type="number" class="form-control" id="PersediaanAkhir"
             placeholder="<?= $results2[0]['persediaan_akhir']; ?>" 
             value="<?= $results2[0]['persediaan_akhir']; ?>" name="Persediaan_Akhir">
          </div>
          <div class="mb-3">
            <label for="HargaPokok" class="form-label">Harga Pokok</label>
            <input type="number" class="form-control" id="HargaPokok"
             placeholder="<?= $results2[0]['harga_pokok']; ?>" 
             value="Rp <?= $results2[0]['harga_pokok']; ?>" name="Harga_Pokok">
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