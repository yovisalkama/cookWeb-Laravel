<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">  
     <title>kalkulator</title>  
     <script src="cal.js" type="text/javascript"></script> 
    <link rel="stylesheet" href="css/calculator.css"> 
    <link rel="stylesheet" href="css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
</head>
<body>

    <!--Bagian Header-->
    <div class="header">
        <img src="images/woman-cook.png" width="35" height="35"> 
        <h1>🍽 Cook With Me 🍽</h1>
        <h4>Mari belajar memesak menu buka puasa :)</h4>
    </div>
    <!--Akhir Header-->

    <!--Bagian Menu-->
    <div class="menu">
        <label>Iftar Ramadhan Meal</label>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Kategori</a>
                <ul class="dropdown">
                    <li><a href="takjil.html">Takjil</a></li>
                    <li><a href="minuman.html">Minuman</a></li>
                </ul>

            </li>
            <li><a href="profil.html">Profil</a></li>
            <li class="active"><a href="calculator.html">Calculator</a></li>
            <li><a href="list.html">List</a></li>
            <li><a href="form.html">Form</a></li>
        </ul>
    </div>  
    
    <div id="container">

      <br>
      <br>
        <h1>CALCULATOR SIMPLE</h1>
        <h3>Dapat digunakan menghitung resep makanan</h3>

      <div class="calculator">
        <div class="display">

          <input id="output" type="text" name="" disabled />

        </div>
        <div id="buttons">

          <div class="row">
            <div class="button" id="clear">CE</div>
            <div class="button" id="backspace">Del</div>
          </div>
          <div class="row">
            <div class="button">^</div>
            <div class="button">%</div>
            <div class="button">+/-</div>
            <div class="button">÷</div>
          </div>
          <div class="row">
            <div class="button number">7</div>
            <div class="button number">8</div>
            <div class="button number">9</div>
            <div class="button">x</div>
          </div>
          <div class="row">
            <div class="button number">4</div>
            <div class="button number">5</div>
            <div class="button number">6</div>
            <div class="button">-</div>
          </div>
          <div class="row">
            <div class="button number">1</div>
            <div class="button number">2</div>
            <div class="button number">3</div>
            <div class="button">+</div>
          </div>
          <div class="row">
            <div class="button" id>.</div>
            <div class="button number" id="zero">0</div>
            <div class="button" id="equals">=</div>
          </div>

        </div>

      </div>
    </div>
  <!-- Calculator JS -->
  <script src="cal.js"></script>
  
</body>
</html>