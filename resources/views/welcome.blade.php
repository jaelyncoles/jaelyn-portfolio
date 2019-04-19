<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis">
        <link href="https://fonts.googleapis.com/css?family=Italianno|Julius+Sans+One|Open+Sans|Oregano|Satisfy|Staatliches|Voltaire" rel="stylesheet">
        
        <style>
        #jumbo {
            height:100vh;
            background-image:url("/img/IMG_4840 copy.JPG");
             background-size:cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            color:black;
            font-family: 'Open Sans', sans-serif;
            
        }
        #words {
            text-align:center;
        }
        #byline {
            font-family: 'Open Sans', sans-serif;
            color: black;
            font-size:50px;
	        -webkit-text-stroke: 2px white;
        }
        #name {
            font-family: 'Open Sans', sans-serif;
            color: black;
	        font-size: 155px;
	        -webkit-text-stroke: 2px white;   
        }
        #img-div {
            position:relative;
            padding-top:0px;
            z-index:0;
        }
        #image {
            display:block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom:-50px;
            border-style:solid;
            border-radius:50%;
            border-color:white;
            border-width:10px;
            max-width:100% ;
            height:auto;
        }
        #app {
    margin-top:300px;
            background-color:white;
        }
        #nav {
            opacity: 100%;
        }
        #blog{
            margin-top: 200px;
        }

        #about{
            width: 100%;
            

        #blogJumbo{
            background-color:#D2BFAB;
        }

        #text{
            padding-top:100px;
        }
        </style>

    </head>

    <body>
        <div id="jumbo"class="jumbotron jumbotron-fluid">
            <div id="nav">
                <b-nav >
                    <b-nav-item><a href="#about" style="color:black">About | </a></b-nav-item>
                    <b-nav-item><a href="#blog" style="color:black">Blog | </a> </b-nav-item>
                    <b-nav-item><a href="#portfolio" style="color:black">Portfolio | </a> </b-nav-item>
                    <b-nav-item><a href="#contact" style="color:black">Contact | </a> </b-nav-item>
                    <b-nav-item><a href="#resume" style="color:black">Resume | </a> </b-nav-item>
                </b-nav>
            </div>
            <div id="words" class="container">
                <h1 id="name">Jaelyn Coles</h1>
                <h2 id="byline">Full-Stack Web Developer</h2>
            </div>
            <div id="image-div">
                <img id="image" src="/img/IMG_0632 copy.jpg" height=10% width=30%/>
            </div>
             
        </div>

        <div id="app">
            <div id="about">
                <div class="container">
                    <div class="row">
                         <div id="text" class="col">
                             <h1> A little bit About Me... </h1> 
                                <p>I'm Jaelyn and I'm a full stack developer with a special interest in Digital art and design. I have always considered myself an artist without the ability to draw,
                                 so I enjoy making my ideas come to life through programming. I am currently looking for full-time employment,
                                 am very excited to Join a team where I can contribute, learn and grow. 
                             </p>
                            <h1 style="color:white">this is space to make the div longer. ive tried everything and im super annoyed so this is going to have to work.  </h1>
                            
                            <h1 style="color:white">this is space to make the div longer. ive tried everything and im super annoyed so this is going to have to work.  </h1>
                            <h1 style="color:white">this is space to make the div longer. ive tried everything and im super annoyed so this is going to have to work.  </h1>
                            
                             </div>
                        <div class="col">
                            <about-component></about-component>

                        </div>
                    </div>
                </div>
            </div>
     <div id="blogJumbo"class="jumbotron jumbotron-fluid">
    <div id=blog>
              
            <blog-component></blog-component>
            </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
