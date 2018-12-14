<?php
	include 'homepage/Header.php';

?>

    
    <section id="main-content">
    <section class="wrapper">
    
    <center>
              <h1>MENCATAT PENGELUARAN LISTRIK</h1>
            </center>
            <form name="formulir" >
             <table>  
            <tr>
            <td style="font-size:25px">KAS</td>
            <td style="font-size:25px;padding:35px"> :</td>
            <td></td> 
            </tr>
            <tr>
             <td style="font-size:25px;padding-top:10px">NAMA</td>
             <td style="font-size:25px;padding:35px">:</td>
              <td style="font-size:25px;padding:35px">PEMBAYARAN LISTRIK</td>
            </tr>
            <tr>
             <td style="font-size:25px;padding-top:10px">JUMLAH</td>
             <td style="font-size:25px;padding:35px">:</td>
              <td><input type="text" name="jumlah" /></td>
            </tr>
              <tr>
             <td style="font-size:25px;padding-top:10px">Keterangan</td>
             <td style="font-size:25px;padding:35px">:</td>
             <td style="padding-top:70px"><textarea name="ket"></textarea></td>
            </tr>
            <tr>
             <td style="padding-top:30px">
              <input type="submit" name="submit" value="Simpan" /></td>
              
              <td style="padding-top:30px"><input type="reset" name="reset" value="Batal" /></td>
             
            </tr>
            </table>
            </form>
  
    </section></section>
 <style>   
input[type=text]{
        width: 300px;
        margin: 8px 0px;
        padding: 10px;
        border: none;
        border-bottom: 2px solid gray;

      }
      
      textarea{
        width: 300px;
        height: 120px;
        border: 2px solid gray;
        margin-top: 10px;
      }
      form{
      width:1000px;
      margin:20px;
      padding:50px;
      padding-left: 90px;
      text-align:left;
  
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
      table{
        margin: 10px;
      }
</style>
  <?php
	include 'homepage/Footer.php'
  ?>	