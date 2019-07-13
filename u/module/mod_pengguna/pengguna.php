<?php
$m = $_GET['m'];
$aksi = "module/mod_pengguna/aksi_pengguna.php";
$act = isset($_GET['act']) ? $_GET['act'] : '';
$users = new Users();

switch ($act) {
    default:
        echo "
        <div class='ui stackable grid container'>
            <div class='eleven wide column'>
                <h2 class=''>Tampil Users</h2>
            </div>  
            <div class='four wide column'>
                <a onclick=window.location.href='?m=$m&act=tambah' class='ui basic button right floated'>
                <i class='icon plus'></i>
                    Tambah Users
                </a>
            </div>
            <div class='fifteen wide column'>
                <table class='ui striped table'>
                <thead>
                <tr>
                <th class='one wide'>No</th>
                <th class='one wide'>Username</th>
                <th class='four wide'>Fill Name</th>
                <th class='three wide'>Email</th>
                <th class='one wide'>Phone</th>
                <th class='one wide'>Position</th>
                <th class='two wide'>Aksi</th>
                </tr>
                </thead>
                <tbody>";
        $no = 1;
        $dataUsers = $users->getListUsers();
        foreach ($dataUsers as $data) {
            echo "<tr>
                <td>$no</td>
                <td>$data[username]</td>
                <td>$data[full_name]</td>
                <td>$data[email]</td>
                <td>$data[phone]</td>
                <td>$data[position]</td>
                <td>
                <a href='?m=$m&act=edit&id=$data[username]'>Edit</a> | ";
            if ($data['position'] != 'admin') {
                echo "<a href='$aksi?m=$m&act=hapus&id=$data[username]'
                    onclick='return confirm(`Hapus modul $data[username] ID=$data[username]?`);'
                    >Hapus</a>";
            }
            echo "
                </td>
                </tr>";
            $no++;
        }
        echo "
                </tbody>
                </table>
            </div>
        </div>
            ";
        break;

    case "tambah": ?>
        <div class="ui stackable grid">
            <div class="four wide column">
                <a onclick="self.history.back()" class="ui labeled icon button">
                    <i class="arrow left icon"></i>
                    Kembali
                </a>
            </div>
            <div class="eight wide column">
                <h2>Tambah Users</h2>
            </div>
        </div>
        <div class="ui stackable grid container">
            <div class="eight wide column">
                <h2 class="ui header"></h2>
                <form class="ui form" method="POST" name="formUsers" onsubmit="return usersValidation()"
                      action=<?php echo "$aksi?m=$m&act=tambah" ?>
                >
                    <div class="ui grid">
                        <div class="field column wide eight" id="usernameField">
                            <label>Username*</label>
                            <input type="text" name="username" placeholder="Username" minlength="4" maxlength="50">
                        </div>
                        <div class="field column wide eight">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" maxlength="50">
                        </div>
                    </div>
                    <div class="field">
                        <label>Nama Lengkap</label>
                        <input type="text" name="full_name" placeholder="Full Name">
                    </div>
                    <div class="ui grid">
                        <div class="field column wide eight">
                            <label>Phone</label>
                            <input type="number" name="phone" placeholder="Nomor Telepon">
                        </div>
                        <div class="field column wide eight">
                            <label>Posisi</label>
                            <div class="ui fluid selection dropdown">
                                <input type="hidden" name="position" required>
                                <div class="default text">Posisi</div>
                                <i class="dropdown icon"></i>
                                <div class="menu">
                                    <div class="item" data-value="admin">Admin</div>
                                    <div class="item" data-value="user">Pegawai Admin</div>
                                </div>
                            </div>
                        </div>
                        <div class="field eight wide column" id="passwordId">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="password" id="password"
                                   onkeyup="return checkPass()"
                                   >
                            <span id="message"></span>
                        </div>
                        <div class="field eight wide column" id="confirmPasswordId">
                            <label>Konfirmasi Password</label>
                            <input type="password" name="confirmPassword" placeholder="password" id="confirmPassword"
                                   onkeyup="checkPass()"
                                   >
                        </div>
                    </div>
                    <div class="ui error message"></div>
                    <button class="ui basic primary button right floated" type="submit" name="btnUsersAdd">Tambahkan
                    </button>
                </form>
            </div>
        </div>
        <?php
        break;

    case "edit":
        $data = $users->getItemUsers($_GET['id']);
        echo "
    <div class='ui stackable grid container'>
        <div class='four wide column'>
            <a onclick='self.history.back()' class='ui labeled icon button'>
                <i class='arrow left icon'></i>
                Kembali
            </a>
        </div>
        <div class='eight wide column'>
            <h2>Edit Users</h2>
        </div>
        <div class='eight wide column'>
            <h2 class='ui header'></h2>
            <form class='ui form' method='POST' action='$aksi?m=$m&act=update' id=form-modul>
                <input type='hidden' name='id' value='$data[module_id]'>
                <div class='field'>
                    <label>Nama Modul</label>
                    <input type='text' name='module_name' placeholder='$data[module_name]' value='$data[module_name]'>
                </div>
                <div class='field'>
                    <label>Link</label>
                    <input type='text' name='link' placeholder='$data[link]' value='$data[link]'>
                </div>
                <div class='field'>
                    <label>Ikon</label>
                    <input type='text' name='icon' placeholder='$data[icon]' value='$data[icon]'>
                    <small>Referensi Icon: <a href='https://semantic-ui.com/elements/icon.html' target='_blank'>Open New Tab</a></small>
                </div>
                <div class='field'>
                    <label>Aktif</label>
                    <div class='ui checked checkbox'>";
        ($data['active'] == 'Y') ? $checked = 'checked' : $checked = '';
        echo "
                        <input type='checkbox' name='active' value='Y' $checked>
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