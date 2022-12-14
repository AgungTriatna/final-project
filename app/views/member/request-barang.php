<div class="card shadow">
    <div class="card-body">
    <h3>Management Inventory System</h3>
        <h6>Advics Manufacturing Indonesia PT.</h6>
        <hr>
        <h6>Silahkan pilih barang yang akan di pinjam.</h6>
        <br>
        <form action="" method="post">
        <div class="row">
            <div class="col-sm-6">
			    <div class="form-group">
					<input class="form-control" type="text" readonly placeholder="Kode Barang" name="kode_barang" value="<?= $data['data_barang']['kode_barang'] ?>">
				</div>
			</div>
			<div class="col-md-4" style="margin-left: -2% padding-right:5px;">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Pilih Barang
                </button>
			</div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input class="form-control" type="text" readonly placeholder="Nama Barang" name="nama_barang" id="nama_barang" value="<?= $data['data_barang']['nama_barang'] ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="tipe_barang">Tipe Barang</label>
                        <input class="form-control" type="text" readonly placeholder="Tipe Barang" name="tipe_barang" id="tipe_barang" value="<?= $data['data_barang']['tipe_barang'] ?>" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="jmlh_stok">Jumlah Pinjam</label>
                        <input type="number" name="jumlah" required id="jumlah" autocomplete="off" class="form-control">
                     </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input class="form-control" type="text" readonly placeholder="Lokasi" name="lokasi" id="lokasi" value="<?= $data['data_barang']['lokasi'] ?>" required>
                    </div>
                    <button id="simpan-pinjaman" class="btn btn-primary">Simpan Draft</button>
                </div>
            </div>
        </form>
    </div>
</div>
    <br>

    <div class="card shadow">
        <div class="card-body">
        <table class="table mt-4">
            <thead class="thead-light">
                <p>Draft Request Peminjaman</p>
            <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Tipe Barang</th>
                    <th>Jumlah Pinjam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tabel-ajax">
                <?php if (isset($_SESSION['pinjaman'])) : ?>
                    <?php $i = 1;
                    foreach ($_SESSION['pinjaman'] as $key => $value) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $value['nama_barang'] ?></td>
                            <td><a href="<?= BASEURL ?>/peminjaman/hapus/<?= $value['row_id'] ?>" class="badge badge-danger">Hapus</a></td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>

            </tbody>
        </table>
        <hr>
        <button id="simpan-pinjaman" class="btn btn-danger">Simpan Pinjaman</button>
    </div>
</div>




<!-- Modal -->
<!-- ketika button pilih barang di click maka akan muncul layer di bawah ini -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Tipe Barang</th>
                <th>Jumlah Stok</th>
                <th>Lokasi</th>
              </tr>
            </thead>
            <tbody>
            <?php if ($data['data_barang'] != []) : ?>
                <?php $i = 1; ?>
                <?php foreach ($data['data_barang'] as $brg) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $brg['kode_barang'] ?></td>
                        <td><?= $brg['nama_barang'] ?></td>
                        <td><?= $brg['tipe_barang'] ?></td>
                        <td><?= $brg['jmlh_stok'] ?></td>
                        <td><?= $brg['lokasi'] ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5"><strong>Tidak ada data barang</strong></td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>