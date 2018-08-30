function expand(e) {
    let targetElement = e.nextElementSibling
    let imageElement = e.firstElementChild.nextElementSibling.nextElementSibling
    if (targetElement.getAttribute("data-expand") === "false") {
        targetElement.setAttribute("data-expand", "true")
        imageElement.setAttribute("data-expand", "true")
    } else {
        targetElement.setAttribute("data-expand", "false")
        imageElement.setAttribute("data-expand", "false")
    }
}

function showAside(){
    document.getElementById("aside").style.display="inline-block";
    document.getElementById("text").style.filter="blur(3px)";
    document.getElementById("blurground").style.display="inline-block";
}

function Main(){
    document.getElementById("aside").style.display="none";
    document.getElementById("contentDetails").style.display="none";
    document.getElementById("text").style.filter="none";
    document.getElementById("blurground").style.display="none";
}

function showDetail() {
    document.getElementById("aside").style.display="none";
    document.getElementById("contentDetails").style.display="inline-block";
    document.getElementById("text").style.filter="blur(3px)";
    document.getElementById("blurground").style.display="inline-block";
}

function showDetails(){
    var title1 = document.getElementById("title1");
    title1.setAttribute("class", "DetailTitle title1");

    var title2 = document.getElementById("title2");
    title2.setAttribute("class", "DetailTitle title2");

    var details = document.getElementById("contentDetails");
    details.style.setProperty('height','75%');

    document.getElementById("DetailsContent").style.display="inline-block";
    document.getElementById("SendContent").style.display="none";
}

function showSend(){
    var title1 = document.getElementById("title1");
    title1.setAttribute("class", "DetailTitle style1");

    var title2 = document.getElementById("title2");
    title2.setAttribute("class", "DetailTitle style2");

    var details = document.getElementById("contentDetails");
    details.style.setProperty('height','58%');

    document.getElementById("DetailsContent").style.display="none";
    document.getElementById("SendContent").style.display="inline-block";
}


