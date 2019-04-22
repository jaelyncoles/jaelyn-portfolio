<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis">
        <link href="https://fonts.googleapis.com/css?family=Italianno|Julius+Sans+One|Open+Sans|Oregano|Satisfy|Staatliches|Voltaire" rel="stylesheet">
        <link rel="stylesheet" href="animate.min.css">
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
             margin-top:260px;
                    }
        #nav {
            opacity: 100%;
        }
        #blog{
            margin-top:;
        }
        #about{
            width: 100%;
        }
       
        #portshot{
            padding-top:75px;
        }
        #text{
            padding-top:;
        }
        .carousel-caption {
            position: relative !important;
            right: 0 !important;
            bottom: 20px;
            left: 0 !important;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
            display:block !important;
        }

        #resume{
            padding-left:55px;
            padding-bottom:55px;
        }

        #contact{
            padding-left: 55px;
        }
        #icons{
            padding-left:155px;
        }


        </style>

    </head>

    <body>
        <div id="jumbo"class="jumbotron jumbotron-fluid">
            <div id="nav">
                <b-nav >
                    <b-nav-item><a href="#about" style="color:black">About | </a></b-nav-item>
                    <b-nav-item><a href="#" style="color:black">Blog | </a> </b-nav-item>
                    <b-nav-item><a href="#portfolio" style="color:black">Portfolio | </a> </b-nav-item>
                    <b-nav-item><a href="#contact" style="color:black">Contact | </a> </b-nav-item>
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
                        
                        </div>
                        <div class="col">
                            <about-component></about-component>

                        </div>
                    </div>
                </div>
            </div>

            <div id="blogJumbo"class="jumbotron jumbotron-fluid">
                <div id="portfolio"> 
                    <h1>Portfolio</h1>
                <div id= "portshot" class="container">
                    <div class="row">
                        <div id="camp" class="col-md-3">
                            <img src="/img/Screen Shot 2019-04-17 at 7.38.54 PM.png" height=100% width=100% />
                        </div>
                        <div id="calc" class="col-md-3">
                        <a href="https://calculator-laravel.herokuapp.com/"target="_blank"><img src="/img/Screen Shot 2019-04-17 at 7.40.06 PM.png" height=100% width=100%/></a>
                        </div>
                        <div id="trib" class="col-md-3">
                        <img src="/img/Screen Shot 2019-04-19 at 2.45.41 PM.png" height=100% width= 100%/>
                        </div>
                        <div id="todo" class="col-md-3">
                        <img src=""/>
                        </div>
                        <div id="clock" class="col-md-3">
                        <img src=""/>
                        </div>
                    </div>
                </div>
    </div>
    </div>
    <div id="resume">
        <h1> My Resume</h1>
        <div class="row">
            <div class="col-6-md">
                <img src="/img/resume1.png">
            </div>
            <div class="col-6-md">
                <img src="/img/resume2.png">
            </div>
        </div>
     </div>
                <div id="contact"> 
                    <h1> Contact Me</h1>
                <div id="icons" class=" text-center container row">
                    <div id="git" class=" text-center col-md-2">
                       <a href="https://github.com/jaelyncoles" target="_blank"> <img src="/img/github-5-xxl_zchvtx.png" height=70% width=70%/></a>
                    </div>
                                <div id="phone" class="col-2 text-center my-2">
                                    <img v-b-tooltip.hover title="(859)338-6085"src="/img/phone_tmzw19.png"height=70% width=70%/>
                                </div>
                                <div id="email" class=" text-center col-2">
                                    <button type="button"  data-toggle="modal" data-target="#exampleModal">
                                        <img src="/img/email_hqpzpc.png"height=70% width=70%/>
                                    </button>
                                </div>
                                  <div id="linkin" class=" text-center col-2">
                                     <a href="https://www.linkedin.com/in/jaelyncoles/" target="_blank"> <img src="/img/linkedin_hgnp3y.png" height=70% width=70%/></a>
                                         </div>
                                         <div id="insta" class="text-center col-2">
                                             <img v-b-tooltip.hover title="@pickmypuff" src="/img/insta.png" height=70% width=70%/>
                                            </div>
            </div>



            
        </div>

  
      


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Email Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="mailto:jaelyncoles@gmail.com" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name"><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<input type="text" name="comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>
      </div>
    </div>
  </div>
</div>







        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
