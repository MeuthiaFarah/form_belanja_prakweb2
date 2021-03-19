<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-8">
        <form class="form-horizontal" method="post" action="form_belanja.php">
          <fieldset>

            <!-- Form Name -->
            <legend>Belanja Online</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Cutomer">Customer</label>
              <div class="col-md-4">
                <input id="Cutomer" name="customer" type="text" placeholder="Nama Customer" class="form-control input-md">
              </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="produk">Pilih Produk</label>
              <div class="col-md-4">
                <label class="radio-inline" for="produk-0">
                  <input type="radio" name="produk" id="produk-0" value="TV" checked="checked">
                  TV
                </label>
                <label class="radio-inline" for="produk-1">
                  <input type="radio" name="produk" id="produk-1" value="Kulkas">
                  Kulkas
                </label>
                <label class="radio-inline" for="produk-2">
                  <input type="radio" name="produk" id="produk-2" value="Mesin Cuci">
                  Mesin Cuci
                </label>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="jumlah">Jumlah</label>
              <div class="col-md-4">
                <input id="jumlah" name="jumlah" type="text" placeholder="Jumlah" class="form-control input-md">

              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4">
                <button id="singlebutton" name="proses" class="btn btn-success">Kirim</button>
              </div>
            </div>

          </fieldset>
        </form>
      </div>

      <div class="col-4">
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true">Daftar Harga</li>
          <li class="list-group-item">TV : 4.200.000</li>
          <li class="list-group-item">Kulkas : 3.100.000</li>
          <li class="list-group-item">Mesin Cuci : 3.800.000</li>
          <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
        </ul>
      </div>
    </div>
  </div>
</body>
<?php error_reporting(0);
$proses = $_POST['proses'];
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
echo 'Proses : ' . $proses;
echo '<br/>Customer : ' . $customer;
echo '<br/>Produk : ' . $produk;
echo '<br/>Jumlah : ' . $jumlah;
echo '<br/>';

$total = 0;

// menghitung jumlah harga
switch ($produk) {
  case 'TV':
    $total = $jumlah * 4200000;
    echo 'Total harga :' . $total;
    break;
  case 'Kulkas':
    $total = $jumlah * 3100000;
    echo 'Total harga :' . $total;
    break;
  case 'Mesin Cuci':
    $total = $jumlah * 3800000;
    echo 'Total harga :' . $total;
    break;
  default:
    $total = 'Anda belum memilih barang';
    echo $total;
}
?>

</html>