<?php
	include 'homepage/Header.php';

?>

      <!--main content start-->
      <section id="main-content">
    <section class="wrapper">
  <center><h1>LAPORAN PENJUALAN</h1></center><br>
 <!-- filter-->
 <div class="row container">
               <div class="col-lg-1"></div>
              <div class="col-lg-2">
                 
              <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
              </div>
               </div>
               
               <div class="col-lg-2">
                  <div class="form-group">
                <label for="exampleFormControlSelect1">Sampai</label>
                <select class="input-group date" id="exampleFormControlSelect1">
            
                 
                </select>
              </div>
               </div>
               <!-- tabel-->
     <center>
          <table class="table table-bordered table-hover" style="margin:10px;width:80%;background-color:white">
            <thead style="background-color:black">
            <tr>
          
              <th style="font-size:20px" scope="col">TANGGAL</th>
              <th style="font-size:20px" scope="col">KODE PRODUK</th>
              <th style="font-size:20px" scope="col">NAMA PRODUK</th>
              <th style="font-size:20px" scope="col">JENIS</th>
              <th style="font-size:20px" scope="col">JUMLAH</th>
              <th style="font-size:20px" scope="col">NOMINAL</th>
            </tr>
            </thead>
            <tbody>
              <tr>
             
              <td style="font-size:20px">Tanggal</td>
              <td style="font-size:20px">Kode produk</td>
              <td style="font-size:20px">nama produk</td>
              <td style="font-size:20px">jenis produk</td>
              <td style="font-size:20px">jumlah</td>
              <td style="font-size:20px">nominal</td>
              
              </tr>
            </tbody>
          </table>
            </center>
           
    </section></section>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
  <?php
	include 'homepage/Footer.php'
  ?>	