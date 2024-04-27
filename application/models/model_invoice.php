<?php class Model_invoice extends CI_Model
 {
     public function index()
     {
         date_default_timezone_set('Asia/Jakarta');
         $nama = $this->input->post('nama');
         $alamat = $this->input->post('alamat');

         $invoice = [
             'nama' => $nama,
             'no_telepon' => $this->input->post('no_tlp'),
             'alamat' => $alamat,
             'tanggal_pesan' => date('Y-m-d H:i:s'),
             'batas_bayar' => date(
                 'Y-m-d H:i:s',
                 mktime(
                     date('H'),
                     date('i'),
                     date('s'),
                     date('m'),
                     date('d') + 5,
                     date('Y')
                 )
             ),
         ];
         $this->db->insert('tb_invoice', $invoice);
         $id_invoice = $this->db->insert_id();

         foreach ($this->cart->contents() as $item) {
             $data = [
                 'id_invoice' => $id_invoice,
                 'id_brg' => $item['id'],
                 'nama_brg' => $item['name'],
                 'jumlah' => $item['qty'],
                 'harga' => $item['price'],
                 'file_request' => $item['file_request'],
                 //file_request
             ];
             // var_dump($data);
             // die;
             $this->db->insert('tb_pesanan', $data);
         }

         return true;
     }

     public function tampil_data()
     {
         if ($this->input->post('select') != '') {
             $this->db->where('approve', $this->input->post('select'));
         }
         //echo $this->input->post('before');
         //die();
         if ($this->input->post('before') != '') {
             $this->db->where('tanggal_pesan >=', $this->input->post('before'));
         }
         if ($this->input->post('after') != '') {
             $this->db->where('tanggal_pesan <=', $this->input->post('after'));
         }
         $result = $this->db->get('tb_invoice');
         // if ($result->num_rows() > 0) {
         //     return $result->result();
         // } else {
         //     return false;
         // }
         return $result->result();
     }

     public function ambil_id_invoice($id_invoice)
     {
         $result = $this->db
             ->where('id', $id_invoice)
             ->limit(1)
             ->get('tb_invoice');
         if ($result->num_rows() > 0) {
             return $result->row();
         } else {
             return false;
         }
     }

     public function ambil_id_pesanan($id_invoice)
     {
         $result = $this->db
             ->where('id_invoice', $id_invoice)
             ->get('tb_pesanan');
         if ($result->num_rows() > 0) {
             return $result->result();
         } else {
             return false;
         }
     }
 } ?>