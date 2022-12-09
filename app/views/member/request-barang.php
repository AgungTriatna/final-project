<div class="card shadow">
    <div class="card-body">
        <h3>Daftar Inventaris Perusahaan</h3>
        <h6>Advics Manufacturing Indonesia PT.  </h6>
        <hr>
        <p>Cari Barang Yang Akan Anda Pinjam !</p>
        <table id="tbl-daftar-buku" class="table dt-responsive nowrap" style="width: 100%;">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Tipe Barang</th>
                    <th>Jumlah Stok</th>
                    <th>Lokasi</th>
                    <th>Tahun Registrasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
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
                            <td><?= $brg['tgl_regist'] ?></td>
                            <td class="text-center">
                                <a class="btn btn-danger" href="<?= BASEURL ?>/member/detail-barang/<?= $brg['id'] ?>">Detail </a>
                                <a class="btn btn-success" href="<?= BASEURL ?>/member/ubah-barang/<?= $brg['id'] ?>">Request</a>
                            </td>
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
    </div>
</div>