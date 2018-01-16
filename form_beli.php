<html>
	<head>
		<title>ZOMBIE GODDES BEAUTY</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
.menu {
  float:left;
  width:20%;
  font-family:verdana;
  text-align:center;
}
.menuitem {
  background-color:#ffd41d;
  padding:8px;
  margin-top:7px;
  
}
a{
	color:black;text-decoration:none;

}
a:hover{
	color:#848484;text-decoration:none;



}
ul {

	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
}
li{
	float: right;

}
li a{
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}
li a:hover:not(.active){
	background-color: #111;
}
.active{
	background-color: #ffd41d;
	color: black;
}


.main {
  background-color: #fafafa;
  margin-top: 10px;
  float:left;
  width:80%;
  padding:0 20px;
  font-family:verdana;
}

.img-responsive{
	display:block;
	max-width:100%;
	height:auto
}

input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    size: 50;
    box-sizing: border-box;
}

textarea{
    width: 50%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}

input[type=submit] {

    width: 10%;
    background-color: white;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: 2px solid #008CBA;
    border-radius: 4px;
    cursor: pointer;
}
input[type=reset] {

    width: 10%;
    background-color: white;
    color: black;
    padding: 14px 20px;
    margin: 8px 20;
    border: 2px solid #ff8080;
    border-radius: 4px;
    cursor: pointer;

}

input[type=submit]:hover {
    background-color: #008CBA;
    color: white;
}
input[type=reset]:hover {
    background-color: #ff8080;
    color: white;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>
	</head>
	<body>
		<div class="main">

			<font face="verdana">


					<h3 style="text-align: justify;">Selamat !!!</h3>
					<p dir="ltr"><span>Pesanan anda telah kami proses </span><span></span></p>

						Nama            : <?php echo $_POST["nama"]; ?><br>
						Alamat E-mail   : <?php echo $_POST["mail"]; ?><br>
						Nomor Handphone : <?php echo $_POST["hp"]; ?><br>
						Jenis Produk    : <?php echo $_POST["tipe"]; ?><br>
						Jumlah Produk   : <?php echo $_POST["jumlah"]; ?><br>
						Alamat Penerima : <?php echo $_POST["alamat"]; ?>

				  </form>

				
				
			</font>
				

			<br><br>


		</div>


	
		
	</body>
<html>