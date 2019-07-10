<?php
$nama_modul = $_GET['module'];
$aksi = "module/mod_pegawai/aksi_pegawai.php";
$act = isset($_GET['act']) ? $_GET['act'] : '';

switch ($act) {
    default:
        echo "
        <div class='ui grid'>
            <div class='fourteen wide column'>
                <a onclick=window.location.href='?module=$nama_modul&act=tambah' class='ui basic button'>
                <i class='icon plus'></i>
                    Tambah Pegawai
                </a>
                <table class='ui striped table'>
                <thead>
                <tr>
                <th class='one wide'>ID</th>
                <th class='three wide'>Username</th>
                <th class='three wide'>Nama Pegawai</th>
                <th class='three wide'>Jabatan</th>
                <th class='one wide'>Kelamin</th>
                <th class='two wide'>Aksi</th>
                </tr>
                </thead>
                <tbody>";
        $sql = "select * from pegawai";
        $query = mysqli_query($conn, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>
                <td>$data[id_pegawai]</td>
                <td>$data[username]</td>
                <td>$data[nama]</td>
                <td>$data[jabatan]</td>
                <td>$data[jenis_kelamin]</td>
                <td>
                <a href='?module=$nama_modul&act=edit&id=$data[id_pegawai]'>Edit</a> | ";
            if ($data['jabatan'] != 'admin') {
                echo "<a href='$aksi?module=$nama_modul&act=hapus&id=$data[id_pegawai]'
                    onclick='return confirm(`Hapus pegawai $data[nama] ?`);'> Hapus</a>";
            }
            echo "
                </td>
                </tr>";
            $no++;
        }
        echo "
                </tbody>
                </table>
                    <div class='ui label blue'>Total Pegawai
                        <div class='detail'>$no</div>
                    </div>
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
            <h2>Tambah Pegawai</h2>
        </div>
    </div>
    <div class="ui grid">
        <div class="eight wide column">
            <h2 class="ui header"></h2>
            <form class="ui form" method="POST" id="form-pegawai-tambah" action=<?php echo "$aksi?module=$nama_modul&act=tambah" ?>>
                <div class="field">
                    <label>Username*</label>
                    <input type="text" name="username" placeholder="Username" autofocus>
                </div>
                <div class="field">
                    <label>Nama Pegawai</label>
                    <input type="text" name="nama" placeholder="nama lengkap">
                </div>
                <div class="field">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" placeholder="Jabatan">
                </div>
                <div class="field">
                    <label>Gender</label>
                    <div class="ui fluid selection dropdown">
                        <input type="hidden" name="jenis_kelamin">
                        <div class="default text">Gender</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item" data-value="1">Laki-Laki</div>
                            <div class="item" data-value="0">Perempuan</div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="password">
                </div>
                <div class="field">
                    <label>Ulangi Password</label>
                    <input type="password" name="ulangipassword" placeholder="password">
                </div>
                <div class="ui error message"></div>
                <button class="ui basic primary button right floated" type="submit">Proses</button>
            </form>
        </div>
    </div>
    <?php
    break;
case "edit":
    $sql = "select * from pegawai where id_pegawai=$_GET[id]";
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
            <h2>Edit Pegawai</h2>
        </div>
    </div>
    <div class='ui grid'>
        <div class='eight wide column'>
            <h2 class='ui header'></h2>
            <form class='ui form' method='POST' action='$aksi?module=$nama_modul&act=update' >
            <input type='hidden' name='id' value='$r[id_pegawai]'>
                <div class='field'>
                    <label>Nama Pegawai</label>
                    <input type='text' name='nama' placeholder='$r[nama]' value='$r[nama]' autofocus>
                </div>";
    if ($r['jabatan'] == 'admin') {
        $jabatan_visibility = 'hidden';
    } else {
        $jabatan_visibility = '';
    }
    echo "
                    <div class='field' style='visibility:$jabatan_visibility;'>
                        <label>Jabatan</label>
                        <input name='jabatan' placeholder='$r[jabatan]' value='$r[jabatan]' >
                    </div>
                <button class='ui basic primary button right floated' type='submit'>Update</button>
                </form>
        </div>
    </div>";
    break;
} ?>