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

<body style="background-image: url('images/Blur-Wallpapers-HD.jpg');">
<br>
<div class="container-fluid">
<h1 class="text-center" style="color: #293746; font-size: 4em; font-family: ">
  Co-op City Store
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


    <hr class="border border-danger border-1 opacity-50">
    

    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 " >
       <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
         <div class="card-body">
            <a href="Store/goodsadding.php">
                <img src="images\mbag.png" style="width: 50px;" alt="Image" class="card-img-top">
                <!-- <i class="fa fa-solid fa-money-bill-1-wave"></i> -->
                <h5 class="card-title" >Goods Adding For WareHouse 16A (IN)</h5>
                <p class="card-text"></p>
            </a>
         </div>
    </div>
</div>
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
    .zoom-button {
        transition: transform 0.3s ease-in-out;
    }

    .zoom-button:hover {
        transform: scale(1.2);
    }
</style>

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


<br>
<br>
      


<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
  
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                   <a href="Store/goodsendbrn.php">
                    <img src="images/order.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Goods sending to branches  14C (OUT)</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
       
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
       
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="store/stationery 14c.php">
                     <img src="./images/order2.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">stationery 14c</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="store/mainstockview.php">
                <img src="./images/order.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Stock Update and Live stock F15.</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
       
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        
       <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="Store/westage.php">
                   <img src="./images/dustbin.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Wastage Stock  F17</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        
       <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="Store/cashsale9A.php">
                  <img src="./images/purce.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Cash sale 9A</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="./images/stock1.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Cash Sales 9A (Report 9A selling)</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

       

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="Store/Return.php">
                <img src="./images/prde3.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Return to company F19</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="gdhdjjdk.php">
                <img src="images/stock.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Changing with Packert section and Store F18</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="Store/mainstockview.php">
                <img src="images/stock.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title"> pending  </h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="Store/westage.php">
                   <img src="./images/dustbin.png" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">9C Report(14c stock out Report)</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card" style="border-color: blue; border-width: 2px; background-image: url('images/back ground.jpeg'); background-size: cover; background-repeat: no-repeat;">
                <div class="card-body">
                <a href="Store/addnew.php">
                  <img src="./images/purce.jpeg" style="width: 40px;" alt="Image" class="card-img-top">
                    <h5 class="card-title">Bar Code Enter</h5>
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