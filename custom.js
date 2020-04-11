function hideafterhover(){
    document.getElementById("hideauto").style.display='none';
}

function checkstrength(){
    var str = document.getElementById("passwd").value.length;
    if(str<6){
        document.getElementById("showMsg").innerHTML = "Length of the password is less than 6";
        console.log("Less of the password is less than 6 digit")
    }
}