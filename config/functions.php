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

// get data from Module
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


class LoginCheck
{
    function showError($message)
    {
        echo "<div class='ui tiny orange message' style='margin: 2rem 0.2rem;'>$message</div>";
    }

    function checkLogin($par)
    {
        if (isset($_GET[$par])) {
            $error = $_GET[$par];
            switch ($error) {
                default :$this->showError("Unknown Error");break;
                case 1 :$this->showError("Username dan password tidak sesuai");break;
                case 2 :$this->showError("Error database. Silahkan hubungi administrator");break;
                case 3 :$this->showError("Koneksi ke Database gagal. Autentikasi gagal");break;
                case 4 :$this->showError("Anda tidak boleh mengakses halaman sebelumnya karena belum login.
                        Silahkan login terlebih dahulu");break;
            }
        }
    }
}