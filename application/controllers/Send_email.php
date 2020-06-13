<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->model('m_customer');
		$this->load->helper('url');
    }
    
    public function index()
    {
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'gancetsquad@gmail.com',  // Email gmail
            'smtp_pass'   => 'cacad1234',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from($this->input->post('email'), "Linen's");

        // Email penerima
        $this->email->to('hallo@skylinen.co.id'); // Ganti dengan email tujuan 

        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Skylinen');
        
        $data = array(
                    'id' => $this->input->post('id'),
                    'email' => $this->input->post('email'),
                    'firstname'=> $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'company' => $this->input->post('company'),
                    'phone_number' => $this->input->post('phone_number'),
                    'wa' => $this->input->post('wa'),
                    'address' => $this->input->post('address'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'zip' => $this->input->post('zip'),
                );

        // Isi email
        $body = $this->load->view('emails/anillabs.php',$data,TRUE);
        $this->email->message($body);

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            // $this->cart->destroy();
            $data_cust = array(
                'invoice_id' => $this->input->post('id'),
                'email' => $this->input->post('email'),
                'first_name'=> $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'company' => $this->input->post('company'),
                'phone_number' => $this->input->post('phone_number'),
                'wa' => $this->input->post('wa'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zip' => $this->input->post('zip'),
                'status' => 'waiting'
            );
            $insert = $this->m_customer->create($data_cust,'sky_customer');
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
    public function view() {
        $this->load->view('emails/anillabs',$data);
    }
}