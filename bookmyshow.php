<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bookmyshow.css">
   <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
.fast{
    width: 100%;
    height: 70px;
    background-color: black;
}
h1{
    color: white;
    text-align: center;
    font-size: 40px;
    padding: 8px;
}
samp{
    background-color: red;
    border: 2px solid red;
    color: rgb(250, 246, 246);
}
.book{
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 20px;
   text-align:center;
}
main{
    width: 100%;
    background-color: whitesmoke;
}
nav{
    display: flex;
    justify-content: space-around;
    text-align: center;
    padding: 20px;
    background-color: rgb(190, 40, 40);
}
nav ul {
    list-style-type: none;
   
 }
nav li {
    display: inline;
    margin-right: 20px;}
nav a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}
nav a:hover{
    color: lightgray;
    transition: 1.1s;
}
.search{
    border-radius: 15px;
    padding: 5px 15px;
    border: none;
}
.second{
    background-color:rgb(190, 40, 40);
    box-sizing: border-box;
    border: 3px solid red;
    min-height: 380px;
    flex-wrap: wrap;
    flex-direction: column;
    font-size: 20px;
    padding:0px 20px;
}
.submit{
    border: 1px solid rgb(36, 34, 34);
    margin: 0px 20px;
    padding: 7px 12px;
    border-radius: 10px;
    background-color: red;
    font-weight: bold;
    box-shadow: 2px 3px 3px rgb(50, 48, 48);
    transition: 1.1s;
}
.submit:hover{
    cursor: pointer;
    background-color: white;
    transition: 1.1s;
}
.right-section{
        /* border: 1px solid white; */
        margin: auto;
        width: 90%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        /* position: relative; */
        /* background-position: center; */
        justify-content: center;
        gap: 30px;
        padding-top: 20px;
        /* margin-left: 10%; */
        /* margin-right: 10%; */
       
}
.image-section{
    border: 1px solid rgb(43, 41, 41);
    box-shadow: 2px 3px 3px rgb(178, 42, 42);
    /* color: whitesmoke; */
    text-align: center;
    max-width: 400px;
    min-height: 200px;
    float: left;
    margin: 10px;
    margin-bottom: 5%;
    position: relative;
    border: none;
    background-color: rgb(32, 32, 32);
    transition: 1.5s;
}
.image-section:hover{
    transition: 1.5s;
    transform: scale(1.1);
}
img{
    background-size: cover;
    width: 200px;
    height: 250px;
}
.like{
    padding-bottom: 2px;
    position: relative;

}
.star{
    color: chartreuse;
    font-size: 20px;
    position: absolute;
    top: -6px;
    left: 26px;
}
.write{
    color: whitesmoke;
}
footer{
    border: 1px;
    background-color: rgb(175, 42, 42);
    height: 13vh;
    text-align: center;
    

}
footer p{
    color: white;
    padding: 10px 0 0 0;
    font-size: 20px;
}
    /* bookingfrom */

    .booking-overlay{
    width: 100%;
    position: fixed;
    top: 0%;
    background-color: rgba(0, 0, 0, 0.5);
    height: 100vh;
    z-index: -1;
    opacity: 0;
    transition: 1s;
}
.booking-showoverlay{
    opacity: 1;
    z-index: 1;
}
.booking-loginform{
    display: flex;
    justify-content: space-between;
    width: 600px;
    padding: 30px 20px;
    background-color: white;
    position: absolute;
    left: 50%;
    top: -50%;
    box-shadow: 0px 0px 10px 3px #ccc;
    transform: translate(-50%,-50%);
    transition: 2s;
    z-index: 9;
}
.booking-showloginform{
    top: 50%;
}
.text{
    width: 100%;
    height: 35px;
    margin-bottom: 15px;
}
.booking-loginform span{
    position: absolute;
    width: 30px;
    height: 30px;
    color: white;
    line-height: 30px;
    font-size: 25px;
    font-weight: bold;
    background-color: red;
    text-align: center;
    right: 0px;
    top: 0px;   
}
.booking-loginform span:hover{ background-color: whitesmoke; color: red; transition: 1s; }
.booking-logfrom{
    padding: 5px 30px;
    border-radius: 15px;
    background:  red;
    border: none;
    font-weight: bold;
    transition: 1.1s;
   
}
.booking-logfrom:hover{
    background-color: rgb(202, 200, 200);
    color: rgb(223, 25, 25);
   
}
.select-option{
    padding: 8px 0px;
   
}
   </style>
</head>

