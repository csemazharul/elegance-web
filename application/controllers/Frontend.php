<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

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
   * @see https://codeigniter.com/user_guide/general/urls.html
   */

  public function _construct()
  {
    parent::__construct();
    $this->load->helper("url");
    $this->load->library('session');
    if (isset($_SESSION['message'])) {
      unset($_SESSION['message']);
    }
  }

  public function index()
  {
    $data['title'] = "Elegance-Food and Drinks";
    $data['req_uri'] = $_SERVER['REQUEST_URI'];
    $data['color'] = "ltn__header-transparent-- gradient-color-4---";

    $this->load->view('frontend/index', $data);
  }

  public function products()
  {
    $data['title'] = "Products";
    $data['color'] = "ltn__header-transparent gradient-color-2";
    $data['req_uri'] = $_SERVER['REQUEST_URI'];
    $this->load->view('frontend/products', $data);
  }

  public function contact()
  {

    $data['title'] = "Contact";
    $data['color'] = "ltn__header-transparent gradient-color-2";
    $data['req_uri'] = $_SERVER['REQUEST_URI'];
    $this->load->view('frontend/contact', $data);
  }

  public function history()
  {
    $data['title'] = "Home";
    $data['color'] = "ltn__header-transparent gradient-color-2";
    $data['req_uri'] = $_SERVER['REQUEST_URI'];
    $this->load->view('frontend/history', $data);
  }

  public function news()
  {
    $data['title'] = "News";
    $data['color'] = "ltn__header-transparent gradient-color-2";
    $data['req_uri'] = $_SERVER['REQUEST_URI'];
    $this->load->view('frontend/news', $data);
  }



  public function submitQuote()
  {
    $this->load->library('email');
    $data['data'] = $_POST;
    $config = array();
    $config['mailtype'] = 'html';
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'smtp.mailgun.org';
    $config['smtp_user'] = 'postmaster@test.myscoresme.com';
    $config['smtp_pass'] = '20c4b1191b6822c9ac9655d9d0bb1905-41a2adb4-7f832e5d';
    $config['smtp_port'] = 587;
    $this->email->initialize($config);
    $this->email->set_newline("\r\n");
    $this->email->from('postmaster@test.myscoresme.com', 'Elegance-Food and Drinks');
    $this->email->to("mazharulislam10000@gmail.com");
    $this->email->subject('GET A QUOTE');
    // $message = "Hi";

    $message = $this->load->view('frontend/template/email', $data, true);


    $this->email->message($message);

    $this->email->send();
    $this->session->set_flashdata('message', '<strong>Thank you!</strong>Your Quote has been sent successfully.</span>');
    redirect('/contact', 'refresh');
  }
}
