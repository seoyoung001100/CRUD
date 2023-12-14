<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<style>
     h1{
        font-size: 30px;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
        margin-bottom: 15px;
    }
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
    body{
        background: -webkit-linear-gradient(left, #d4d4d4, #9baac5);
        background: linear-gradient(to right, #d4d4d4, #b3bed2);
        font-family: 'Roboto', sans-serif;
    }
    section, div>h1{
        margin: 50px 350px;
    }
    /*-------------------------------------------------------------------------------*/
    .writing{
        margin: 0 auto;
        width: 1500px;
        height: 800px;
        border-radius: 10px;
        border: 1px solid rgba(255,255,255,0.3);
        /* background-color: black; */
    }
    .writing_header{
        height: 50px;
        background-color: rgba(255,255,255,0.3);
        border-radius: 10px 10px 0px 0px;
    }
    /*-------------------------------------------------------------------------------*/
    .writing_body>input, textarea{
        outline: none;
        background: transparent;
        border: none;
        color: #485774;
    }
    div>hr{
        margin: 0 auto;
        text-align: center;
        width: 1200px;
    }
    .title{
        width: 1500px;
        height: 50px;
        margin: 23px 0px 23px 0px;
        text-align: center;
        font-size: 25px;
    }
    .text{
        font-size: 18px;
    }
    .textarea{
        margin: 15px 143px 0px 143px;
    }
    /*-------------------------------------------------------------------------------*/
    .btn{
        margin: 0 370px;
        width: 1500px;
    }
    .btn_submit1{
        margin: 10px;
        width: 48%;
        float:left;
        text-align: right;
    }
    .btn_submit2{
        margin: 10px;
        width: 48%;
        float:right;
        text-align: left;
    }
    #btn_submit> input{
        background-color: rgba(255,255,255,0.3);
        border: 1px solid rgba(255,255,255,0.3);
        width: 80px;
        height: 30px;
        font-size: 15px;
        border-radius: 30px;
        color: #37435b;
    }
</style>
<body>
    @extends('layouts.app')

    @section('content')
        <div>
            <h1 style="color: #485774">Update</h1>
        </div>
        <div class="writing">
            <div class="writing_header"></div>
            <div class="writing_body">
                <input type="text" class="title" placeholder="제목을 입력해주세요." required><hr> {{-- 데이터 가져와서 수정가능하게 해야함 --}}
                <div class="textarea">
                    <textarea style="resize: none;" name="text" id="text" class="text" cols="125" rows="20" placeholder="내용을 입력해주세요." required></textarea> {{-- 데이터 가져와서 수정가능하게 해야함 --}}
                </div>
            </div>
        </div>
        
        <div class="btn">
            <div id="btn_submit" class="btn_submit1"> 
                <input type="submit" value="수정하기">
            </div>
            <div id="btn_submit" class="btn_submit2">
                <input type="submit" value="삭제하기">
            </div>
        </div>
    @endsection
    
</body>
</html>