<?php
class Models_proposal extends CI_Model {

    function Models_proposal() { 
        parent::__construct();
        $this->load->database();
    } 
    
    function getproposaldetail($id){
        $sql = "SELECT pp.id_p_proposal, l.id_log_tu, l.nim, l.tanggal_log, pp.topik, ps.judul_proposal, ps.dosen_wali, ps.pembimbing_1, ps.pembimbing_2, l.isi_log, m.nama_mahasiswa, m.email FROM pengajuan_proposal pp, proposal_skripsi ps, log_tu l, mahasiswa m WHERE pp.id_log_tu = l.id_log_tu AND L.id_log_tu = '".$id."' AND m.nim = l.nim AND pp.id_proposal_skripsi = ps.id_proposal_skripsi";
        $query = $this->db->query($sql);
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {   
            $hasil['id_p_proposal'] = $row['id_p_proposal'];
            $hasil['id_log_tu'] = $row['id_log_tu'];
            $hasil['nim'] = $row['nim'];
            $hasil['tanggal_log'] = $row['tanggal_log'];
            $hasil['topik'] = $row['topik'];
            $hasil['judul_proposal'] = $row['judul_proposal'];
            $hasil['dosen_wali'] = $row['dosen_wali'];
            $hasil['pembimbing_1'] = $row['pembimbing_1'];
            $hasil['pembimbing_2'] = $row['pembimbing_2'];
            $hasil['isi_log'] = $row['isi_log'];
            $hasil['nama_mahasiswa'] = $row['nama_mahasiswa'];
            $hasil['email'] = $row['email'];
            
            $i++;
        }
        
        return $hasil;
    }

    function input_proposal($nim, $judul, $doswal, $dosbing1, $dosbing2){
        $data = array(
            'nim' => $nim,
            'judul_proposal' => $judul,
            'dosen_wali' => $doswal,
            'pembimbing_1' => $dosbing1,
            'pembimbing_2' => $dosbing2
                
        );
        return $this->db->insert('proposal_skripsi', $data);
    }
    
    function input_pengajuan_proposal($id_log_tu, $id_proposal_skripsi, $topik){
        $data = array(
            'id_log_tu' => $id_log_tu,
            'id_proposal_skripsi' => $id_proposal_skripsi,
            'topik' => $topik
        );
        return $this->db->insert('pengajuan_proposal', $data);
    }
    
    function getproposal($nim, $judul){
        $this->db->where('nim', $nim);
        $this->db->where('judul_proposal', $judul);
        $query = $this->db->get('proposal_skripsi');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $hasil = $row['id_proposal_skripsi'];
            
            $i++;
        }
        
        return $hasil;
    }
    
    function getproposalid($nim){
        $this->db->where('nim', $nim);
        $query = $this->db->get('proposal_skripsi');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $hasil[$i]['id_proposal_skripsi'] = $row['id_proposal_skripsi'];
            $hasil[$i]['judul_proposal'] = $row['judul_proposal'];
            
            $i++;
        }
        return $hasil;
    }
    
    function getall($nim, $judul){
        $this->db->where('nim', $nim);
        $this->db->where('judul_proposal', $judul);
        $query = $this->db->get('proposal_skripsi');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $hasil = $row['id_proposal_skripsi'];
            
            $i++;
        }
        
        return $hasil;
    }

}