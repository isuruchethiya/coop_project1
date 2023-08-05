<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<style>
    @keyframes run-animation {
        0% { left: 0; }
        100% { left: calc(100% - 100px); }
    }

    .running-boy {
        position: absolute;
        top: 0;
        left: 0;
        width: 200px;
        height: 200px;
        background-image: url('images/icons/boy-running.gif');
        animation: run-animation 5s linear forwards;
    }
    
    .running-boy.hide {
        display: none;
    }
</style>
<script>
    var runningBoy = document.querySelector('.running-boy');
    runningBoy.addEventListener('animationend', function() {
        runningBoy.classList.add('hide');
    });
</script>
<style>
    .card {
        position: relative;
        overflow: hidden;
    }

    .card:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, transparent, white);
        transition: left 0.3s ease-in-out;
    }

    .card:hover:before {
        left: 100%;
    }
</style>
<style>
    .zoom-button {
        transition: transform 0.3s ease-in-out;
    }

    .zoom-button:hover {
        transform: scale(1.2);
    }
</style>

<body style="background-image: url('images/Blur-Wallpapers-HD.jpg');">
<br>
<div class="container-fluid">
<h1 class="text-center" style="color: #293746; font-size: 4em; font-family: ">
  Co-op City 
</h1>
</div>
</div>
<div class="running-boy"></div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="col-2 btn btn-primary md-2 zoom-button" type="button">
        Go Home
    </button>
</div>

    
</div>
<br>
<br>

    <div class="row">
      <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
      <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
         <div class="card-body">
            <a href="grosery/cashesale.php">
                <img src="./images/mbag.png" style="width: 50px;" alt="Image" class="card-img-top">
                <!-- <i class="fa fa-solid fa-money-bill-1-wave"></i> -->
                <h5 class="card-title" >Cash Sales-F 14B</h5>
                <p class="card-text"></p>
            </a>
         </div>
    </div>
</div>


        <!-- Add more cards here -->

        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                  <a href="grosery/grmf18.php">
                    <div class="image-part">
                    <img src="./images/stock.png" style="width: 50px;" alt="Image" class="card-img-top">
                    </div>
                    <div class="text-part">
                        <h5 class="card-title">Goods Reciveing from branches F 18 (IN)</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                   <a href="grosery/gsobf18.php">
                    <img src="./images/order.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Goods sending to branches  F18 (OUT)</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/red-up-arrow.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Price Increase  F17</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                   <img src="./images/redLow.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Price Dicrease  F17</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                  <img src="./images/stamp.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Muddara sales</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="grosery/grf16b.php">
                     <img src="./images/order2.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Good recieving F16 B</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/money.jpeg" style="width: 50px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Staff/Bank voucher</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/order.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Goods Received note-derect from supplire F16 B.</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="grosery/westf17.php">
                   <img src="./images/dustbin.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Wastage Stock  F17</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                  <img src="./images/purce.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Goods Returns to supplier F19 (OUT)</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                    <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                  <img src="./images/maneger.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Membership Managment</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                   <img src="./images/gas.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Good Receved Note-Gas purchaing F 16 B</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                    <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/order.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Stock card summery account year wise</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                    <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/order2.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Stock card - details report-Selected period</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/fuel.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Fuel Purchasing - Inventory Management E 16 B</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                    <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/money.jpeg" style="width: 50px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Cash Sales - Fuel E 148</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                    <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/stock1.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Goods Received Note - By Petty Cash (F25) F16B</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                  <img src="./images/cash.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Credit Sales</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                    <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="grosery/PUOF23.PHP">
                <img src="./images/prde3.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Purchase Order F23</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                    <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/sale.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Sales - Re Sales F148</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>


    </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>