<?php
require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_anggota");
?>

<h2>Daftar Anggota</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nomor Anggota</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Tanggal Jadi</th>
        <th>Kemampuan</th>
        <th>Gaji</th>
        <th>Nomor WA</th>
        <th>Batalion</th>
        <th>BB</th>
        <th>TB</th>
        <th>Aksi</th>
    </tr>

<?php $no = 1; while ($row = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nomor_anggota'] ?></td>
        <td><?= $row['nama_anggota'] ?></td>
        <td><?= $row['jabatan_anggota'] ?></td>
        <td><?= $row['tanggal_jadi'] ?></td>
        <td><?= $row['kemampuan_anggota'] ?></td>
        <td><?= number_format($row['gaji_anggota']) ?></td>
        <td><?= $row['nomor_wa'] ?></td>
        <td><?= $row['batalion_anggota'] ?></td>
        <td><?= $row['berat_badan'] ?></td>
        <td><?= $row['tinggi_badan'] ?></td>
        <td>
            <a href="edit_anggota.php?id=<?= $row['id_anggota'] ?>">Edit</a> |
            <a href="proses_hapus.php?id=<?= $row['id_anggota'] ?>"
               onclick="return confirm('Yakin ingin menghapus data ini?')">
               Hapus
            </a>
        </td>
    </tr>
<?php } ?>

</table>
