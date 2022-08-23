if(window.location.pathname.substr(0,3)=='/en'){
    document.getElementById('mailerror').innerHTML = '<p id="mailerror" class="form-text text-danger mb-3">E-Mail already exists</p>';
}
else if(window.location.pathname.substr(0,3)=='/tr'){
    
}
else{
    document.getElementById('mailerror').innerHTML = '<p id="mailerror" class="form-text text-danger mb-3">E-Mail already exists</p>';
}