<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Status</title>
    <style>
    /* a{
        text-decoration:inherit;
    }
        .container{
            width:100%;
        }
        .progressbar{
            counter-reset:step;
        }
        .progressbar li{
            list-style-type:none;
            float: left;
            width: 33.33%;
            position: relative;
            text-align: center;
        }
        .progressbar li:before{
            content:counter(step);
            counter-increment:step;
            width: 30px;
            height: 30px;
            line-height: 30px;
            border: 1px solid #ddd;
            display: block;
            text-align:center;
            margin: 0 auto 10px auto;
            border-radius:50%;
            background-color:white;
        }
        .progressbar li:after{
            content:'';
            position: absolute;
            width: 100%;
            height:1px;
            background-color:#ddd;
            top:15px;
            left:-50%;
            z-index: -1;
        }
        .progressbar li:first-child:after{
            content:none;
        }
        .progressbar li.active{
            color:green;
        }
        .progressbar li.active:before{
            border-color:green;
        }
        .progressbar li.active + li:after{
            background-color:green;
        }
        .progressbar li.active2{
            color:green;
        }
        .progressbar li.active2:before{
            border-color:green;
        } */
       




       .btndanger{
            color:red;
           font-family:"proxima nova";
           font-weight:40;
           font-size: 24px;
           text-align:center;
           border:solid 2px red;
           border-radius:50px;
           padding: 1px 7px;
           -webkit-transition-duration:200ms;
           transition-duration:200ms;
           text-decoration:none;
       }
       .btndanger:hover{
           background-color:red;
           color:#fff
       }
       .btndanger{
            margin: 0;
            position: absolute;
            top: 20%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
}
    h2{
        text-align:center;
    }
    /* h2{
        font-size:2.0rem;
        margin:15px 0;
        color: #333;
        text-align:center;
        position: absolute;
        left: 750px;
        top: 150px;
    } */
    </style>
</head>
<body>
    <!-- <div class="container"> 
        <ul class="progressbar">
            <li class="active">START </li>
            <li class="active2">WAIT </li>
            <li class="active3">SUCCESS </li>
        </ul>
    </div> -->
    <h2>STATUS</h2>
    <table class="w3-table-all">
    <tr>
      <th> Name</th>
      <th>Status</th>
      <th class="w3-center">Queue number</th>
    </tr>
    <tr>
      <td>ร้านอาหาร I LOVE FOOLD</td>
      <td style="color:green">Wait</td>
      <td class="w3-center"><?php echo(rand(5,10));?></td>
    </tr>
  </table>









    <div>
    <!-- <div class="text" >
          <h2 >จำนวนคิวที่เหลือ <?php echo(rand(1,5)); ?> คิว</h2>
    </div> -->
    <a  href="food.php"class="btndanger">BACK</a>
    </div>
</body>
</html>