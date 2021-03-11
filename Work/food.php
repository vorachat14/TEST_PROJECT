<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop food</title>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#icon').click(function(){
           $('ul').toggleClass('show') 
        });
    });
</script>
<style>
*{
    margin:0;
    padding:0;
    text-decoration:none;
    list-style:none;
}
nav{
    height: 90px;
    width:100%;
    background :#333;
}
nav .logo{
    font-size:35px;
    font-weight:bold;
    color:white;
    padding: 0 100px;
    line-height: 100px;
}
nav ul{
    float:right;
    margin-right: 40px;
}
nav li{
    display: inline-block;
    margin : 0 8px;
    line-height: 80px;
}
nav a{
    color: white;
    font-size:18px;
    text-transform:uppercase;
    border: 1px solid transparent;
    padding: 7px 10px;
    border-radius: 3px;
}
/* a.active,a.t1:hover{
    border:1px solid white;
    transition: 0.5s;
} */
nav #icon{
    color:white;
    font-size:30px;
    line-height:80px;
    float:right;
    margin-right:40px;
    cursor:pointer;
    display:none;
   
}
@media (max-width:1048px){
    label.logo{
        font-size:32px;
        padding-left:120px;
    }
    nav ul{
        margin-right:20px;
    }
    nav a{
        font-size:17px;
    }
}
@media (max-width:909px){
    nav #icon{
        display:block;
    }
    nav ul{
        position:fixed;
        width:100%;
        height:100vh;
        background:#2f3640;
        top:80px;
        left:-100%;
        text-align:center;
        transition:all .5s;
    }
    nav li{
        display:block;
        margin: 50px 0;
        line-height:30px;
    }
    nav a{
        font-size:20px;
    }
    a.active,a:hover{
        border:none;
        color:#3498db;
    }
    nav ul.show{
        left:0;
    }
}
html,body{
    
    background-color:lightgray;
}
.main-content{
    max-width:700px;
    margin:auto;
    text-align: center;   
   padding: 3%;   
}
.box{
    background-color:white;
    padding:20px;
    margin:30px
}
.image{
    width:100%
}

.btndanger{
            color:red;
           font-family:"proxima nova";
           font-weight:40;
           font-size: 24px;
           text-align:center;
           
           padding: 1px 7px;
           -webkit-transition-duration:200ms;
           transition-duration:200ms;
       }
       .btndanger:hover{
           background-color:red;
           color:#fff
       }
     
     
       #notification {
  background-color: #333;
  color: white;
  text-decoration: none;
  border-radius: 2px;
}


#notification .badge {
 
  right: 10px;
  padding: 10px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}

</style>
<nav>
        <label class="logo"  href="food.php">Food Land</label>
        <ul>    
            <li><a class="active" href="food.php" >Home</a></li>
            <li><a class="t1" href="#news">News</a></li>
            <li><a class="t1" href="#contact">Contact</a></li>
            <li><a class="t1" href="#about">About</a></li>
            <li><a class="t1" id="notification" href="status.php">
            <span >STATUS</span>
            <span class="badge">3</span>
            </a></li>
            <li><a class="t1"href="#login" >Login</a></li>
        </ul>
        <label id="icon"> 
            <i class="fa fa-align-justify"></i>
        </label>
    </nav>
</head>
<body>
   
    <div class="main-content">
        <div class="box">
            <img class="imge" src="foddland.png" width="300">
            <h2>ร้านอาหาร I LOVE FOOLD</h2>
            <h2>จำนวนคิว <?php echo(rand(1,5)); ?>/<?php echo(rand(5,20)); ?></h2>
            <button onclick="QAlert()" class="btndanger"  >จองร้านอาหาร</button>
        </div>
        <div class="box">
            <img class="imge" src="ramen.png" width="300">
            <h2>ร้านอาหาร Pasta</h2>
            <h2>จำนวนคิว <?php echo(rand(1,5)); ?>/<?php echo(rand(5,20)); ?></h2>
            <button onclick="QAlert()" class="btndanger"  >จองร้านอาหาร</button>
        </div>
        <div class="box">
            <img class="imge" src="ice.jpg" width="300" >
            <h2>ร้าน ICE CREAM</h2>
            <h2>จำนวนคิว <?php echo(rand(1,5)); ?>/<?php echo(rand(5,20)); ?></h2>
            <button onclick="QAlert()" class="btndanger"  >จองร้านอาหาร</button>
        </div>
        <div class="box">
            <img class="imge" src="cake.jpg" width="300">
            <h2>ขนม CAKE</h2>
            <h2>จำนวนคิว <?php echo(rand(1,5)); ?>/<?php echo(rand(5,20)); ?></h2>
            <button  onclick="QAlert()" class="btndanger" >จองร้านอาหาร</button>
        </div>
    </div>
    
</body>
</html>
<script>
 function QAlert(){
    Swal.fire({
  title: 'คุณต้องการจองร้านอาหารนี้?',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'ยกเลิก',
  confirmButtonText: 'ตกลง'
}).then((result) => {
 if(result.isConfirmed){
     if(true){
    Swal.fire(
      'คุณได้ทำการจองคิวเรียบร้อย',
      'คุณสามารถตรวจสอบสถานะได้ที่ เมนูSTATUS',
      'success'
    )
     }else{
        Swal.fire(
      'ท่านไม่สามารถจองคิวได้',
      'เนื่องจากท่านได้ทำการจองคิวร้านอื่นไว้แล้ว',
      'warning'
    )
     }
 }
})
 }
</script>