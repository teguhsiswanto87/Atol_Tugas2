<?php
$nama_modul = $_GET['module'];
$aksi = "module/mod_modul/aksi_modul.php";
$act = isset($_GET['act']) ? $_GET['act'] : '';

switch ($act) {
    default:
        echo "
        <div class='ui grid'>
            <div class='twelve wide column'>
                <a onclick=window.location.href='?module=$nama_modul&act=tambah' class='ui basic button'>
                <i class='icon plus'></i>
                    Tambah Modul
                </a>
                <table class='ui striped table'>
                <thead>
                <tr>
                <th class='one wide'>ID</th>
                <th class='three wide'>Nama Modul</th>
                <th class='three wide'>Link</th>
                <th class='one wide'>Ikon</th>
                <th class='one wide'>Aktif</th>
                <th class='two wide'>Aksi</th>
                </tr>
                </thead>
                <tbody>";
        $sql = "select * from modul";
        $query = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>
                <td>$data[id_modul]</td>
                <td>$data[nama_modul]</td>
                <td>$data[link]</td>
                <td>$data[ikon]</td>
                <td>$data[aktif]</td>
                <td>
                <a href='?module=$nama_modul&act=edit&id=$data[id_modul]'>Edit</a> | ";
            if ($data['nama_modul'] != $nama_modul) {
                echo "<a href='$aksi?module=$nama_modul&act=hapus&id=$data[id_modul]'
                    onclick='return confirm(`Hapus modul $data[nama_modul] ?`);'
                    >Hapus</a>";
            }
            echo "
                </td>
                </tr>";
        }
        echo "
                </tbody>
                </table>
            </div>
        </div>
            ";
        break;
    case "tambah": ?>
    <div class="ui grid">
        <div class="three wide column">
            <a onclick="self.history.back()" class="ui labeled icon button">
                <i class="arrow left icon"></i>
                Kembali
            </a>
        </div>
        <div class="four wide column">
            <h2>Tambah Modul</h2>
        </div>
    </div>
    <div class="ui grid">
        <div class="eight wide column">
            <h2 class="ui header"></h2>
            <form class="ui form" method="POST" id="form-modul" action=<?php echo "$aksi?module=$nama_modul&act=tambah" ?>>
                <div class="field">
                    <label>Nama Modul</label>
                    <input type="text" name="nama_modul" placeholder="Nama Modul">
                </div>
                <div class="field">
                    <label>Link</label>
                    <input type="text" name="link" placeholder="Link">
                </div>
                <div class="field">
                    <label>Ikon</label>
                    <input type="text" name="ikon" placeholder="Ikon">
                    <small>Referensi ikon: <a href="https://semantic-ui.com/elements/icon.html" target="_blank">Open New Tab</a></small>
                </div>
                <div class="field">
                    <label>Aktif</label>
                    <div class="ui checked checkbox">
                        <input type="checkbox" name="aktif" value="Y" checked>
                        <label>Tampilkan di Menu Admin</label>
                    </div>
                </div>
                <div class="ui error message"></div>
                <button class="ui basic primary button right floated" type="submit">Proses</button>
            </form>
        </div>
    </div>
    <?php
    break;
case "edit":
    $sql = "select * from modul where id_modul=$_GET[id]";
    $query = mysqli_query($conn, $sql);
    $r = mysqli_fetch_array($query);

    echo "
    <div class='ui grid'>
        <div class='three wide column'>
            <a onclick='self.history.back()' class='ui labeled icon button'>
                <i class='arrow left icon'></i>
                Kembali
            </a>
        </div>
        <div class='four wide column'>
            <h2>Edit Modul</h2>
        </div>
    </div>
    <div class='ui grid'>
        <div class='eight wide column'>
            <h2 class='ui header'></h2>
            <form class='ui form' method='POST' action='$aksi?module=$nama_modul&act=update' id=form-modul>
                <input type='hidden' name='id' value='$r[id_modul]'>
                <div class='field'>
                    <label>Nama Modul</label>
                    <input type='text' name='nama_modul' placeholder='$r[nama_modul]' value='$r[nama_modul]'>
                </div>
                <div class='field'>
                    <label>Link</label>
                    <input type='text' name='link' placeholder='$r[link]' value='$r[link]'>
                </div>
                <div class='field'>
                    <label>Ikon</label>
                    <input type='text' name='ikon' placeholder='$r[ikon]' value='$r[ikon]'>
                    <small>Referensi ikon: <a href='https://semantic-ui.com/elements/icon.html' target='_blank'>Open New Tab</a></small>
                </div>
                <div class='field'>
                    <label>Aktif</label>
                    <div class='ui checked checkbox'>";
    ($r['aktif'] == 'Y') ? $checked = 'checked' : $checked = '';
    echo "
                        <input type='checkbox' name='aktif' value='Y' $checked>
                        <label>Tampilkan di Menu Admin</label>
                    </div>
                </div>
                <div class='ui error message'></div>
                <button class='ui basic primary button right floated' type='submit'>Perbarui</button>
            </form>
        </div>
    </div>";
    break;
} ?>