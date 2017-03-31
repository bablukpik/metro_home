<?php

class MyModel extends CI_Model {

    const TABLE	= 'organization_user_details';
    public static $table_admin	= 'admin';

    public function __construct()
    {
        parent::__construct();
    }

    public function check_login_info($adm_username, $adm_pass, $user_type){

        $this->db->select('*');
        $this->db->from(self::$table_admin);
        $this->db->where('adm_username', $adm_username);
        $this->db->where('adm_pass', $adm_pass);
        $this->db->where('user_type', $user_type);
        $query = $this->db->get();
        return $query->row();
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