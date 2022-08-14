<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Tasks</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
      .container{
      position: absolute;
      top: 1%;
      left:20%;
      width: 100%;
      text-align: center;
      font-size: 18px;
      margin: auto;
      width: 60%;
      border: 3px solid #73AD21;
      padding: 10px;
    }
    .container1{
      position: absolute;
      top: 10%;
      left:25%;
      width: 100%;
      text-align: center;
      font-size: 18px;
      margin: auto;
      width: 50%;
      /* border: 3px solid #73AD21; */
      padding: 10px;
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="text">
            <h2> Daily Tasks</h2>
        </div>
    </div>
    <div class="container1">
      <div class="rows">
        <div class="col-md-12">
            <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
            <br>
            <input type="button" class="btn btn-primary" value="SAVE">
            <input type="button" class="btn btn-warning" value="CLEAR">   
        </div>

      </div>
    </div>
</body>
</html>