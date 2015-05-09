<?php
$name = $_POST['name'];


$to = 'gteastin@msn.com';
$subject = 'New VBS Student ';

$message = "Name: $name\n";
$message .= 'Parent Name: ' . $_POST['pname'] . "\n";
$message .= 'Address: ' . $_POST['address'] . "\n";
$message .= 'Phone: ' . $_POST['phone'] . "\n";
$message .= 'Emergency Phone: ' . $_POST['ephone'] . "\n";
$message .= 'Email: ' . $_POST['email'] . "\n";
$message .= 'Child Name ' . $_POST['cname1'] . "\n";
$message .= 'Child Age: ' . $_POST['age1'] . "\n";
$message .= 'Second Child Name ' . $_POST['cname2'] . "\n";
$message .= 'Second Child Age: ' . $_POST['age2'] . "\n";
$message .= 'Third Child Name ' . $_POST['cname3'] . "\n";
$message .= 'Third Child Age: ' . $_POST['age3'] . "\n";
$message .= 'Fourth Child Name ' . $_POST['cname4'] . "\n";
$message .= 'Fourth Child Age: ' . $_POST['age4'] . "\n";
$message .= 'Fifth Child Name ' . $_POST['cname5'] . "\n";
$message .= 'Fifth Child Age: ' . $_POST['age5'] . "\n";
$message .= 'Sixth Child Name ' . $_POST['cname6'] . "\n";
$message .= 'Sixth Child Age: ' . $_POST['age6'] . "\n";
$message .= 'Special Needs: ' . $_POST['needs'] . "\n";
$message .= 'Pair with Friends: ' . $_POST['friends'] . "\n";
$message .= 'How did you hear?: ' . $_POST['hear_about_VBS'] . "\n";
$message .= 'I would like information: ' . $_POST['information'] . "\n";
$message .= "\n";


$headers =	'From: <' . $_POST['email'] . '> '. $name ."\r\n" .
			'Reply-To: <' . $_POST['email'] . '> '. $name . "\r\n" .
			'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
header('location: http://www.silverlakeunitedmethodist.org/thankyou.php');
?>