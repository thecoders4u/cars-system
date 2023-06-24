
Showslides();
//The slideshow function
function Showslides(){
    var subcounter;
    var maincounter = 1;
    var x = setInterval(Process, 4000);
    function Process(){
        if(maincounter == 3){
            maincounter = 0;
        }
        for(subcounter = 0; subcounter < document.getElementsByClassName("slide").length; subcounter++){
            document.getElementsByClassName("slide")[subcounter].style.display = "none";
        }
        document.getElementsByClassName("slide")[maincounter].style.display = "block";
        maincounter++;

    }
}
//Hiding the spinner after two seconds after home page has loaded
window.onload=
function clearSpinner(){
var x = setTimeout(Clear, 2000);
function Clear(){
    document.getElementsByClassName("fakeload")[0].style.display = "none";
}
}
//View a specific element in full screen mode
function openFullscreen(elem) {

    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) { /* Firefox */
        elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE/Edge */
        elem.msRequestFullscreen();
    }
}
//Toggle between products ready, in-mind and upcoming
function productToggle(val){
    var counter;
    var imgarrayone = document.getElementsByClassName("animatecon1");
    var imgarraytwo = document.getElementsByClassName("animatecon2");
    var imgarraythree = document.getElementsByClassName("animatecon3");
    var infoarrayone = document.getElementsByClassName("info1");
    var infoarraytwo = document.getElementsByClassName("info2");
    var infoarraythree = document.getElementsByClassName("info3");

    for(counter = 0; counter<imgarrayone.length; counter++){
        imgarrayone[counter].style.display = "none";
    }
    for(counter = 0; counter<imgarraytwo.length; counter++){
        imgarraytwo[counter].style.display = "none";
    }
    for(counter = 0; counter<imgarrayone.length; counter++){
        imgarraythree[counter].style.display = "none";
    }
    for(counter = 0; counter<infoarrayone.length; counter++){
        infoarrayone[counter].style.display = "none";
    }
    for(counter = 0; counter<infoarraytwo.length; counter++){
        infoarraytwo[counter].style.display = "none";
    }
    for(counter = 0; counter<infoarraythree.length; counter++){
        infoarraythree[counter].style.display = "none";
    }

 if(val == "Ready"){
  for(counter = 0; counter<imgarrayone.length; counter++){
      imgarrayone[counter].style.display = "block";
  }
  for(counter = 0; counter<infoarrayone.length; counter++){
         infoarrayone[counter].style.display = "block";
  }
 }
 else if(val == "Upcoming"){
     for(counter = 0; counter<imgarraytwo.length; counter++){
         imgarraytwo[counter].style.display = "block";
     }
     for(counter = 0; counter<infoarraytwo.length; counter++){
         infoarraytwo[counter].style.display = "block";
     }
 }

 else{
     for(counter = 0; counter<imgarraythree.length; counter++){
         imgarraythree[counter].style.display = "block";
     }
     for(counter = 0; counter<infoarraythree.length; counter++){
         infoarraythree[counter].style.display = "block";
     }
 }
}
Promo();
//Countdown timer for limited products
function Promo(){
    var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
    var secondcountDate = new Date("Nov 17, 2021 23:59:00").getTime();

    var x = setInterval(function() {

        var now = new Date().getTime();

        var distance = countDownDate - now;
        var seconddistance = secondcountDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        var seconddays = Math.floor(seconddistance / (1000 * 60 * 60 * 24));
        var secondhours = Math.floor((seconddistance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var secondminutes = Math.floor((seconddistance % (1000 * 60 * 60)) / (1000 * 60));
        var secondseconds = Math.floor((seconddistance % (1000 * 60)) / 1000);


        document.getElementById("promo").innerHTML = "Promotion ends in: " + days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        document.getElementById("promo2").innerHTML = "Promotion ends in: " + seconddays + "d " + secondhours + "h "
            + secondminutes + "m " + secondseconds + "s ";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("promo").innerHTML = "PROMOTION EXPIRED";
        }
        else if (seconddistance < 0) {
            clearInterval(x);
            document.getElementById("promo2").innerHTML = "PROMOTION EXPIRED";
        }
    }, 1000);
}
var index;
//Triggering zoom/enlarge animation when scrolling to a specific element
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const square = entry.target.querySelector('.newsimage');
        var square2 = entry.target.querySelector('.newstext');

        if(entry.isIntersecting){
            for(index = 0; index<document.getElementsByClassName("newsimage").length; index++){
                square.classList.add('zoom');
                square2.classList.add('zoom');
            }
            return;
        }
        for(index = 0; index<document.getElementsByClassName("newsimage").length; index++) {
            square.classList.remove('zoom');
            square2.classList.remove('zoom');
        }
    });
});
var index2 = 0;
//Checking and applying animation to element if in viewport
while(index2<document.getElementsByClassName("news").length){
    observer.observe(document.getElementsByClassName("news")[index2]);
    index2++;
}
//Triggering fade animation when scrolling to a specific element
const secondobserver = new IntersectionObserver(entries => {
    entries.forEach(entry =>{
        const thetarget = entry.target.querySelector('.innertemp');

        if(entry.isIntersecting){
            for(index = 0; index<document.getElementsByClassName("innertemp").length; index++){
                thetarget.classList.add('secondtransition');
            }
            return;
        }
        for(index = 0; index<document.getElementsByClassName("innertemp").length; index++){
            thetarget.classList.remove('secondtransition');
        }
    });
});

