<?php
class Latihan1 extends CI_Controller
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar Web Programming";
 }
 public function penjumlahan($nilai1, $nilai2)
 {
 $hasil=$nilai1+$nilai2;
 echo"<br>";
 $this->load->view('view-latihan', array('n1'=>$nilai1,'n2'=>$nilai2,'hasil'=>$hasil));
 }
}
