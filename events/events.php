<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            min-width: 100%;
            min-height: 100%;
            border-radius: 0 0 0 0;
            display: inline-flex;
            flex-direction: row;
            align-content: center;
            align-items: center;
            padding-top: 50px;
            padding-left: 40px;
        }
        .row{
            padding-left: 40px;
        }
        
        a{
    text-decoration: none;
    
    color: #030303;
    border-color: #e8e8e8;
    transition-duration: .2s;
    border-style: none;
    
    font-size: 32px;
    font-weight: 400;
    line-height: 38px;
    letter-spacing: .5px;

        }
    #inner-block{
        font-family: playfair display,Sans-serif;
        font-size: 14px;
        font-weight: 500;
        font-style: italic;
        line-height: 2.8em;
        letter-spacing: .3px;
        border-color: #e8e8e8;
        border-style: none;
        padding: 0;
        
        }
        p{
            /* display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px; */
            color: #7b7b7b;
        }
        button{
            color: white;
            background-color: black;
            height: 35px;
            width: 150px;
            align-items: center;
            font-size: 14px;
            font-weight: bold;
            
        }
        button:hover{
            background-color: wheat;
            color: black;
            border: 1px solid wheat;
            
        }
        img{
            width:20%;
            height:20%;
            max-width: 270px;
            
        
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="1.png" alt="">
        <div class="row">
            <a href="#">Workshop on</a>
            <div id="inner-block"><span>October 23, 2022</span></div>
            <p>Workshop On CyberSecurity A workshop geared towards making us more… Read more</p>
            <button>Read More</button>
        </div>
    </div>
    <div class="container">
        <img src="1.png" alt="">
        <div class="row">
            <a href="#">Workshop on</a>
            <div id="inner-block"><span>October 23, 2022</span></div>
            <p>Workshop On CyberSecurity A workshop geared towards making us more… Read more</p>
            <button>Read More</button>
        </div>
    </div>
</body>
</html>