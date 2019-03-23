<?php
	include 'homepage/Header.php';

?>

      <!--main content start-->
      <section id="main-content">
    <section class="wrapper">
  <center><h1>STOK PRODUK</h1></center><br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal " style="margin-left:75%">
  Tambah Stok
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menambah produk baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
        <div class="form-group">
        <label for="formGroupExampleInput">Kode Produk :</label><br>
        <label for="formGroupExampleInput">Nama Produk :</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nama produk">
        </div>
        <div class="form-group">
       <label for="formGroupExampleInput2">Jumlah Stok</label>
         <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="jumlah stok">
       </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
               <!-- tabel-->
     <center>
          <table class="table table-bordered table-hover" style="margin:10px;width:80%;background-color:white">
            <thead style="background-color:black">
            <tr>
            <th style="font-size:20px" scope="col">KODE PRODUK</th>
              <th style="font-size:20px" scope="col">MAMA PRODUK</th>
              <th style="font-size:20px" scope="col">JUMLAH STOK</th>
              <th style="font-size:20px" scope="col">Action</th>
             
            </tr>
            </thead>
            <tbody>

              <tr>
              <?php
    if(!empty($stokbarang))
    {
      foreach($stokbarang as $stokbarang)
      {
                    echo "<tr>";
                    echo "<td>".$stokbarang->id_barang."</td>";
                    echo "<td>".$stokbarang->nama_barang."</td>";
                    echo "<td>".$stokbarang->stok_barang."</td>";
                    echo "<td><center><button type=button class=btn>Edit</button>
                         <button type=button class=btn>Hapus</button>
                          </center></td>";
                    echo "</tr>";
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