var index3 = 0;
//Checking and applying animation to element if in viewport
while(index3<document.getElementsByClassName("temp").length){
    secondobserver.observe(document.getElementsByClassName("temp")[index3]);
    index3++;
}
//Show Update Account Form which was hidden
function firstAction() {
  document.getElementById("signupcon").innerHTML = document.getElementsByClassName("hidden")[0].innerHTML;
}
//Show Change Form which was hidden
function secondAction() {
    document.getElementById("signupcon").innerHTML = document.getElementsByClassName("hidden")[1].innerHTML;
}
//Return to Page for Configuring Account
function Back(){
    window.location.assign("account.php");
}
//Return to Page for Logging In
function goBack(){
    window.location.assign("login.php");
}
//Redirect to Forgot Password Form
function showForgot(){
    window.location.assign("forgotform.php");
}
//Ajax request  to re-new account password
function resetPass(){
   $.post('forgot.php',
    {
        forgotbtn: "SET",
        username: $("#forgot-user").val(),
        email: $("#forgot-email").val(),
        password: $("#forgot-password1").val(),
        answer: $("#answer").val()
    },
    function (data) {
        if (data === "TRUE") {
            $("#forgot-info").html("<p class='alert alert-success'>You have successfully reset your password!</p>");
        } else {
            $("#forgot-info").html("<p class='alert alert-danger'>" + data +"</p>");
        }
    }
   );
}
//Ajax request to Create an Account via Validation first
function Register(event){
    event.preventDefault();
    var lower =/[a-z]/g; //Lower-case letters
    var upper =/[A-Z]/g;//Upper-case Letters
    var min = /[0-9]/g;//Including digits
    var el = document.getElementById("signupinfo");
    var checking = document.getElementById('password1');
    var confpass = document.getElementById('password2');
    //Validation of User Password through several patterns
    if(One()){
        if(Two()){
            if(Three()){
                if(Four()){
                    if (Five()){
                        $.post('logsign.php',
                            {
                                signupbtn: "SET",
                                username: $("#username").val(),
                                email: $("#email").val(),
                                password: $("#password1").val(),
                                fname: $("#fname").val(),
                                lname: $("#lname").val(),
                                dob: $("#dob").val(),
                                pcode: $("#pcode").val(),
                                paddress: $("#paddress").val(),
                                answer: $("#answer").val()
                            },
                            function(data){
                                window.scrollTo({
                                    top: 0, //Scrolling where Alert will be displayed
                                    behavior: "smooth"
                                });
                                if(data == "SUCCESS"){
                                    $("#signupinfo").html("<p class='alert alert-success'>Made an Account, You can login now!</p>");
                                    if(window.location.pathname !== "/driverless/trending.php"){
                                        setTimeout(function () {
                                            window.location.assign("login.php");
                                        }, 750);
                                    }
                                }
                                else{
                                    $("#signupinfo").html("<p class='alert alert-danger'>" + data + "</p>");
                                }
                            });
                    }else{
                        el.innerHTML = "<p class='alert alert-danger'>Password must have a lower-Case Letter</p>";
                    }
                }else{
                    el.innerHTML = "<p class='alert alert-danger'>Passwords must have an Upper-Case Letter</p>";
                }
            }else{
                el.innerHTML = "<p class='alert alert-danger'>Passwords do not match</p>";
            }
        }else{
            el.innerHTML = "<p class='alert alert-danger'>Password must be greater than 6</p>";
        }
    }
    else{
        el.innerHTML = "<p class='alert alert-danger'>Passwords do not match</p>";
    }
    function One(){
        if(confpass.value != checking.value){
            return false;
        }
        else{
            return true;
        }
    }
    function Two(){
        if(checking.value.length >=6){
            return true;
        }
        else{
            return false;
        }
    }
    function Three() {
        if(checking.value.match(min)){
            return true;
        }
        else{
            return false;
        }
    }
    function Four() {
        if(checking.value.match(upper)){
            return true;
        }
        else{
            return false;
        }
    }
    function Five() {
        if(checking.value.match(lower)){
            return true;
        }
        else{
            return false;
        }
    }
}
//Ajax request to setup database and resources
function setupDB(event){
    event.preventDefault();
    $.get('phpsetup.php',
       function(data) {
           window.alert(data);
       }
       );
}//Ajax request to actively Check if Username is free
function checkUser(str) {
$.post('usersearch.php', {
   username: str
},
    function (data) {
     if(data === "FALSE"){
      $("#signupinfo").html("<p class='alert alert-danger'>Username taken</p>");
     }
     else{
         $("#signupinfo").html("<p class='alert alert-success'>You may use that Username</p>");
     }
    })
}
//Ajax request to Login into Website
function Login(event) {
    event.preventDefault();
    $.post('logsign.php',
        {
            loginbtn: "SET",
            username: $("#username").val(),
            password: $("#password").val()
        },
        function (data) {
            window.scrollTo({
                top: 0, //Scrolling where Alert will be displayed
                behavior: "smooth"
            });
            if (data == "TRUE") {
                window.location.assign("index.php");
            } else {
                $("#logininfo").html("<p class='alert alert-danger'>" + data + "</p>");
            }
        });
}
//Request to actively check if user is locked
function Timer(){
    $.get('timer.php',
        function(data){
            if(data == "TRUE"){
                $("#logininfo").html("");
                $("#timer").html("<p class='alert alert-primary'>You may now login</p>");
            }
            else{
                $("#timer").html("<p class='alert alert-light'>" + data + "</p>");
            }
        });
}
//Check if user is locked every second
function Attempts(){
    setInterval(Timer,1000);
}

