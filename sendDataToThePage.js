function sendParamStatus(url,params){
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url + "?" + params, true);
    xhttp.send();
}
function addProduct(id,q){
    console.log(id,q);
    if(localStorage.getItem(id)){
    localStorage.setItem(id,Number(localStorage.getItem(id))+Number(q));
    }else{
        localStorage.setItem(id,1);
    }
}
function removeProduct(id){
    localStorage.removeItem(id);
}
function clearProducts(){
    localStorage.clear;
}