<body>
<?php
    include 'demo.php';
     if(isset($_POST['submit'])){
         $name = $_POST['name'];
         $email = $_POST['email'];
         $date = $_POST['date'];
         $movie=$_POST['movies'];
         $time = $_POST['time'];
         $sit = $_POST['sit'];
         
         $insert =" insert into book(name,email,date,time,movie,sit) values('$name','$email','$date','$time','$movie','$sit')";
 
         $iquery = mysqli_query($con,$insert);
         if($iquery){
             ?>
           <script>
                 alert("Your Booking Is Sucessful");
             </script>
             <?php
 
         }else{
             ?>
             <script>
                 alert("Error");
             </script>
             <?php
         }
     }
 ?>
    <header>
        <div class="fast">
            <h1>book<samp>my</samp>show</h1>
        </div>
    </header>
   <nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Movies</a></li> 
        <li><a href="#">Stream</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">ListYourShow</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
    <div>
        <input class="search" type="search" placeholder="search">
    </div>
    <div class="Login-page">
        <input class="btn-login submit" type="submit" value="Book Your Show">
    </div>
   </nav>
     <section class="booking">
    <div class="booking-overlay"></div>
    
    <div class="booking-loginform">
        <span class="booking-close">&times;</span>
        <div class="booking-div">
            <div class="image-section">
            <img src="bookmyshowimg.jpg">
            <div class="like"><p class="star">5 &#9733;</p><p class="write">Book Now</p></div>
        </div>
        </div>
        <form action="" method="POST">
            <div>
                <label>Name</label>
                <input class="text" id="name" type="text" name="name">
            </div>
             <div>
                <label>Email</label>
                <input class="text"  id="email" type="email" name="email">
                </div>
                <div>
                <label>Date</label>
                <input class="date" id="date" type="date" name="date">
             </div>
             <div class="select-option">
                    <label >Movie Time</label>
                    <select name="time" class="time" id="time">
                        <option value="12:10 PM">12:10 PM</option>
                        <option value="03:00 PM">03:00 PM</option>
                        <option value="06:00 PM">06:00 PM</option>
                    </select>
            </div>
            <div class="select-option">
                    <label >Select Your Movie</label>
                    <select name="movies" id="movie" class="movie">
                        <option value="JAWAN">JAWAN</option>
                        <option value="PATHAN">PATHAN</option>
                        <option value="TIGER3">TIGER3</option>
                        <option value="QUANTUMANIA">QUANTUMANIA</option>
                        <option value="PIRATES OF CARIBBEAN">PIRATES OF CARIBBEAN</option>
                        <option value="DUNKI">DUNKI</option>
                        <option value="JUSTICE LEAGE">JUSTICE LEAGE</option>
                        <option value="KGF">KGF</option>
                    </select>
            </div>
            <div>
                <label>Sit</label>
                <input class="text" type="number" id="sit" name="sit">
            </div>
            <!-- <input type="submit" name="submit" class="booking-logfrom" value="BOOK"> -->
            <button onclick="from()" type="submit" name="submit" class="booking-logfrom">BOOK</button>
        </form>
    </div>
</section>
    <main>
            <div class="right-section">
                <div class="image-section">
                    <img class="jawan" src="jawan.jpg">
                    <div class="like"><p class="star">&#9733;</p><p class="write">19.7k Likes</p></div>
                </div>
                <div class="image-section">
                    <img class="pathan" src="pathan.jpg">
                    <div class="like"><p class="star">&#9733;</p><p class="write">14.2k Likes</p></div>
                </div>
                <div class="image-section">
                    <img class="last" src="tiger.jpg">
                    <div class="like"><p class="star">&#9733;</p><p class="write">15.4k Likes</p></div>
                </div>
                <div class="image-section">
                    <img class="tiger3" src="antman.jpg">
                    <div class="like"><p class="star">&#9733;</p><p class="write">11.9k Likes</p></div>
                </div>
                <div class="image-section">
                    <img class="jawan" src="pirets.jpg">
                    <div class="like"><p class="star">&#9733;</p><p class="write">15.7k Likes</p></div>
                </div>
                <div class="image-section">
                    <img class="jawan" src="dunki1.jpg">
                    <div class="like"><p class="star">&#9733;</p><p class="write">10.2k Likes</p></div>
                </div>
                <div class="image-section">
                    <img class="jawan" src="justicLeage.jpg">
                    <div class="like"><p class="star">&#9733;</p><p class="write">14.6k Likes</p></div>
                </div>
                <div class="image-section">
                    <img class="jawan" src="kgf.jpg">
                    <div class="like"><p class="star">&#9733;</p><p class="write">18.3k Likes</p></div>
                </div>
            </div>
    </main>
    <footer>
        <p> Pandaveswar, Mohal | West Bengal | phone:+91-9547005659 | Email-anowar@gmqil.com</p>
        <p>Sk Anowar Hossain</p>
    </footer>
    
</body>
<script>
    function showBooking(){
        document.querySelector('.booking-overlay').classList.add('booking-showoverlay');
        document.querySelector('.booking-loginform').classList.add('booking-showloginform');
    }
    function closeBooking(){
        document.querySelector('.booking-overlay').classList.remove('booking-showoverlay');
        document.querySelector('.booking-loginform').classList.remove('booking-showloginform');
    }
    function from(){
        var n = document.getElementById("name").value;
        var e = document.getElementById("email").value;
        var d = document.getElementById("date").value;
        var t = document.getElementById("time").value;
        var m = document.getElementById("movie").value;
        var s = document.getElementById("sit").value;
        
        alert('\nName- '+n+'\nEmail- '+e+'\nDate- '+d+'\nTime- '+t+'\nMovie- '+m+'\nSit- '+s+'\nBooking Is Sucessful');

    }

    var btnlogin = document.querySelector(".btn-login");
    btnlogin.addEventListener("click",showBooking);

     var btnlogin = document.querySelector(".booking-close");
      btnlogin.addEventListener("click",closeBooking);

    
</script>
</html>