Attempts();
//Request to update account primary details
function updateAcc(){
    $.post('updateacc.php',
        {
            mainupdate: "SET",
            username: $("#username").val(),
            email: $("#email").val(),
            fname: $("#fname").val(),
            lname: $("#lname").val(),
            dob: $("#dob").val(),
            pcode: $("#pcode").val(),
            paddress: $("#paddress").val(),
            answer: $("#answer").val()
        },
        function(data){
            window.scrollTo({
                top: 0, //Scrolling where Alert will be displayed
                behavior: "smooth"
            });
            if(data == "SUCCESS"){
                $("#updateinfo").html("<p class='alert alert-success'>Successfully updated your account!</p>");
            }
            else{
                $("#updateinfo").html("<p class='alert alert-danger'>" + data + "</p>");
            }
        });
}
//Request to change user password
function updatePass(){
    $.post('updateacc.php',
        {
            updatepass: "SET",
            password: $("#password1").val()

        },
        function(data){
            window.scrollTo({
                top: 0, //Scrolling where Alert will be displayed
                behavior: "smooth"
            });
            if(data == "SUCCESS"){
                $("#updateinfo").html("<div class='alert alert-info alert-dismissible fade show'><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>Successfully updated your account!</div>");
            }
            else{
                $("#updateinfo").html("<div class='alert alert-danger alert-dismissible fade show'><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" + data +"</div>");
            }
        });
}
//Providing set FAQ answers and showing final submission button
function View(event){
    event.preventDefault();
    $.post('contactprocess.php',
        {
            view: "SET",
            email: $("#email").val(),
            subject: $("#subject").val(),
            question: $("#question").val()
        },
        function(data){
          $("#faq").html(data);
        });
}
//Proceeding with final submission of question
function Send(event){
    event.preventDefault();
    $.post('contactprocess.php',
        {
            send: "SET"
        },
        function(data){
        if(data == "SUCCESS"){
            $("#faq").html("<p class='alert alert-info text-center' style='padding: 10px; width: 50%; margin-left: auto; margin-right: auto; display: block;'>Question is now Sent!, We will notify you on your E-mail Address</p>");
            if(window.location.pathname === "/driverless/account.php"){
                setTimeout(function () {
                    window.location.assign("account.php");
                }, 1000);
            }
        }
        else{
            $("#faq").html("<p class='alert alert-danger text-center' style='padding: 10px; width: 50%; margin-left: auto; margin-right: auto; display: block;'>" + data + "</p>");
        }
        });
}

