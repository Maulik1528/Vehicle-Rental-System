<!DOCTYPE html>
<html>
<head>
	<title>Center</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("http://wallpapersqq.net/wp-content/uploads/2016/01/2016-Koenigsegg-Agera-RS-4.jpg");

  /* Control the height of the image */
  min-height: 400px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  margin-right: 70px;
  max-width: 580px;
  padding: 16px;
  /*background-color: white;*/
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.butn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.butn:hover {
  opacity: 1;
}
</style>
</head>
<body>
	<div class="bg-img">
  <form action="/action_page.php" class="container">
    <h2 style="color:white;margin-bottom:16px">Rent a Vehicle at Low Price</h2>

    <div class="form-group">
      <label style="color: white" for="examplepickuploc">Pick-Up Location</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="City,State,Or PinCode">
     
    </div>

    <div class="form-group row">
      <div class="col-sm-6">
      	<label style="color: white" for="examplepicdatetime">Pick-Up Date & Time</label>
      	<div class="form-group row">
      		<div class="col-sm-7">
        		<input  type="Date" class="form-control" placeholder="mm/dd/yyyy" id="inputDefault" aria-describedby="start-date">
        	</div>
        	<div class="col-sm-5">
        		<input  type="Time" class="form-control" placeholder="09:30" id="inputDefault">
        	</div>
        </div>
      </div>
      <div class="col-sm-6">
      	<label style="color: white" for="examplepicdatetime">Pick-Up Date & Time</label>
      	<div class="form-group row">
      		<div class="col-sm-7">
        		<input type="Date" class="form-control" placeholder="mm/dd/yyyy" id="inputDefault">
        	</div>
        	<div class="col-sm-5">
        		<input type="Time" class="form-control" placeholder="09:30" id="inputDefault">
        	</div>
        </div>
      </div>    
  </div>

    <div type="button" style="width:100%" class="btn btn-primary">Get A Car Now</div>
  </form>
</div>
</body>
</html>