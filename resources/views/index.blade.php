<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notice Board</title>
</head>
<style>
    h1{
        font-size: 30px;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
        margin-bottom: 15px;
    }
    table{
        width:100%;
        table-layout: fixed;
    }
    .tbl-header{
        background-color: rgba(255,255,255,0.3);
        border-radius: 10px 10px 0px 0px;
    }
    .tbl-content{
        overflow-x:auto;
        margin-top: 0px;
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 0px 0px 10px 10px;
    }
    th{
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 15px;
        color: #485774
        text-transform: uppercase;
    }
    td{
        padding: 15px;
        text-align: left;
        vertical-align:middle;
        font-weight: 300;
        font-size: 12px;
        color: #485774
        border-bottom: solid 1px rgba(255,255,255,0.1);
    }
    #No{
        width: 200px;
    }


    /* demo styles */

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
    body{
        background: -webkit-linear-gradient(left, #d4d4d4, #9baac5);
        background: linear-gradient(to right, #d4d4d4, #b3bed2);
        font-family: 'Roboto', sans-serif;
    }
    section{
        margin: 20px 350px;
    }
    #btn_submit{
        margin: 0px 350px 0px 350px;
        float:right;
    }
    input{
        background-color: rgba(255,255,255,0.3);
        border: 1px solid rgba(255,255,255,0.3);
        width: 80px;
        height: 30px;
        font-size: 15px;
        border-radius: 30px;
        color: #37435b;
        margin: 10px;
    }


    /* follow me template */
    /* .made-with-love {
        margin-top: 40px;
        padding: 10px;
        clear: left;
        text-align: center;
        font-size: 10px;
        font-family: arial;
        color: #fff;
    }
    .made-with-love i {
        font-style: normal;
        color: #F50057;
        font-size: 14px;
        position: relative;
        top: 2px;
    }
    .made-with-love a {
        color: #fff;
        text-decoration: none;
    }
    .made-with-love a:hover {
        text-decoration: underline;
    } */


    /* for custom scrollbar for webkit browser*/

    /* ::-webkit-scrollbar {
        width: 6px;
    } 
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    } 
    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    } */
</style>
<body>
    @extends('layouts.app')

    @section('content')
    <h1 style="color: #485774; margin: 50px 0px 50px 0px;">Notice</h1>
        <div id="btn_submit">
            <a href="{{route("create")}}"><input type="submit" value="글쓰기"></a>
        </div>
    <section>
        <br><br>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr style="color: #485774">
                <th id="No">No.</th>
                <th id="Title">Title</th>
                <th id="Name">Name</th>
                <th id="Date">Date</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                @csrf
                {{-- @foreach ($contents as $key => $content) --}}
                <tr style="color: #485774">
                    {{-- <td>{{$key+1+($contents->currentPage()-1) *5}}</td>
                    <td><a href="{{route("show", $content->id)}}" class="title_a"> {{$content->title}} </a></td> 
                    <td>{{$content -> name}}</td>
                    <td>{{$content -> updated_at}}</td> --}}
                    <td id="No">1</td>
                    <td id="Title">1</td>
                    <td id="Name">1</td>
                    <td id="Date">1</td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
          </table>
        </div>
      </section>
      
    @endsection
</body>
</html>
<script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
    $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
</script>