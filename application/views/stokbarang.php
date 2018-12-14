<?php
	include 'homepage/Header.php';

?>

      <!--main content start-->
      <section id="main-content">
    <section class="wrapper">
  <center><h1>STOK PRODUK</h1></center><br>
 
               <!-- tabel-->
     <center>
          <table class="table table-bordered table-hover" style="margin:10px;width:80%;background-color:white">
            <thead style="background-color:black">
            <tr>
            <th style="font-size:20px" scope="col">KODE PRODUK</th>
              <th style="font-size:20px" scope="col">MAMA PRODUK</th>
              <th style="font-size:20px" scope="col">JUMLAH STOK</th>
             
            </tr>
            </thead>
            <tbody>
              <tr>
              <?php
    if(!empty($stokbarang))
    {
      foreach($stokbarang as $stokbarang)
      {
                    echo "<td>".$stokbarang->id_barang."</td>";
                    echo "<td>".$stokbarang->nama_barang."</td>";
                    echo "<td>".$stokbarang->stok_barang."</td>";
      }
    }
    ?>
     
              
              </tr>
            </tbody>
          </table>
            </center>
           
    </section></section>

  <?php
	include 'homepage/Footer.php'
  ?>	