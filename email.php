<?

$emailTo = "i.rashel@outlook.com";
$subject = "Hello from Other Side" ;
$body = "Hi this is me testing php email";
$headers = "From: iqbal@marblecars.co.uk" ;

if (mail($emailTo, $subject, $body, $headers)) {
    echo "Sent Successfully";
} else {
    echo "Failed";
} 

?>



<h1> Send Email </h1> 