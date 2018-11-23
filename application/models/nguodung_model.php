<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class nguoidung extends CI_Model
    {
        public function new($uname, $pw, $them, $sua, $xoa)
        {
            $data = array(
                'username' => $uname,
                'password' => $pw,
                'quyen_them' => $them,
                'quyen_sua' => $sua,
                'quyen_xoa' => $xoa
            );
            $this->db->insert('Table', $data);
            return $this->db->insert_id();
        }

    }

    /* End of file .php */