document.addEventListener("scroll", scrollTime);
var scrollbtn = document.querySelector(".topbutton");

function scrollTime(){
    var scrollableHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    if((document.documentElement.scrollTop || document.documentElement.scrollTop / scrollableHeight) > 0.5){
        if(!scrollbtn.classList.contains("showbtn")){
            scrollbtn.classList.add("showbtn");
        }
        else if(scrollbtn.classList.contains("showbtn")){
            scrollbtn.classList.remove("showbtn");
        }
    }
}
scrollbtn.addEventListener("click", scrollTotop);
function scrollTotop(){
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}