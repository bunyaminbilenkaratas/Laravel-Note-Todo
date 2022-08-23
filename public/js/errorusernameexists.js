if(window.location.pathname.substr(0,3)=='/en'){
    
document.getElementById('usernameerror').innerHTML = '<p id="usernameerror" class="form-text text-danger mb-3">Username already exists</p>';
}
else if(window.location.pathname.substr(0,3)=='/tr'){
    
}
else{
    document.getElementById('usernameerror').innerHTML = '<p id="usernameerror" class="form-text text-danger mb-3">Username already exists</p>';
}
