<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="checkout.css">

    <title>Wood Art Furniture</title>
</head>

<body>

    <a href="cart.php"><img src="asset/button_back.png" alt="Image" width="100px" style="position: absolute;
    width: 24px;
    height: 24px;
    left: 41px;
    top: 63px;" /></a>

    <h3>Checkout</h3><br><br>
    <h1 class="dev">Payment</h1>
    <h1 style="position: absolute;
    left: 53px;
    top: 210px;
    font-style: normal;
    font-weight: 600;
    font-size: 17px;
    line-height: 20px;

    color: #000000;">Payment method</h1>

    <form method="POST" action="#">
        <div style="position: absolute;
        left: 15%;
        top: 35%;">
            <input type="radio" name="option1" value="Card">              Card <BR><BR><BR>
            <input type="radio" name="option2" id="option2" value="Bank account">              Bank account <BR><BR>
        </div>
    </form>
    <img src="asset/delivery.png" style=" position: absolute;
    width: 315px;
    height: 156px;
    left: 30px;
    top: 250px;
    background: #FFFFFF;
    
    box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.03);
    border-radius: 20px;" alt="...">
    <img src="asset/delivery.png" class="subbackground" alt="...">

    <h1 class="method">Delivery method.</h1>

    <form method="POST" action="paymentNote.php">
        <div class="formya">
            <input type="radio" name="option1" value="Door delivery"> Door delivery <BR><BR><BR>
            <input type="radio" name="option2" id="option2" value="Pickup"> Pickup <BR><BR>
        </div>
        <input class="btn" type="submit" name="done" value="Proceed to payment">
    </form>

    <hr style="position: absolute;
    width: 232px;
    height: 0px;
    left: 84px;
    top: 553px;

    opacity: 0.3;
    border: 0.5px solid #000000;">

    <h1 class="totalname">Total</h1>
    <h1 class="total">Rp. 11.372.000</h1>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>