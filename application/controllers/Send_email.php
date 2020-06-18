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
        $this->email->to('gancetsquad@gmail.com'); // Ganti dengan email tujuan 

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
        if(count($this->cart->contents()) > 0){
            if ($this->email->send()) {

                $products = array();
                foreach ($this->cart->contents() as $v_products) {
                    array_push($products, $v_products['id']);
                }
                $v_products = implode(",", $products);

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
                    'products' => $v_products,
                    'status' => 'waiting'
                );
                $insert = $this->m_customer->create($data_cust,'sky_customer');

            

                $this->cart->destroy();
                
                $this->session->set_flashdata('email_success', '    <script>
                                                                        swal("Wait for an answer from our team via email", {
                                                                            icon: "success",
                                                                            title: "Sended to Skylinen Team",
                                                                            button: {
                                                                            text: "Ok, I wil wait :)",
                                                                            value: true,
                                                                            visible: true,
                                                                            className: "",
                                                                            closeModal: true
                                                                            }
                                                                        });
                                                                    </script>');
                redirect(base_url('mycart'));
            } else {
                $this->session->set_flashdata('email_error', '  <script>
                                                                    swal("Oh sorry, Your email was not sent properly", {
                                                                        icon: "error",
                                                                        title: "Email failed to send",
                                                                        button: {
                                                                        value: true,
                                                                        visible: true,
                                                                        className: "",
                                                                        closeModal: true,
                                                                        text: "Try Again Later !",
                                                                        }
                                                                    });
                                                                </script>');
                redirect(base_url('mycart'));
            }
        }else{
            $this->session->set_flashdata('cart_empty', '   <script>
                                                                swal("Put in the cart of products that you want", {
                                                                    icon: "error",
                                                                    title: "Cart Is Empty !!!",
                                                                });
                                                            </script>');
            redirect(base_url('mycart'));
        }
    }
    public function view() {
        $data = array(
            'id' => 'SH-0001',
            'email' => 'chandramaulanah@gmail.com',
            'firstname'=> 'Chandra',
            'lastname' => 'Maulana',
            'company' => '-',
            'phone_number' => '+62 123456789',
            'wa' => '+62 123456789',
            'address' => '+62 123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789123456789',
            'city' => 'Bandung',
            'state' => 'Indonesia',
            'zip' => '410231',
        );
        
        $this->load->view('emails/anillabs',$data);
    }
}