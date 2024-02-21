<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>electronicsshop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มเพิ่มประเภทสินค้า</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


<form>
  <div class="row mb-10">
    <label for="inputname" class="col-sm-2 col-form-label">ชื่อสินค้า</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputname">
    </div>
  </div><br>
  <div class="row mb-10">
    <label for="inputbrand" class="col-sm-2 col-form-label">Brand</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputbrand">
    </div>
  </div><br>
  <div class="row mb-10">
    <label for="inputcpu" class="col-sm-2 col-form-label">CPU</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputcpu">
    </div>
  </div><br>
  <div class="row mb-10">
    <label for="inputweight" class="col-sm-2 col-form-label">Weight</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputweight">
    </div>
  </div><br>
  <div class="row mb-10">
    <label for="inputdisplay" class="col-sm-2 col-form-label">Display</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputdisplay">
    </div>
  </div><br>
  <div class="row mb-10">
    <label for="inputram" class="col-sm-2 col-form-label">Ram</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputram">
    </div>
  </div><br>
  <div class="row mb-10">
    <label for="inputcolor" class="col-sm-2 col-form-label">Color</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputcolor">
    </div>
  </div><br>
  <div class="row mb-10">
    <label for="inputprice" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputprice">
    </div>
  </div><br>
  
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">จำนวนเครื่อง</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          one
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          two
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
        <label class="form-check-label" for="gridRadios3">
          three
        </label>
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
        <label class="form-check-label" for="gridRadios3">
          
four
        </label>

      </div>
    </div>
  </fieldset>
    </div>
  </div>
  <button type="submit" class="btn btn-danger">บันทึกข้อมูล</button>
</form>
</body>
</html>