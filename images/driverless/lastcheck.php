<?php
if(isset($_SESSION['loggedin'])){
echo'    <div class="row bg-dark text-white text-center marginclass" style="margin-top: 10%;">
        <div class="col-sm-4 realpadding"><h4>Keep touch with Us On:</h4>
            <p>+265 1 444 5550 Or</p>
            <ul class="iconlist">
                <li class="icons"><img src="social1.png" title="Facebook" class="socialimg"></li>
                <li class="icons"><img src="social2.png" title="Instagram" class="socialimg"></li>
                <li class="icons"><img src="social3.png" title="Telegram" class="socialimg"></li>
                <li class="icons"><img src="social4.png" title="Twitter" class="socialimg"></li>
            </ul>
        </div>
        <div class="col-sm-4 realpadding"><h4>Subscribe for a Newsletter</h4>
         <div id="subscribe"></div>
            <form id="signup" onsubmit="Subscribe(event)">
                <p>
                    <input type="email" placeholder="Email" class="contact-form" id="subscriber" required>
                </p>
                <p>
                    <input type="submit" name="newsbtn" value="Subscribe!" class="btn btn-primary">
                </p>
            </form>
        </div>
        <div class="col-sm-4 realpadding">
            <h4>Our Links:</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Trending</a></li>
                <li>
                <a class="nav-link" href="#"><form action="logsign.php" method="post"><button name="logoutbtn" class="btn btn-primary">Logout</button></form></a>
            </li>
            </ul>
        </div>
    </div>';
}
else{
    echo'<div class="row bg-dark text-white text-center marginclass" style="margin-top: 10%;">
    <div class="col-sm-4 realpadding"><h4>Keep touch with Us On:</h4>
        <p>+265 1 444 5550 Or</p>
        <ul class="iconlist">
            <li class="icons"><img src="social1.png" title="Facebook" class="socialimg"></li>
            <li class="icons"><img src="social2.png" title="Instagram" class="socialimg"></li>
            <li class="icons"><img src="social3.png" title="Telegram" class="socialimg"></li>
            <li class="icons"><img src="social4.png" title="Twitter" class="socialimg"></li>
        </ul>
    </div>
   <div class="col-sm-4 realpadding"><h4>This website is &copy;Copyright 2021</h4>
       <p>Property of Driverless</p>
</div>
    <div class="col-sm-4 realpadding">
        <h4>Our Links:</h4>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="signup.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
    </div>
</div>';
}
?>