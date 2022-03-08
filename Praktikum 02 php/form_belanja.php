<!DOCTYPE html>
<html lang="en">

<body>

        <form method="post" action="form_belanja.php">
        <table style="width:80%; border: 2px solid black; padding: 20px;">
            <tr>
                <td><h2>Belanja Online</h2></td>
                <td></td>
                <td><label style="background-color:rgb(5, 125, 236);">Daftar Harga</label></td>
            </tr>
            <tr>
                <td><label>customer</label></td>
                <td>  <input type="text" name="customer" value="" size="30"></td>
                <td><label>Tv   : 4.200.000 </label></td>
            </tr>
            <tr><br/>
                <td><label>Produk pilihan</label></td>
                <td>
                <input type="radio" name="produk" value="TV">TV
                <input type="radio" name="produk" value="Kulkas">Kulkas
                <input type="radio" name="produk" value="Mesin cuci">Mesin Cuci
                </td>
                <td><label>Kulkas   : 3.100.000</label></td>
            </tr>
           <tr>
               <td><label>Jumlah</label></td>
               <td> <input type="text" name="Jumlah" value="" size="6"><br/></td>
               <td><label>Mesin Cuci    : 3.800.000</label></td>
           </tr>
           <tr> 
           <td><input type="submit" name="proses" value="kirim"></td>
           </tr>
           </table>
<?php
    $pelanggan = $_POST['customer'];
    $produk = $_POST['produk'];
    $total = $_POST['Jumlah'];
    echo 'customer : '.$pelanggan;
    echo '<br/>produk : '.$produk;
    echo '<br/>jumlah Beli : '.$total;
   
    if($produk == 'TV' ) {
        echo '<br/>Total belanja : Rp. '.number_format($total*4200000) . ',-';
    } elseif($produk == 'Kulkas' ) {
        echo '<br/>Total belanja : Rp. '.number_format($total*3100000) . ',-';
    } elseif($produk == 'Mesin cuci' ) {
        echo '<br/>Total belanja : Rp. '.number_format($total*3800000) . ',-';
    }
    else{
        echo 'pembeli';
    }
?>

</form>
</body>
</html>