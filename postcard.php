<!-- php code here -->

<?php
 $data = file_get_contents("./data/postcards.json"); // get file content to read list of postcards
 $string = json_decode($data, true); // decode all data
 
 if (is_null($string[$_POST["code"]])) {
    http_response_code(404); // set response code to 404, it means that page is not found
    include("err/404.php"); // include out 404 file to show
    die(); // exit website process
 } // check if code is in our data, if not redirect too 404 error page
?>

<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- make website adaptive -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POSTCARDS FOR <?php $_POST["code"] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body class="justify-content-center" style="backround-color: #ffd8e4;">
    
    <style>
      /* styles for page, google what CSS is for additional info to get what tf is ure seeing */
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      
      @viewport {
        width: device-width ;
        zoom: 1.0 ;
      }
      
      @media screen and (max-width: 480px) {
        #feedback {
          margin-top: 25px;
        }
      }
      
      /* i used JetBrains Mono font */
      
      @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap');
        
      body {
        font-family: 'JetBrains Mono', monospace;
      }
      
      /* animations are generated with animista */
  
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
      
      
      body {
        line-height: 23px;
      }
      
      .card1 {
        background-position: center;
        background-repeat: no-repeat;
        height: 12rem;
      }
      
    </style>
    
    <main>
      <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Вам открытка!!</span>
          </a>
        </header>
        
        <div class="p-5 mb-4 bg-light rounded-3 shadow-drop-center">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">
              <?php 
              print($string[$_POST["code"]]["NAME"]) // get name of the postcard owner by their code from our data from postcards.json
              ?>
            </h1>
            <p class="col-md-8 fs-4">
              <?php 
                print($string[$_POST["code"]]["TEXT"]) // get with the same way text dedicated to them
              ?>
            </p>
            
            <div class="rounded-3 p-5 mb-4 text-bg-dark card1"></div>
            <p>* милые GIF фото выше генерируются при каждой загрузке страницы и/или каждый 1о минут :))</p>
            
          </div>
        </div>
    
        <div class="row align-items-md-stretch">
          <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3 shadow-drop-center">
              <h2>Немного о сайте</h2>
              <p>Это идея была придумана мной для практики своих знаний по информатике и просто забавы ради. Может быть скоро залью исходный код сайта на GitHub. Сайт создан для, пооткрытку от представителей SakenTeam открытку с этой ссылкой на обратной стороне :)
                Сайт написан на языке гипертекста PHP и HTML, CSS, JavaScript и использует псевдобазу данных формата JSON, использует CSS библиотеку Bootstrap и все его шаблоны, стили пренадлежат Bootstrap. Использовался шрифт JetBrains Mono.
            </div>
          </div>
          <form action="./thanks.php" method="post" class="col-md-6 shadow-drop-center rounded-3 h-100 p-5 bg-light border" id="feedback">
            <div>
              <div class="h-100 p-5 bg-light rounded-3">
                <h2>Оцените мою маленькую работу :)</h2>
                <label for="feedback" class="form-label">Напишите своё мнение о сайте, какие, думаете, могут быть недостатки? Понравилась ли вам идея? Стоит ли чаще делать такое?<p style="color: #767676; font-size: 12px;"> *необязательно</p></label>
                  <input class="form-control" id="feedback" type="text" name="feedback" required="true">
                  <button class="btn btn-outline-secondary" type="submit" style="margin-top: 16px;">Отправить</button>
                </div>
              </div>
            </form>
        </div>
    
        <footer class="pt-3 mt-4 text-muted border-top">
          &copy; alyxmp4 | 2022
        </footer>
      </div>
    </main>
    
    <script src="https://kit.fontawesome.com/4dd5db0716.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    
    <script>
      $(document).ready(function() {
      	// Initiate gifLoop for set interval
      	var refresh;
      	// Duration count in seconds
      	const duration = 1000 * 10;
      	// Giphy API defaults
      	const giphy = {
      		baseURL: "https://api.giphy.com/v1/gifs/",
      		apiKey: "your giphy code here",
      		tag: "anime+hug",
      		type: "random",
      		rating: "pg-13"
      	};
      	// Target gif-wrap container
      	const $gif_wrap = $(".card1");
      	// Giphy API URL
      	let giphyURL = encodeURI(
      		giphy.baseURL +
      			giphy.type +
      			"?api_key=" +
      			giphy.apiKey +
      			"&tag=" +
      			giphy.tag +
      			"&rating=" +
      			giphy.rating
      	);
      
      	// Call Giphy API and render data
      	var newGif = () => $.getJSON(giphyURL, json => renderGif(json.data));
      
      	// Display Gif in gif wrap container
      	var renderGif = _giphy => {
      		console.log(_giphy);
      		// Set gif as bg image
      		$gif_wrap.css({
      			"background-image": 'url("' + _giphy.images.original.url + '")'
      		});
      
      	};
      
      Call for new gif after duration
      var refreshRate = () => {
        clearInterval(refresh);
        refresh = setInterval(function() {
        newGif();
      }, 10000);
      
      	newGif();
      	
      });

    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>