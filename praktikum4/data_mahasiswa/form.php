
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
    
    <!-- link bootstrap builder -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    
    <!-- link bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



    <!-- link font-awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <!-- my css -->
    <link rel="stylesheet" href="form.css">
   
  </head>
  <body>
    <div class="container">
      <h1>FROM NILAI SISWA</h1>
      <dir class="row justify-content-center">
        <div class="col-xl-8 col-12 " >
        <div class="shadow p-3 bg-white rounded card ">
          <form class="p-5" method="get" action="class_nilaiMahasiswa.php">
            <div class="form-group row">
              <label for="nim" class="col-sm-5 col-form-label"><span><b>NIM</b></span></label>
              <div class="col-sm-7">
                <input id="nim" name="nim" placeholder="Nim" type="text" class="form-control" />
              </div>
            </div>
            <div class="form-group row">
              <label for="matkul" class="col-sm-5 col-form-label"><span><b>Mata Kuliah</b></span></label>
              <div class="col-sm-7">
                <select name="matkul" class="form-control" id="matkul">
                  <option id="matkul" value="Matkul">Mata Kuliah</option>
                  <option id="matkul" value="DDP">Dasar-Dasar Pemrograman</option>
                  <option id="matkul" value="BSd">Basis Data I</option>
                  <option id="matkul" value="PWEB">Pemrograman Web</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="Nilai" class="col-sm-5 col-form-label"><span><b>Nilai</b></span></label>
              <div class="col-sm-4">
                <input id="NilaiUts" name="nilai" placeholder="Nilai" type="text" class="form-control" />
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-5 col-12">
                <button name="submit" id="submit" type="submit" class="col-sm-3 col-12 btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </dir>
     </div>
    </div>
    
    <!-- bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

