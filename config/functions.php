<?php
// connect to database
function dbConnect()
{
    $db = new mysqli("localhost", "root", "siswanto123321", "atol_flight");
    return $db;
}

// fungsi untuk menghindari injeksi dari user yang jahil
function anti_injection($data)
{
    $filter = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
    return $filter;
}

// my Input Format(0) ==> 0 whitespace collapse/nospace & lowercase
// my Input Format(1) ==> 1 whitespace collapse & lowercase
function my_inputformat($str, $space)
{
    if ($space == 1)
        return strtolower(trim(preg_replace("/\s+/", " ", $str)));
    else
        return strtolower(trim(preg_replace("/\s+/", "", $str)));
}

// get data from Module (store in side bar administrator web)
function getListModule()
{
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $res = $db->query("SELECT * FROM module WHERE active='Y' ");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            $res->free();
            return $data;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

class Module
{
//    private $module_id = 0;
//    private $module_name = "";
//    private $link = "";
//    private $icon = "";
//    private $active = "";

    // get data from Module
    function getListModule()
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "SELECT * FROM module";
            $res = $conn->query($sql);
            if ($res) {
                $data = $res->fetch_all(MYSQLI_ASSOC);
                $res->free();
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // get 1 data to put in edit form
    function getItemModule($module_id)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "SELECT * FROM module WHERE module_id='$module_id'";
            $res = $conn->query($sql);
            $data = $res->fetch_assoc();
            $row_cnt = $res->num_rows;

            if ($row_cnt == 1) {
                return $data;
            }

        } else {
            return false;
        }
    }

    // masukkan data module
    function insertModule($module_name, $link, $icon, $active)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "INSERT INTO module(module_name, link, icon, active) VALUES('$module_name','$link','$icon','$active') ";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        }

    }

    // update data module
    function updateModule($module_id, $module_name, $link, $icon, $active)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "UPDATE module SET module_name='$module_name',link='$link',icon='$icon',active='$active' WHERE module_id='$module_id'";
            $res = $conn->query($sql);

            if ($res) return true; else return false;

        } else {
            return false;
        }
    }

    //delete 1 data module
    function deleteModule($module_id)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "DELETE FROM module WHERE module_id='$module_id'";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        } else {
            return false;
        }
    }

}

class Airplane
{
    // get data from Airplane
    function getListAirplane()
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "SELECT * FROM airplane";
            $res = $conn->query($sql);
            if ($res) {
                $data = $res->fetch_all(MYSQLI_ASSOC);
                $res->free();
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // get 1 data to put in edit form
    function getItemAirplane($airplane_id)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "SELECT * FROM airplane WHERE airplane_id='$airplane_id'";
            $res = $conn->query($sql);
            $data = $res->fetch_assoc();
            $row_cnt = $res->num_rows;

            if ($row_cnt == 1) {
                return $data;
            }

        } else {
            return false;
        }
    }

    // masukkan data Users
    function insertAirplane($producer, $type)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "INSERT INTO airplane(airplane_id, producer, type) 
                      VALUES(null, '$producer','$type')";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        }

    }

    // update data airplane
    function updateAirplane($airplane_id, $producer, $type) //
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "UPDATE airplane SET producer='$producer', type='$type' WHERE airplane_id='$airplane_id' ";
            $res = $conn->query($sql);

            if ($res) return true; else return false;

        } else {
            return false;
        }
    }

    //delete 1 data airplane
    function deleteAirplane($airplane_id)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "DELETE FROM airplane WHERE airplane_id='$airplane_id'";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        } else {
            return false;
        }
    }
}

class Users
{
//    private $module_id = 0;
//    private $module_name = "";
//    private $link = "";
//    private $icon = "";
//    private $active = "";

    // get data from Users
    function getListUsers()
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "SELECT * FROM users";
            $res = $conn->query($sql);
            if ($res) {
                $data = $res->fetch_all(MYSQLI_ASSOC);
                $res->free();
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // get 1 data to put in edit form
    function getItemUsers($username)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "SELECT * FROM users WHERE username='$username'";
            $res = $conn->query($sql);
            $data = $res->fetch_assoc();
            $row_cnt = $res->num_rows;

            if ($row_cnt == 1) {
                return $data;
            }

        } else {
            return false;
        }
    }

    // masukkan data Users
    function insertUsers($username, $password, $full_name, $email, $phone, $position, $block)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "INSERT INTO users(username, password, full_name, email, phone, position, block) 
                      VALUES('$username','$password','$full_name','$email','$phone','$position','$block')";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        }

    }

    // update data users
    function updateUsers($full_name, $email, $phone, $username, $id_session) //
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "UPDATE users SET full_name='$full_name',email='$email',phone='$phone' WHERE username='$username' AND id_session='$id_session'";
            $res = $conn->query($sql);

            if ($res) return true; else return false;

        } else {
            return false;
        }
    }

    //delete 1 data users
    function deleteUsers($username)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "DELETE FROM users WHERE username='$username'";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        } else {
            return false;
        }
    }

}

class LoginCheck
{
    function showError($message)
    {
        echo "<div class='ui small orange message' style='margin: 2rem 0.2rem;'>$message</div>";
    }

    function checkLogin($par)
    {
        if (isset($_GET[$par])) {
            $error = $_GET[$par];
            switch ($error) {
                default :
                    $this->showError("Unknown Error");
                    break;
                case 1 :
                    $this->showError("Username dan password tidak sesuai");
                    break;

                case 2 :
                    $this->showError("Error database. Silahkan hubungi administrator");
                    break;
                case 3 :
                    $this->showError("Koneksi ke Database gagal. Autentikasi gagal");
                    break;
                case 4 :
                    $this->showError("Anda tidak boleh mengakses halaman sebelumnya karena belum login.
                        Silahkan login terlebih dahulu");
                    break;

                case 5 :
                    $this->showError("Harap gunakan tombol Log In yang telah disediakan");
                    break;
                case 6 :
                    $this->showError("Maaf Login tidak bisa diinjeksi");
                    break;
                case 7 :
                    $this->showError("Username minimal 5 karakter");
                    break;
                case 8 :
                    $this->showError("Maaf, Anda harus login dulu");
                    break;
            }
        }
    }
}

