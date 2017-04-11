<?php

class MyModel extends CI_Model {

    CONST TABLE	= 'organization_user_details';
    public static $admin	            = 'admin';
    public static $metro_police	        = 'metro_police';

    public static $landlord	            = 'landloard';
    public static $lnd_familymember	    = 'lnd_familymember';
    public static $lnd_homeworker	    = 'lnd_homeworker';
    public static $lnd_driver	        = 'lnd_driver';

    public static $renter	            = 'renter';
    public static $renter_familymember	= 'renter_familymember';
    public static $renter_homeworker	= 'renter_homeworker';
    public static $renter_driver	= 'renter_driver';

    public function __construct()
    {
        parent::__construct();

    }

    //Admin login info
    public function check_admin_login_info($user_name, $user_pass, $user_type){
        $this->db->select('*');
        $this->db->from(self::$admin);
        $this->db->where('user_name', $user_name);
        $this->db->where('user_pass', $user_pass);
        $this->db->where('user_type', $user_type);
        $query = $this->db->get();
        return $query->row();
    }

    //Landlord login info
    public function check_landloard_login_info($user_name, $user_pass, $user_type){
        $this->db->select('*');
        $this->db->from(self::$landlord);
        $this->db->where('lnd_nid', $user_name);
        $this->db->where('user_pass', $user_pass);
        $this->db->where('user_type', $user_type);
        $query = $this->db->get();
        return $query->row();
    }

    //Renter login info
    public function check_renter_login_info($user_name, $user_pass, $user_type){
        $this->db->select('*');
        $this->db->from(self::$renter);
        $this->db->where('renter_nid', $user_name);
        $this->db->where('renter_birth_date', $user_pass);
        $this->db->where('user_type', $user_type);
        $query = $this->db->get();
        return $query->row();
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

    //Renter info store
    public function save_renter_reg_data($reterData){
        $this->db->insert(self::$renter, $reterData);
        return $this->db->insert_id();
    }

    public function save_renterFM_data($renterFMData){
        $this->db->insert(self::$renter_familymember, $renterFMData);
        return $this->db->insert_id();
    }

    public function save_renterHW_data($renterHWData){
        $this->db->insert(self::$renter_homeworker, $renterHWData);
        return $this->db->insert_id();
    }

    public function save_renterDriver_data($renter_driverData){
        $this->db->insert(self::$renter_driver, $renter_driverData);
        return $this->db->insert_id();
    }
    //End Renter info store

    //Landlord info store
    public function save_lnd_reg_data($lndData){
        $this->db->insert(self::$landlord, $lndData);
        return $this->db->insert_id();
    }

    public function save_lndFM_data($lndFMData){
        $this->db->insert(self::$lnd_familymember, $lndFMData);
        return $this->db->insert_id();
    }

    public function save_lndHW_data($lndHWData){
        $this->db->insert(self::$lnd_homeworker, $lndHWData);
        return $this->db->insert_id();
    }

    public function save_lndDriver_data($lnd_driverData){
        $this->db->insert(self::$lnd_driver, $lnd_driverData);
        return $this->db->insert_id();
    }
    //End Landlord info store



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