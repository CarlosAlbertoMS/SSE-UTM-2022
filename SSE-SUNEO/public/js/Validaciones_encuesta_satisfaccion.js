function validacion(question, obj) {
    limite = 5; //Limite de checks a seleccionar.
    cont = 0;
    for(i=0; i < document.getElementById(question).children.length; i++){
        tam = document.getElementById(question).children[i].children.length;
        if(tam == 2){
            ele = document.getElementById(question).children[i].children[0].children[0];
            if(ele.checked)
                cont++;
        }
        else{
            for(j=0; j < tam; j++ ){
                ele = document.getElementById(question).children[i].children[j].children[0].children[0];
                if(ele.checked)
                    cont++;
            }   
        }
    }
    if(cont>limite)
        obj.checked = false;
}

function validacion_inputs(obj, ...inputs){
    if(obj == "Si"){
        for(i=0;i < inputs.length; i++)
            document.getElementById(inputs[i]).removeAttribute("readonly");
    }else{
        for(i=0;i < inputs.length; i++)
            document.getElementById(inputs[i]).setAttribute("readonly",true);
    }
}

function validacion_inputs_checkbox(name,obj,input){
    if(obj.checked){
        document.getElementById(input).removeAttribute("readonly");
        document.getElementById(input).setAttribute("name",name);
    }else{
        document.getElementById(input).setAttribute("readonly",true);
        document.getElementById(input).setAttribute("name","");
    }
}