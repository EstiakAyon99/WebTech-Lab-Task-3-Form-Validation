function check10() {
    let j=0;
    for(i=1; i<=20; i++){
        if(document.getElementById("city"+i).checked){
            j++;
        }
    }
    if(j!=10){
        document.getElementById('error').innerHTML = "Select any 10 cities!";
        return false;
    }
    
    return true;
}