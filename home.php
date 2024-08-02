<html>
    <body>
        <style>
            .a{
                width:100%;
                height:40px;
                border-style:solid black;
                border-color:black;
            }
            .b{
                background-image:url('c.jpeg');
                background-size:100% 100%;
                width:40px;
                height:35px;
                margin-left:10px;
                border-radius:50%;
              
            }
            .c{
                margin-left:65px;
                margin-top:20px;
                font-weight:bold;
            }
            .img{
                position:absolute;
                background-image:url('food.jpeg');
                background-size:100% 100%;
                width:100%;
                height:90%;
            }
            .d{
                margin-top:17%;
                font-size:70px;
                color:purple;
                font-weight:bold;
            }
            button{
                background-color:yellow;
                color:black; height:40px; width:200px; border-radius:15px; font-size:20px;
            }
            a{ text-decoration:none;}
            a:hover{ box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);}

        </style>
    </body>
    <div class="a">
        <div class=b> <a href=home.php class=c>Home</a><a href=menu.php class=c>Recipes</a></div>
        </div>
    <div class=img><center><p class=d>RECIPES  BOOK</p></center>
     <center><a href=menu.php><button>SEARCH RECIPES</button></a></center>
</div>
</html>