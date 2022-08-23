if(window.location.pathname.substr(0,3)=='/en'){
    alert("Your password has been changed");
    }
    else if(window.location.pathname.substr(0,3)=='/tr'){
    }
    else{
        alert("Your password has been changed");
    }
setTimeout(function(){
    window.location='/login';
}, 3000);