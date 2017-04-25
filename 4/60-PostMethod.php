

<html>
    <head>
        <title>60-PostMethod</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Main.css">
 


    </head>
    <body>
        <div id="Main">
            
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
    echo $key ."    ". $value ."<br/>";
    }
}

?>
<form action="<?= $_SERVER['PHP_SELF'];?>" method="POST" >
    <div class="form-group">
              <label for="name">name</label>
              <input type="text"
                class="form-control" name="name"   aria-describedby="helpname" placeholder="name">
              <small id="helpname" class="form-text text-muted">Help text</small>
     </div>
 <div class="form-group">
              <label for="email">email</label>
              <input type="email"
                class="form-control" name="email"   aria-describedby="helpemail" placeholder="email">
              <small id="helpemail" class="form-text text-muted">Help text</small>
     </div>
<div class="form-group">
              <label for="Phone">Phone</label>
              <input type="text"
                class="form-control" name="Phone"   aria-describedby="helpPhone" placeholder="Phone">
              <small id="helpPhone" class="form-text text-muted">Help text</small>
     </div>
       <button type="submit"   class="btn btn-primary">Send</button>
</form>

 </div>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../Main.js"></script>


       
    </body>
</html>