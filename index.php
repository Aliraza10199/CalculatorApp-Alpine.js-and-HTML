<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>


<div class="container my-4">



    <div class="calculator  card">

        <input type="text" class="calculator-screen z-depth-1 display" id="display" value="" disabled />

        <div class="calculator-keys">

            <button type="button" class="operator btn btn-info" value="+">+</button>
            <button type="button" class="operator btn btn-info" value="-">-</button>
            <button type="button" class="operator btn btn-info" value="*">*</button>
            <button type="button" class="operator btn btn-info" value="/">/</button>

            <button type="button" value="7" class="btn btn-light waves-effect">7</button>
            <button type="button" value="8" class="btn btn-light waves-effect">8</button>
            <button type="button" value="9" class="btn btn-light waves-effect">9</button>
            <button type="button" class="operator btn btn-info" value="f">f</button>


            <button type="button" value="4" class="btn btn-light waves-effect">4</button>
            <button type="button" value="5" class="btn btn-light waves-effect">5</button>
            <button type="button" value="6" class="btn btn-light waves-effect">6</button>


            <button type="button" value="1" class="btn btn-light waves-effect">1</button>
            <button type="button" value="2" class="btn btn-light waves-effect">2</button>
            <button type="button" value="3" class="btn btn-light waves-effect">3</button>


            <button type="button" value="0" class="btn btn-light waves-effect">0</button>
            <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
            <button type="button" class="all-clear function btn btn-danger btn-sm" value="0">C</button>

            <button type="button" class="equal-sign operator btn btn-danger" value="=">=</button>
        </div>
    </div>
</div>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>


<script type="text/javascript" src="java.js"></script>


</body>
</html>
