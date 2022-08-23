function edittitle(elem){
    document.getElementById("todoid").value = elem.value;

}

function checker(elem){
    elem.children[0].children[0].checked=true;
}

function deletechecked(){
    var inputs = document.querySelectorAll('.chk');

    var checked = 0;
    for (var i = 0; i < inputs.length; i++) {   
        if(inputs[i].checked == true){
        checked++;
        }
    }

    var i;
    if(checked == inputs.length){
        i=1;
    }
    else{
        i=0;
    }

    for (i; i < inputs.length; i++) {   
        if(inputs[i].checked == true){
        inputs[i].parentElement.remove();
        }
    }
    

    var parent = document.getElementById("checkboxinputs");
    var checkboxdiv = parent.lastElementChild;
    var checkboxdivtext = checkboxdiv.lastElementChild;
    var checkboxelementcount = Number(checkboxdivtext.name);

    if(checkboxelementcount<9){
        document.getElementById("plusicon").removeAttribute('hidden');
        document.getElementById("trashicon").removeAttribute('style');
    }


    inputs = document.querySelectorAll('.aappend');
    for (var i=1; i <= inputs.length; i++) {   
        inputs[i].name = 'a'+i;
        }
    


}

function addnewcheck(){
    var parent = document.getElementById("checkboxinputs");
    var checkboxdiv = parent.lastElementChild;
    var checkboxdivtext = checkboxdiv.lastElementChild;
    var checkboxelementcount = Number(checkboxdivtext.name.substring(1));

    checkboxelementcount +=1;
    var cloned = checkboxdiv.cloneNode(true);
    cloned.lastElementChild.name = 'a'+checkboxelementcount;
    cloned.lastElementChild.value = "";

    parent.appendChild(cloned);

    if(checkboxelementcount>9){
        document.getElementById("plusicon").setAttribute('hidden','');
        document.getElementById("trashicon").style.right="5%";
    }


}

function check(chkid){
    var checkBox = document.getElementById("checkbox"+chkid);
    var checkedform = document.getElementById("formchecked"+chkid);
    var uncheckedform = document.getElementById("formunchecked"+chkid);

    if (checkBox.checked == true){
        checkedform.submit();
        document.getElementById("chklabel"+chkid).style="text-decoration: line-through;";

    }
    else{
        uncheckedform.submit();
        document.getElementById("chklabel"+chkid).style="";

    }
}

function deletesubmit(item){
    document.getElementById(item).submit();
}