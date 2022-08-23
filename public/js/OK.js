if(window.location.pathname.substr(0,3)=='/en'){
    document.getElementById('success').innerHTML = '<p id="success" class="form-text text-danger me-3"> Registration successful! redirecting to login</p>';
}
else if(window.location.pathname.substr(0,3)=='/tr'){
    
}
else{
    document.getElementById('success').innerHTML = '<p id="success" class="form-text text-danger me-3"> Registration successful! redirecting to login</p>';
}

setTimeout(function(){   
    window.location='/';
    }, 3000);