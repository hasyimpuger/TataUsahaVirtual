<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
        function Mahasiswa() { 
            parent::__construct();
            $this->load->helper('url');
        }
        
        public function log_tu_bantuan($nim){   
            $tanggal = date('Y-m-d H:i:s');
            $dosen_wali = $this->input->post('dosen_wali');
            $kepada_bagian = $this->input->post('kepada_bagian');
            $deskripsi = $this->input->post('deskripsi');
            $hasil = false;
            if($nim==""||$dosen_wali==""||$kepada_bagian==""){
            }
            else{
                $this->load->model('models_log_tu');
                $hasil = $this->models_log_tu->input_log_tu($nim, $tanggal, 2, "");
                $id_log_tu = $this->models_log_tu->getLogTu($nim, $tanggal);
                if($hasil==true){
                    $this->load->model('models_bantuan');
                    $this->models_bantuan->input_bantuan($id_log_tu, $dosen_wali, $kepada_bagian, $deskripsi);
                }
                else{
                    redirect(base_url("pages/bantuan_fasilitas"), 'refresh');
                }
            } 
	}
        
        public function log_tu_absensi($nim){   
            $tanggal = date('Y-m-d H:i:s');
            $hari = $this->input->post('hari_absen');
            $hari_absen = str_replace('/', '-', $hari);
            $keterangan_absen = $this->input->post('keterangan_absen');
            $nama_dokter = $this->input->post('nama_dokter');
            $alamat_dokter = $this->input->post('alamat_dokter');
            $hasil = false;
            if($nim==""||$hari_absen==""){
            }
            else{
                $this->load->model('models_log_tu');
                $hasil = $this->models_log_tu->input_log_tu($nim, $tanggal, 1, "");
                $id_log_tu = $this->models_log_tu->getLogTu($nim, $tanggal);
                if($hasil==true){
                    $this->load->model('models_absensi');
                    $this->models_absensi->input_absensi($id_log_tu, $hari_absen, $keterangan_absen);
                }
                else{
                    redirect(base_url("pages/absensi"), 'refresh');
                }
            } 
	}
	
	public function log_tu_phl($nim){   
            $tanggal = date('Y-m-d H:i:s');
        //    $hari = $this->input->post('hari_absen');
          //  $hari_absen = str_replace('/', '-', $hari);
		    $mata_kuliah = $this->input->post('mata_kuliah');
            $jumlah_sks = $this->input->post('jumlah_sks');
			$jumlah_mahasiswa = $this->input->post('jumlah_mahasiswa');
			$ruang_sebelumnya = $this->input->post('ruang_sebelumnya');
			$ruang_request = $this->input->post('ruang_request');
			$jadwal_sebelumnya = $this->input->post('jadwal_sebelumnya');
			$jadwal_request = $this->input->post('jadwal_request');
			$hari = $this->input->post('hari');
            $hasil = false;
            if($nim==""||$mata_kuliah==""){
            }
            else{
                $this->load->model('models_log_tu');
                $hasil = $this->models_log_tu->input_log_tu($nim, $tanggal, 1, "");
                $id_log_tu = $this->models_log_tu->getLogTu($nim, $tanggal);
                if($hasil==true){
                    $this->load->model('models_phl');
                    $this->models_phl->input_phl($id_log_tu, $mata_kuliah, $jumlah_sks, $jumlah_mahasiswa, $ruang_sebelumnya, $ruang_request, $jadwal_sebelumnya, $jadwal_request, $hari);
                }
                else{
                    redirect(base_url("pages/request_phl"), 'refresh');
                }
            } 
	}


	public function sign_in(){   
            $nim = $this->input->post('nim');
            $password = $this->input->post('password');
            $hasil = false;
            if($nim==""||$password==""){
                
            }
            else{
                $this->load->model('models_mahasiswa');
                $hasil = $this->models_mahasiswa->sign_in($nim, $password);
            }
            
            if($hasil==true){
                redirect(base_url("pages"), 'refresh');
            }
            else{
                $this->load->view('login');
            }
	}	

	public function input_u(){
		$username = $this->input->post('username');

        $password = $this->input->post('password');

        $this->load->model('m_latihan');

        $insert = $this->m_latihan->input_user($username, $password);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */