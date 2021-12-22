<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign up form</title>
  <link rel="stylesheet" href="./css/style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
  body {
    font-family: 'Microsoft JhengHei', 'Arial Narrow', Arial, sans-serif;
  }

  .birthday {
    border: 1px solid lightgrey;
    border-radius: 4px;
    line-height: 2;
    width: 100%;
  }

  .bir {
    margin-bottom: -20px;
  }
/* 
  .box {
    border-radius: 10px;
    margin-bottom: 10px;
    padding: 15px;
    box-shadow: 0px 20px 20px rgba(0, 0, 0, .25);
  } */


  .sign-up {
    position: relative;
    /* margin: 50px auto; */
    /* max-width: 600px; */
    padding: 33px 25px 29px;
    /* background: white; */
    border-bottom: 1px solid #c4c4c4;
    border-radius: 5px;
    /* -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25); */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
    /* font-size: 20px; */
  }

  .sign-up-title:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 8px;
    background: #c4e17f;
    border-radius: 5px 5px 0 0;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  }
</style>


<body>

  <div class="container sign-up my-5 " style="max-width: 600px;">

    <div class="text-center">
      <h3 class="sign-up-title">註冊</h3>

    </div>
        <hr>
    <form>
      <div class="form-row">
        <div class="col-6">
          <input type="text" class="form-control" placeholder="姓氏">
        </div>
        <div class="col-6 mb-2">
          <input type="text" class="form-control" placeholder="名字">
        </div>

        <div class="col-12 mb-2">
          <input type="email" class="form-control" placeholder="手機號碼或電子郵件">
        </div>

        <div class="col-12 mb-2">
          <input type="password" class="form-control" placeholder="設定密碼">
        </div>
        
          <div class="col-4 ">
          <label for="inputState" class="bir">出生日期</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <?php

            $year= date('Y') -1;
            $k=1905;
            for($i=$k;$i<=$year;$i++){
              // echo $i;
              echo "<option>$i</option>";
           }
          
           ?>

          </select>
        </div>

     
        <div class="col-4 ">
          <label for="inputState" class="bir "><br></label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <?php
            $month = date('n');
            for($i=1;$i<=$month;$i++){
              // echo $i;
              echo "<option>$i 月</option>";
           }
          
           ?>
           </select>
        </div>

        <div class="col-4">
          <label for="inputState" class="bir"><br></label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>

            <?php
            $date= 31;

            for($i=1;$i<=$date;$i++){
              // echo $i;
              echo "<option>$i</option>";
           }
          
           ?>
            
          </select>
        </div>


        <div class="col-12">
          <label for="inputState" class="bir mt-2">性別</label>
        </div>

        <div class="col-3 ml-4 custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline1">男</label>
        </div>
        <div class="col-3 custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline2">女</label>
        </div>
        <div class="col-3 custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline3" name="customRadioInline" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline3">其他</label>
        </div>
      </div>

      <div class="text-center mt-4">
        <button type="button" class="px-5 btn btn-success">註冊</button>
      </div>




  </div>
  </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
    crossorigin="anonymous"></script>
</body>

</html>