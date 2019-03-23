<?php
  include 'homepage/Header.php';
  
?>
  <section id="main-content">
    <section class="wrapper">
    <center>
    <form name="formulir" action="konek.php" method="POST" onSubmit="return validasi()">
<p style="text-align:center;font-size:30px">MENCATAT PENGELUARAN</p><br>
  <table>
    <tr style="margin:12px">
      <td style="font-size:25px;padding-top:10px">  <div class="form-group">
                <label for="exampleFormControlSelect1">KAS :</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Kas Bahan Baku</option>
                 
                </select></td>
    </tr>
          <tr>
            <td style="font-size:25px;padding-top:10px">NAMA : </td>
          </tr>
              <tr>
                <td><input type="text" name="nama" required /></td>
              </tr>
          <tr>
    <tr>
      <td style="font-size:25px;padding-top:10px">JUMLAH : </td>
    </tr>
        <tr>
          <td><input type="text" name="jumlah" required /></td>
        </tr>
        <tr>
      <td style="font-size:25px;padding-top:10px">HARGA : </td>
    </tr>
        <tr>
          <td><input type="text" name="harga" required /></td>
        </tr>
    <tr>
      <td style="font-size:25px;padding-top:20px">KETERANGAN :</td>
    </tr>
        <tr>
          <td><textarea name="keterangan"></textarea></td>
        </tr>
  
<tr>
      <td style="padding-top:30px">
        <input type="submit" name="submit" value="kirim" />
        <input type="reset" name="reset" value="batal" />
      </td>
    </tr>
  </table>

</form>
<style type="text/css">
    body{

      font-family: Arial;


    }
      input[type=text]{
        width: 400px;
        margin: 8px 0px;
        padding: 10px;
        border: none;
        border-bottom: 2px solid gray;
       

      }
      textarea{
        width: 400px;
        height: 90px;
        border: 2px solid gray;
        margin-top: 10px;
      }
      form{
      border:4px solid gray;
      background-color:white;
      width:800px;
      margin:50px;
      padding:50px;
      padding-left: 90px;
      text-align:left;
      border-radius:30px;
     
      }
      input[type=submit]{
        width: 85px;
        height: 35px;
        border: 2px solid gray;
        margin: 20px;
      }
      input[type=submit]:hover{
        background-color: lightgray;
      }
      input[type=reset]{
        width: 85px;
        height: 35px;
        border: 2px solid gray;
      }
      input[type=reset]:hover{
        background-color: lightgray;
      }
    </style>
</section>
    </section>
  <?php
	include 'homepage/Footer.php'
  ?>	