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
function my_inputformat($str,$space){
    if ($space==1)
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
    private $module_id = 0;
    private $module_name = "";
    private $link = "";
    private $icon = "";
    private $active = "";

    /**
     * @return int
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * @param int $module_id
     */
    public function setModuleId($module_id)
    {
        $this->module_id = $module_id;
    }

    /**
     * @return string
     */
    public function getModuleName()
    {
        return $this->module_name;
    }

    /**
     * @param string $module_name
     */
    public function setModuleName($module_name)
    {
        $this->module_name = $module_name;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

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

    // masukkan data modul
    function insertModule($module_name, $link, $icon, $active)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "INSERT INTO module(module_name, link, icon, active) VALUES('$module_name','$link','$icon','$active') ";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        }

    }

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

    function deleteModule($module_id){
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "DELETE FROM module WHERE module_id='$module_id'";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        }else{
            return false;
        }
    }

}