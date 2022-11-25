<?php
  
  if (is_null($_POST["feedback"])) {
    header("Location: https://postcards.alyxmp4.ml"); // for that mfs who think that they can just enter example.com/thanks.php to crush website ahahhaa not in my site
    die();
  }
  
  $path = "./data/feedback.json"; // enter path for file you want to keep feedbacks in
  
  $data = [
    "ip" => $_SERVER['REMOTE_ADDR'], // get IP address of that person, huh, if u need actually, don't forget to warn person ant it btw
    "user-agent" => $_SERVER['HTTP_USER_AGENT'], // the same way with user agent, just why not
    "text" => $_POST["feedback"] // and ofc text of feedback
  ];
  
  $current_data = file_get_contents($path); // read file of feedbacks
  $array_data = json_decode($current_data, true); // decode all data to make php get wth is it gonna do
  $array_data[] = $data; // you know what
	$final_data = json_encode($array_data, JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT); // print all data to json format and write it prettier, yk what, prettier <3
  file_put_contents($path, $final_data) // write ur json file for sure yeesss
?>

<!doctype html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THANKS FOR FEEDBACK!!</title>
  </head>
  
  <body class="justify-content-center">
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap');
        
      body {
        font-family: 'JetBrains Mono', monospace;
      }
    </style>
    
    <div class="container h-100 p-5 text-bg-dark border text-center">
      <h2>БЛАГОДАРЮ ЗА ФИДБЭК!!</h2>
      <p>Благодарю вас за обратную связь и поддержку. Это правда помогает мне развиваться в этом, хоть это и лишь хобби, спасибо, ваше обращение было отправлено  разработчику :)</p>
      <p style="font-size: 12px;">* О соображении безопасности: все ваши обращения, обратные связи будут храниться в нашей базе данных с вашим IP адресом, User-Agent и другими данными. Они безопасно хранятся у нас на серверах и защищены дополнительно через Cloudflare</p>
    </div>
  </body>
</html>