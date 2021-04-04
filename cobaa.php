

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"

<br>
<br>
<br>
<form methot="get" action="indeks.php">
<h3 align="center">Masukan Data diri Anda</h3>
<br>
<div class="container">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-6">
      <select id="select" name="kelamin" class="custom-select">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="number" class="col-4 col-form-label">Umur</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-bell"></i>
          </div>
        </div> 
        <input name="umur" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">thn</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="number" class="col-4 col-form-label">Tinggi badan</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-blind"></i>
          </div>
        </div> 
        <input  name="tb" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">cm</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Number" class="col-4 col-form-label">Berat badan</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input name="bb" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">kg</div>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-6">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    
    </div>
  </div>
  </div>
</form>