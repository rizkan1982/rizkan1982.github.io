<?php

namespace App\Controllers;
use App\Models\K_model;

class barang_keluar extends BaseController
{
    public function index()
	{
		if(session()->get('id')>0) {
			$model=new K_model();
            $on = 'brg_keluar.id_barang=barang.id_barang';
            $data['a']=$model->join2('brg_keluar', 'barang', $on);
            $data['title']= 'Obat Keluar';
            echo view('header');
            echo view('menuutama');
            echo view('keluar/view', $data);
            echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
    public function tambah_barang()
	{
		if(session()->get('id')>0) {
		$model=new K_model();
			$data['a'] = $model->tampil('barang');
            $data['title']= 'Obat Keluar';
            echo view('header');
			echo view('menuutama');
			echo view('keluar/tambah', $data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function aksi_tambah()
	{
		if(session()->get('id')>0) {
		$a=$this->request->getPost('id_barang');
		$b=$this->request->getPost('jumlah');
		$c=$this->request->getPost('tanggall');


		$simpan=array(
			'id_barang'=>$a,
			'jumlah'=>$b,
			'tanggall'=>$c,
            'created_at'=>date('Y-m-d H:i:s')
		);
		$model=new K_model();
		$model->simpan('brg_keluar',$simpan);
		return redirect()->to('/barang_keluar/index');
	}else{
        return redirect()->to('/Home');
    }
	}
    public function hapus($id)
    {
		if(session()->get('id')>0) {
        $model=new K_model();
		$where=array('id_brg_klr'=>$id);
		$model->hapus('brg_keluar',$where);
		return redirect()->to('barang_keluar');
	}else{
        return redirect()->to('/Home');
    }
    }

}