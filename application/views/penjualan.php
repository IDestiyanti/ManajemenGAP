<?php
	include 'homepage/Header.php';

?>

    <!--main content start-->
    <section id="main-content">
    <section class="wrapper">
    <table>
    <tr>
    <td style="width:95%">
    <form>
   
  <div class="form-group row">
     
    <div class="col-sm-12">
      <input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Pencarian" style="height:50px;font-size:20px">
    </div>
  </div>
    </form>
    </td>
    <td ><button style="margin-bottom:20px" type="button" class="btn btn-primary btn-lg">Cari</button></td>
    </tr>
    </table>
     <!-- tabel-->
     <center>
          <table class="table table-bordered table-hover" style="margin:10px;width:80%;background-color:white">
            <thead style="background-color:black">
            <tr>
          
              <th style="font-size:20px" scope="col">NAMA PRODUK</th>
              <th style="font-size:20px" scope="col">HARGA</th>
              <th style="font-size:20px" scope="col">TAMBAH</th>
            </tr>
            </thead>
            <tbody>
              <tr>
             
              <td style="font-size:20px">Tanggal</td>
              <td style="font-size:20px">Kode Barang</td>
              <td><button style="border-radius:100% 100% 100% 100%;" type="button" class="btn btn-primary btn-sm">+</button></td>
              </tr>
            </tbody>
          </table>
            </center>
            

    </section>
    </section>
  <?php
	include 'homepage/Footer.php'
  ?>	