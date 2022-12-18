<html>
<head>
    <title>IET CALICUT</title>
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="csss/style.css">

</head>
<body style=" background-color:black;"> 
    <header>
    
      <nav>
      
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="http://www.cuiet.info/">IET CALICUT</a></li>
                <li><a href="index.php">HOME</a></li>
                <li><a href="admin/aboutus.php">ABOUT</a></li>
                <li><a href="admin/contactus.php">CONTACT</a></li>
                <li><a href="login.php">ADMIN LOGIN</a></li>
                <li><a href="https://airtable.com/shrd6ToRUOjjgH4bQ">ATTENTENCE</a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header d-flex justify-content-center align-items-center mx-auto" >
        <form method="post" action="result.php">
          
              <h2 class="search">GET YOUR RESULT HERE!</h2>
              <br><br>
           
                <label class="name1">Rollno</label>
                <span class="name2"><input type="text" name="rollno" required class="box1"/></span><br>
           
            
                <label class="standered1">Department</label>
                <span class="standered2"><input type="text" name="std" required class="box2"/></span><br>
            
           
            <span align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT" class="submit"/></span>
            
          
       </form>
      </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
