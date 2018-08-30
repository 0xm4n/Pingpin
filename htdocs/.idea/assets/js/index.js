function SignIn(){
    document.getElementById("blurground").style.display="inline-block";
    document.getElementById("loginSite").style.display="inline-block";
    document.getElementById("registerSite").style.display="none";
    document.getElementById("background").style.filter="blur(3px)";
}

function SignUp(){
    document.getElementById("blurground").style.display="inline-block";
    document.getElementById("loginSite").style.display="none";
    document.getElementById("registerSite").style.display="inline-block";
    document.getElementById("background").style.filter="blur(3px)";
}

function Main(){
    document.getElementById("blurground").style.display="none";
    document.getElementById("loginSite").style.display="none";
    document.getElementById("registerSite").style.display="none";
    document.getElementById("background").style.filter="none";
}