var info2 = document.getElementById("primeval");
//Hide search info
info2.onfocus =  function doSearch() {
   clearSearch();
}
//Show search information based on user's requirements
info2.onkeyup = function doSearch() {
typeResult(info2.value);
}
//Perform search on search form submission
function megaSearch(event) {
    event.preventDefault();
    actualSearch(info2.value);
}
//Request Searched data in text
function resultText(str){
$.get('text.php', {
    text: str
},
    function (data) {
        $("#maintext").html(data);
    });
}
//Display the Searched Information
function showResult(str){
    $.get('image.php', {
            text: str
        },
        function (data) {
            if(data !== "FALSE"){
                $("#search-row").css("display", "block");
                Cancel();
            }
            else{
                $("#search-row").css("display", "none");
            }
        });
}
//Request preview of Searched information
function typeResult(str){
    $.get('searchtext.php', {
            text: str
        },
        function (data) {
        if(data === "FALSE"){
            $("#resultee").html("");
        }
        else{
            $(".result").html(data);
        }
        });

}
//Perform Complete Search directly on form submission
function actualSearch(str){
    resultText(str);
    resultImage(str);
    showResult(str);
}
//Perform search when a search hint(preview) is clicked
function clickSearch(str){
    $("#primeval").val(str);
    resultText(str);
    resultImage(str);
    showResult(str);
}
//Request an image of searched informtion
function resultImage(str){
    $.get('image.php', {
        text: str
    }, function (data) {
     $("#imagecon").html("<img id='mainimage' class='realpadding' src='"+data+"' alt='no image'>");
    });
}
//Hide the searched information
function clearSearch() {
    $("#search-row").css("display", "none");
}
//Request to subscribe to a newsletter
function Subscribe(event) {
event.preventDefault();
$.post('subscribe.php', {
    newsbtn: "SET",
    subscriber: $("#subscriber").val()
}, function (data) {
    if(data == "SUCCESS"){
        $("#subscribe").html("<div class='alert alert-info alert-dismissible fade show'><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>Successfully Subscribed</div>");
    }
    else{
        $("#subscribe").html("<div class='alert alert-danger alert-dismissible fade show'><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" + data + "</div>");
    }
    });
}
//Hide all the search hints(previews)
function Cancel(){
    document.getElementById("resultee").innerHTML = "";
}

document.addEventListener("scroll", scrollTime);
var scrollbtn = document.getElementById("topbutton");
//Show scroll to top button if page scrolled 20 pixels lower
function scrollTime(){
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollbtn.style.display = "block";
    } else {
        scrollbtn.style.display = "none";
    }
}
scrollbtn.addEventListener("click", scrollTotop);
function scrollTotop(){
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}



