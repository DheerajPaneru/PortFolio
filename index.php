
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body onload="fetch()">


<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfolio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn"> <span></span><span></span><span></span><span></span>Home</a></li>
                <li><a href="#about" class="menu-btn"> <span></span><span></span><span></span><span></span>About</a></li>
                <li><a href="#services" class="menu-btn"> <span></span><span></span><span></span><span></span>Services</a></li>
                <li><a href="#skills" class="menu-btn"><span></span><span></span><span></span><span></span>Skills</a></li>
                <li><a href="#teams" class="menu-btn"><span></span><span></span><span></span><span></span>Teams</a></li>
                <li><a href="#contact" class="menu-btn"><span></span><span></span><span></span><span></span>Contact</a></li>
                <li><a href="#indiacoronalive" class="menu-btn"><span></span><span></span><span></span><span></span>indiacoronalive</a></li>
                <li><a href="#worldcoronalive" class="menu-btn"><span></span><span></span><span></span><span></span>worldcoronalive</a></li>

            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Dheeraj Paneru</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="WhatsApp Image 2022-03-04 at 13.49.28 (3).jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Dheeraj Paneru and I'm a <span class="typing-2"></span></div>
                    <p> I know HTML,CSS,jquery,REACTJS,WORDPRESS,PHP,MySQL,JavaScript</p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>I love Web Designing </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>  I am  a <span style="color: blue;"> frontend </span> developer and <span style="color: green;"> WORDPRESS</span> developer</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql">
                        </div>
                            <div class="bars">
                                <div class="info">
                                    <span>JQERY</span>
                                    <span>50%</span>
                                </div>
                                <div class="line jquery">
                            </div>        
            
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="IMG_20211210_114300.jpg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="about2.jpg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>YOU CAN CONTACT WITH ME</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Dheeraj Paneru</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Haldwani,Uttrakhand</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">dheerajpaneru8@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="worldcoronalive" id="worldcoronalive">
<h3 class="text-centre text-uppercase">Covid-19 Live Updates of the World </h3>
<div class="table-responsive">


<table class =" table table-bordered table-striped text-centre" id="tbval">
    <tr>
<th>country</th>
<th>TotalConfirmed</th>
<th>TotalRecoverd</th>
<th>TotalDeaths</th>
<th>NewConfirmed</th>
<th>NewDeaths</th>
<th> Date</th>
<th> CountryCode</th>

</tr>
</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>



function fetch(){
    $.get("https://api.covid19api.com/summary",
    
    function(data){

     //   console.log(data['Countries'].length);
     var tbval=document.getElementById('tbval');

for(var i=1; i<(data['Countries'].length); i=i+1){
    var x=tbval.insertRow();
    x.insertCell(0);
    tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
    tbval.rows[i].cells[0].style.background='#7a4a91';
    tbval.rows[i].cells[0].style.color='#fff';

    x.insertCell(1);



    tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
    tbval.rows[i].cells[1].style.background='#4bb7d8';
   

x.insertCell(2);
tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
tbval.rows[i].cells[2].style.background='#4bb7d8';

x.insertCell(3);
tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
tbval.rows[i].cells[3].style.background='#f36e23';
x.insertCell(4);
tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
tbval.rows[i].cells[4].style.background='#9cc850';
x.insertCell(5);
tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewDeaths'];
tbval.rows[i].cells[5].style.background='#f36e23';

x.insertCell(6);
tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['Date'];
tbval.rows[i].cells[6].style.background='#f36e24';

x.insertCell(7);
tbval.rows[i].cells[7].innerHTML=data['Countries'][i-1]['CountryCode'];
tbval.rows[i].cells[7].style.background='#f36e44';





}
}

    
    )

}




</script>

</section>

<h3 class="text-centre text-uppercase">Covid-19 Live Updates of the india </h3>
<div class="table-responsive">


<table class =" table table-bordered table-striped text-centre" id="tbval">
    <tr>
<th class ="text-capitalize" >country</th>
<th class ="text-capitalize" >state</th>
<th class ="text-capitalize" >confirmed</th>
<th class ="text-capitalize">active</th>
<th class ="text-capitalize">recovered</th>
<th class ="text-capitalize">deaths</th>

</tr>


<?php
$data =file_get_contents('https://api.covid19india.org/data.json');
$coronalive=json_decode($data,true);

//echo"<pre>";
//print_r($coronalive);
//echo"</pre>";
$statescount=count($coronalive['statewise']);

$i=1;
while($i<$statescount){
    ?>


<tr>
    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']
?></td>
<td><?php echo $coronalive['statewise'][$i]['state']
?></td>
<td><?php echo $coronalive['statewise'][$i]['confirmed']
?></td>
<td><?php echo $coronalive['statewise'][$i]['active']
?></td>
<td><?php echo $coronalive['statewise'][$i]['recovered']
?></td>
<td><?php echo $coronalive['statewise'][$i]['deaths']
?></td>

</tr>
<!--echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>";
echo $coronalive['statewise'][$i]['state']."<br>";
echo $coronalive['statewise'][$i]['confirmed']."<br>";
echo $coronalive['statewise'][$i]['active']."<br>";
echo $coronalive['statewise'][$i]['recovered']."<br>";
echo $coronalive['statewise'][$i]['deaths']."<br>";-->
<?php
$i++;

}
?>
</table>
</div>

















































































<!-- footer section start -->
<footer>
        <span>Created By <a href="https://dheerajpaneru.ezyro.com">dheerajpaneru</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
    <script src="script.js"></script>
</body>
</html>