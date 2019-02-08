<?php


  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $formName = strip_tags(trim($_POST['name']));
    $formEmail = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $formPhone = strip_tags(trim($_POST['phone']));
    $formMsg = strip_tags(trim($_POST['message']));

    $msgNoPhone = $_POST['msg-phone-required'];
    $msgNoBody = $_POST['msg-body-required'];
    $msgServerError = $_POST['msg-internal-error'];
    $msgOK = $_POST['msg-ok'];
    $destEmail = $_POST['msg-dest-email'];
    
    $success = false;
    $returnMessage = "";

    // validate data
    if (empty($formEmail) && empty($formPhone)) {
      $returnMessage = $msgNoPhone;
    } else {
      if (empty($formMsg)) {
        $returnMessage = $msgNoBody;
      }  else {
        // wszystko ok
        $success = true;
      }
    }

    if ($success) {

      // form validation passed, continue job
      // build email
      $email = "od: $formName\n";
      $email .= "email: $formEmail\n";
      $email .= "tel: $formPhone\n\n";
      $email .= $formMsg;

      // headers
      $headers = "From: $formName <$formEmail>";

      // send email
      if (mail($destEmail, "wiadomość ze strony AQUA od: $formName", $email, $headers)) {
        
        $returnMessage = $msgOK;
      } else {
        $success = false;
        $returnMessage = $msgServerError;
      }
    }
    
    echo json_encode(array("success" => $success, "msg" => $returnMessage));
    exit;
  }
  else {
    echo array("success" => false, "msg" => 'Forbidden');
  }

