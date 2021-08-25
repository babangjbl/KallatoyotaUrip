<?php 
require "functions.php";
// Jika admin/user menekan tombol save
if(isset($_POST["submit"])){
	// jika data yang diinput tidak kosong
	if(dataBarang($_POST) > 0){
		echo "Data telah disimpan";
	}
	else{
		echo "Gagal menyimpan data";
	}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
    <script>
      function mydate()
      {
        //alert("");
      document.getElementById("dt").hidden=false;
      document.getElementById("ndt").hidden=true;
      }
      function mydate1()
      {
       d=new Date(document.getElementById("dt").value);
      dt=d.getDate();
      mn=d.getMonth();
      mn++;
      yy=d.getFullYear();
      document.getElementById("ndt").value=dt+"/"+mn+"/"+yy
      document.getElementById("ndt").hidden=false;
      document.getElementById("dt").hidden=true;
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-50">
        <a class="navbar-brand " href="#"><img src="img/Logo-Kalla-Toyota-Nov-2018.png" alt="kallatoyota"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="#">Home <span class="sr-only"></span></a>
            <a class="nav-link" href="#">Data Base</a>
            <a class="nav-link" href="#">Contact</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </div>
        </div>
      </nav>
    <div class="container">
        <form action="" method="POST" class="row g-3 justify-content-center">
            <div class="col-md-5">
              <label for="inputNO4" class="form-label">NO.POLISI</label>
              <input type="text" class="form-control" id="inputNO4" name="no" required autocomplete="off">
            </div>
            <div class="col-md-5 ">
              <label for="inputWO4" class="form-label">NO.WORK ORDER</label>
              <input type="text" class="form-control" id="inputWO4" name="wo" required autocomplete="off">
            </div>
            <div class="input-group col align-self-center row-cols-md-1">
              <select name="nama_sa" class="form-select col-md-1" id="inputGroupSelect03" aria-label="Example select with button addon">
                <option selected>Service Advisior...</option>
                <option value="Farel">Farel</option>
                <option value="Syam">Syam</option>
                <option value="Irwansyah">Irwansyah</option>
                <option value="Imam">Imam</option>
                <option value="Fadli">Fadli</option>
                <option value="Reza">Reza</option>
                <option value="Hariyadi">Hariyadi</option>
                <option value="Musrin">Musrin</option>
                <option value="Ahmad Supardy">Ahmad Supardy</option>
              </select>
              <div class="input-group justify-content-center">
                <span class="input-group-text">With textarea</span>
                <textarea type="text" class="form-control" aria-label="With textarea" name="nama_barang" required autocomplete="off"></textarea>
              </div> 
            </div>
            <div class="row-cols-3 gap-2 d-md-flex justify-content-md-center">
              <button class="btn btn-primary me-md-3" type="submit" name="submit">SAVE</button>
              <button class="btn btn-primary" type="submit">PRINT</button>
            </div>
		</form>
    </div>

  </body>
</html>
