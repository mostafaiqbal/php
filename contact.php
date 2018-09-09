<?

    // Created by Mostafa Iqbal (github.com/mostafaiqbal)
    //Present to You by MiQ iNNOV@TiON (github.com/miqinnovation)
    //This codes are free to use
    
    $error = "";
    $successMessage = "";
    
    if($_POST) {

        if (!$_POST["email"]) {

            $error.= "Email address is required <br/>";

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
    <div class = "container" > 
        
        <h1>Contact Us </h1>

        <div id="error" role="alert" > </div>

        <form method="post">
        <fieldset class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            <small class="text-muted">We'll never share your email with anyone else.</small>
        </fieldset>
        <fieldset class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" >
        </fieldset>
        <fieldset class="form-group">
            <label for="exampleTextarea">What would you like to ask us?</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </fieldset>
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript"> 

        $("form").submit(function (e) {
            
            e.preventDefault();

            let error = "";

            if ($("#subject").val == "") {
                error += "<p> The subject field is required";
            };
    
        });



    </body>

    </html>