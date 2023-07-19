
<div class="tong">
    
        <div class="tongdb">
            <div class="bang">
            <h2>Đăng kí</h2>
            <form action="index.php?act=dangky" method="post">
                <div class="font">
                    <p>Họ và tên</p>
                    <input class="font1" type="text" name="name" id="" placeholder=" Mời bạn nhập họ và tên"><br>
                    <p>Email</p>
                    <input class="font1" type="text" name="email" id="" placeholder=" Mời bạn nhập Email"><br>
                    <p>Tên đăng nhập</p>
                    <input class="font1" type="text" name="user" id="" placeholder=" Mời bạn nhập tên đăng nhập"><br>
                    <p>Password</p>
                    <input class="font2" type="text" name="pass" id="" placeholder=" Mời bạn nhập Password">
                </div>
                <input class="font3" type="submit" value="Đăng Ký" name="dangky" id="">
           
            </form>
            </div>
        </div>
    </div>

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
    </style>