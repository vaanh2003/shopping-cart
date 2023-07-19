
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h2{
            margin:0;
        }
        .font>input{
            width:530px;
            height:55px;
        }
        .font{
            margin-top: 25px;
        }
        .tong{
            width: 100%;
        }
        .tongdb{
            width: 630px;
            margin: 0 auto;
        }
        .font1{
            margin-bottom: 35px;
            border: none;
            background-color: #ededed;
        }
        .font1loi{
            margin-bottom: 35px;
            border:  2.5px solid red;
            border-radius: 5px;
            background-color: while;
        }
        .font2{
            margin-bottom:25px;
            border: none;
            background-color: #ededed;
        }
        .font3{
            width: 100px;
            height: 50px;
            border: none;
            background-color: black;
            color: white;
            font-weight: 600;
        }
        .saidangnhap{
        font-size: 13px;
        color: red;         
        }
        .dangnhap-dangky{
            display: flex;
            align-items: center;
        }
        .dangnhap-dangky a{
            margin: 0 0 0 20px;
        }
        

        
    </style>
</head>
<body>
    <div class="tong">
        <div class="tongdb">
            <div class="bang">
            <h2>Login</h2>
            <form action="index.php?act=login" method="post">
                <div class="font">
                    <p>Email</p>
                    <?php
                        if($chuacotk != ""){
                            echo '<p class="saidangnhap">'.$chuacotk.'</p>';
                        }
                    ?>
                    <?php
                    
                    echo '<input class="'.$fontloi.'" type="text" name="user" value="'.$gtuser.'" ><br>';
    
                    ?>
                    <p>Password</p>
                    <?php
                        if($chuacomk != ""){
                            echo '<p class="saidangnhap">'.$chuacomk.'</p>';
                        }
                    ?>
                    <input class="<?php 
                        echo ''.$fontloihai.'';
                       ?>" type="text" name="pass" id="">
                </div>
                <div class="dangnhap-dangky">
                    <input class="font3" type="submit" value="LOGIN" name="login" id="">
                    <a href="index.php?act=dangky"><p>Đăng ký</p></a>
                </div>
                
            </form>
            </div>
        </div>
    </div>