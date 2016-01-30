function newsletter(mail)
{
    var xmlhttp;
    if (window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("newsletter").innerHTML = xmlhttp.responseText;
            document.getElementById("form_newsletter").hidden = true;
        }
    }
    xmlhttp.open("POST", "newsletter.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("mail=" + mail);
}
    
