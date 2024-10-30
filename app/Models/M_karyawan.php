<?php

namespace App\Models;
use CodeIgniter\Model;

class M_karyawan extends Model
{		
	protected $table      = 'karyawan';
	protected $primaryKey = 'id_karyawan';
	protected $allowedFields = ['nik', 'nama', 'alamat', 'no_telepon', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'user'];
	protected $useSoftDeletes = true;
	protected $useTimestamps = true;

	public function tampil($table1)	
	{
		return $this->db->table($table1)->where('deleted_at', null)->get()->getResult();
	}
	public function hapus($table, $where)
	{
		return $this->db->table($table)->delete($where);
	}
	public function simpan($table, $data)
	{
		return $this->db->table($table)->insert($data);
	}

	public function getWhere($table, $where)
	{
		return $this->db->table($table)->getWhere($where)->getRow();
	}
	public function getWhere2($table, $where)
	{
		return $this->db->table($table)->getWhere($where)->getRowArray();
	}

	public function qedit($table, $data, $where)
	{
		return $this->db->table($table)->update($data, $where);
	}


	public function join2($table1, $table2, $on)
	{
		return $this->db->table($table1)->join($table2, $on, 'left')->get()->getResult();
	}


	public function getLogin($table, $where)
	{
		return $this->db->table($table)->getWhere($where)->getRowArray();
	}

	public function deletee($id)
	{
		return $this->delete($id);
	}

}