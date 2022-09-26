<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
    <link rel="stylesheet" href="Assets\css\style.css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <script src="bootstrap\js\bootstrap.js"></script>
    <style>
        .container{
            border:1px dashed blue;
        }
        #links{
           
            
            padding:5px;
           text-decoration:none;
           color: black;
           text-overflow: ellipsis;
           font-weight:600;
           text-transform: uppercase;
           
        }
        #links:hover{
                    color:darkblue;
                    font-display:initial ;
                    border: 2px dashed darkblue;
        }

        #navbar{
            margin-top:3%;
        }
        #logo{margin-top:3%;}
         
    </style>
</head>
<body>
    <div class="container-fluid">
    <div class="row" style="border-bottom:1px solid yellow;">
       <div class="col-lg-6" >
       <div class="container"id="logo">
           <img src="#" alt="logo aayega" srcset="">
        
       </div>
       </div>
       <div class="col-lg-6 " id="navbar" >
      
       <a href="#"  id="links">Menu</a>
       <a href="#" id="links">Login/Sign-up</a>
       <a href="#" id="links" >Contact-us</a>
       <a href="#"  id="links">About-us</a>
       <a href="#"  id="links">Feedback/Raise query</a>
       </div>    
    </div>
    </div>
    <div class="container" style="height:300px; margin-top:30px;">
        <div  class="row">
 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus ipsa quae aut obcaecati, praesentium quod at porro officia unde nisi, rerum laborum ex. Vel distinctio magnam fuga! Amet, unde earum.</p>
        </div>
    </div><hr style="border:1px solid yellow;" >
    <div class="container">
        <div class="row">
    <div class="col-lg-3" style="border: 1px dashed orange">
    1st col
    <img src="" alt="images">
    </div>
    <div class="col-lg-3" style="border: 1px dashed orange">
    2nd col
    <img src="" alt="images">
    </div>
    <div class="col-lg-3" style="border: 1px dashed orange">
    3rd col
    <img src="" alt="images">
    </div>
    <div class="col-lg-3" style="border: 1px dashed orange">
    4th col
    <img src="" alt="images">
    </div>
    <!-- Gallery -->
        <div class="container">
            <div class="row">
                <h3>Gallery</h3>
                <div class="col-lg-4">
                    photo-1
                </div>
                <div class="col-lg-4">
                photo-2
                </div>
                <div class="col-lg-4">
                photo-3
                </div>
       
            </div>
        </div>

    <!-- Gallery end -->
    <div class="col-lg-6" style="border: 1px dashed maroon">
        <img src="#" alt="people image with phone">
    </div>
    <div class="col-lg-6" style="border: 1px dashed maroon">
           <h3>Get in touch</h3>
            <div class="row">
                <form action="#" class="form-control" method="post"></form>
                <div class="col-lg-5">
                    <label for="name" class="form-label">Your name:</label></div>
                <div class="col-lg-5">
                    <input type="text" class="form-control" name="c_name">
                </div> <hr>
                <div class="col-lg-5">
                    <label for="mobile" class="form-label">Your mobile:</label></div>
                <div class="col-lg-5">
                    <input type="number" class="form-control" name="c_num">
                </div> <hr>
                <div class="col-lg-5">
                    <label for="email" class="form-label">Your email:</label></div>
                <div class="col-lg-5">
                    <input type="email" class="form-control" name="c_email">
                </div> 
                <hr>
                <div class="col-lg-5">
                    <label for="query" class="form-label">Raise query:</label></div>
                <div class="col-lg-5">
                    <input type="text" class="form-control" name="c_text">
                </div><hr>
                <div class="container"><input style="width: 100%;" type="submit"  class="btn btn-outline-success"> </div>
                    
            </div>
            <br>
      </div>


    </div>
    </div>
<!-- Technology stack -->
<div class="container">
    <div class="row">
        <h6>Front-end</h6>
        <div class="col-lg-3">HTML-5</div>
        <div class="col-lg-3">CSS-3</div>
        <div class="col-lg-3">JavaScript</div>
        <div class="col-lg-3">ES-6</div>
        <div class="col-lg-3">React JS</div>
        <div class="col-lg-3">JQuery</div>
        <h6>Backend</h6>
        <div class="col-lg-3">Laravel</div>
        <div class="col-lg-3">PHP</div>
        <div class="col-lg-3">Google Developer Console</div>
        <h6>Hosting</h6>
        <div class="col-lg-3">Heroku cloud</div>
    </div>
</div>
<!-- Technology end -->
    <br>
    <div style="border:1px dashed brown;height:110px" class="footer">
    <div class="container" style="border:0px">
    <br>
        <div class="row">
            <div class="col-lg-6">
        <h5>Design, develop and manage by: <a id="links" href="#">A1 Developers</a> </h5>
    </div> 
        <div class="col-lg-6">
            <img src="" alt="Logo">
        </div>
        </div>
</div>
    </div>
</body>
</html>