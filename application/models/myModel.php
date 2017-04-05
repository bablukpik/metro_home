<?php

class MyModel extends CI_Model {

    const TABLE	= 'organization_user_details';
    public static $admin	            = 'admin';
    public static $landloard	        = 'landloard';
    public static $metro_police	        = 'metro_police';
    public static $lnd_familymember	    = 'lnd_familymember';
    public static $renter	            = 'renter';
    public static $renter_familymember	= 'renter_familymember';

    public function __construct()
    {
        parent::__construct();
    }

    public function check_admin_login_info($user_name, $user_pass, $user_type){
        /*var_dump($user_name);
        var_dump($user_pass);
        var_dump($user_type);
        exit();*/
        $this->db->select('*');
        $this->db->from(self::$admin);
        $this->db->where('user_name', $user_name);
        $this->db->where('user_pass', $user_pass);
        $this->db->where('user_type', $user_type);
        $query = $this->db->get();
        return $query->row();
    }

    public function check_landloard_login_info($user_name, $user_pass, $user_type){
       /* $this->db->select('*');
        $this->db->from(self::$table_admin);
        $this->db->where('adm_username', $adm_username);
        $this->db->where('adm_pass', $ad_pass);
        $this->db->where('user_type', $user_type);
        $query = $this->db->get();
        return $query->row();*/
    }
    public function check_renter_login_info($user_name, $user_pass, $user_type){
/*
        $this->db->select('*');
        $this->db->from(self::$table_admin);
        $this->db->where('adm_username', $adm_username);
        $this->db->where('adm_pass', $adm_pass);
        $this->db->where('user_type', $user_type);
        $query = $this->db->get();
        return $query->row();*/
    }
    public function check_metro_police_login_info($user_name, $user_pass, $user_type){
       /* var_dump($user_name);
        var_dump($user_pass);
        var_dump($user_type);
        exit;
        $this->db->select('*');
        $this->db->from(self::$table_admin);
        $this->db->where('adm_username', $adm_username);
        $this->db->where('adm_pass', $adm_pass);
        $this->db->where('user_type', $user_type);
        $query = $this->db->get();
        return $query->row();*/
    }
    public function check_genUser_login_info($user_name, $user_pass, $user_type){

       /* $this->db->select('*');
        $this->db->from(self::$table_admin);
        $this->db->where('adm_username', $adm_username);
        $this->db->where('adm_pass', $adm_pass);
        $this->db->where('user_type', $user_type);
        $query = $this->db->get();
        return $query->row();*/
    }

   /* public function save($data)
    {
        $this->db->insert(self::TABLE, $data);
    }



    public function findAll()
    {
        $this->db->select('*');
        $this->db->from(self::TABLE);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->select('*');
        $this->db->from(self::TABLE);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }


    public function findByUser($userId)
    {
        $this->db->select('*');
        $this->db->from(self::TABLE);
        $this->db->where('user_id', $userId);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($data, $id)
    {
        $this->db->update(self::TABLE, $data, array('id' => $id));
    }

    public function updateOrg1($data, $id)
    {
        $this->db->update(self::TABLE, $data, array('id' => $id));
    }
    public function destroy($id)
    {
        $this->db->delete(self::TABLE, array('id' => $id));
    }*/

}
?>