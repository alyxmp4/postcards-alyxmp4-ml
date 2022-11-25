<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALYX WEBSITE | POSTCARDS</title>
  </head>
  <body class="justify-content-center" style="backround-color: #ffd8e4;">
    
      <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap');

        body {
          font-family: 'JetBrains Mono', monospace;
        }
        
        .shadow-drop-center {
        	-webkit-animation: shadow-drop-center 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        	        animation: shadow-drop-center 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }
        
        @-webkit-keyframes shadow-drop-center {
          0% {
            -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
                    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
          }
          100% {
            -webkit-box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
                    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
          }
        }
        @keyframes shadow-drop-center {
          0% {
            -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
                    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
          }
          100% {
            -webkit-box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
                    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
          }
        }

        
      </style>
    
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">Поиск открытки</span>
      </a>
    </header>
    
    <div class="card justify-content-center align-content-center text-center shadow-drop-center" id="mycard" style="width: 18rem; text-align: center; margin: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); box-sizing: content-box; backround-color: #ffd8e4;">
      
      <div class="card-header" style="backround-color: #fd5260;">
        <h2><b>Добро пожаловать</b></h2>
      </div>
      
      <form action="postcard.php" method="post">
        <div class="card-body" id="form">
          <label for="codeInput" class="form-label" style="margin: top;"> Код открытки указан на обратной стороне <p style="color: #767676; font-size: 12px;"> *обязательно</p></label>
          <input class="form-control" id="codeInput" name="code" required="true">
          <div id="codeInputHelp" class="form-text">Код открытки был записан на обратной стороне открытки вместе с ссылкой на вебсайт, введите его</div>
        </div>
        <button type="submit" class="btn btn-outline-secondary" style="margin-bottom: 20px; backround-color: #31111d;"><b>Поиск</b> <i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>
    
    <script src="https://kit.fontawesome.com/4dd5db0716.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>