<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&family=Noto+Sans+KR&display=swap" rel="stylesheet">

    <title>LOGIN</title>
  
    <style>


        body{
            background-color:#f1f8fd;

        }
        table{
            text-align:center;
        }

        #wrap{
        
        display: flex;
       
        justify-content: center;
        align-items:center;
        min-height: 90vh;
        }
      
        p,label,button{
            font-family: 'Jua', sans-serif;
            
        }
        #wraping {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 90vh;
            }
            #foo{
                text-align: center;
            }

    </style>
	
</head>

<body>
    
    
    <div id="wraping">
    <form action="loginCheck.php" method="post" enctype="multipart/form-data">
    <table widthF="200" height="70">
        <tr>
            <td colspan="2" style="text-align: right;">
                <div style="display: flex; align-items: center;justify-content:center;">
                    <img src="img/logo.png" style="margin-right: 5px;">
                    <p style="font-family: 'Jua', sans-serif; margin-right: 5px; font-size:29px; color:#1f497d;">성결인</p>
                </div>
            </td>
        </tr>
        <tr>
            <td><label>아이디</label></td>
            <td><input style="width:130px;height:30;" type="text" name="id"></td>
        </tr>
        <tr>
            <td><label>비밀번호</label></td> 
            <td><input style="width:130px;height:30;" type="text" name="pw"></td>
        </tr>
    </table>
    <br><br>
    <div id="foo">
    <button type="submit">로그인</button> 
    <button type="button" onclick="location.href='member_create.html'">회원가입</button>
    </div>
</form>
    </div>    
                          
</body>
</html>