if(window.location.pathname.substr(0,3)=='/en'){
    alert("Your password reset link was sent to your email");
    }
    else if(window.location.pathname.substr(0,3)=='/tr'){
    }
    else{
        alert("Your password reset link was sent to your email");
    }
setTimeout(function(){
    window.location='/';
}, 3000);