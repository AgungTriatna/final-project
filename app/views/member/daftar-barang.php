<div class="card shadow">
    <div class="card-body">
        <h3>DaftaR Inventaris Perusahaan</h3>
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
                                <a class="badge badge-info" href="<?= BASEURL ?>/admin/detail-barang/<?= $brg['id'] ?>">Detail ></a>
                                <a class="badge badge-warning" href="<?= BASEURL ?>/admin/ubah-barang/<?= $brg['id'] ?>">Ubah</a>
                                <a class="badge badge-danger" href="<?= BASEURL ?>/admin/hapus-barang/<?= $brg['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
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

        <!-- Modal -->
        <div class="modal fade" id="detailBuku" tabindex="-1" role="dialog" aria-labelledby="detailBukuLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailBukuLabel">Detail Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 id="judul-buku"></h5>
                    <p id="tahun-terbit"></p>
                    <p id="penulis"></p>
                    <p id="isbn"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>