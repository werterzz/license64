function checkForm()
{
    document.getElementById("modalBtn").click();

    // myFunction();
}

function myFunction() {
    var elements = document.getElementById("examForm").elements;
    var obj ={};
    for(var i = 0 ; i < elements.length ; i++){
        var item = elements.item(i);
        obj[item.name] = item.value;
    }
    console.log(obj);
}


try {
    document.getElementById("closeBtn").addEventListener("click", function(){
        window.location.href = "/license64/public";
    });

    document.getElementById("againBtn").addEventListener("click", function(){
        window.location.href = "{{ $_SERVER['REQUEST_URI'] }}";
    });
    document.getElementById("ansBtn").addEventListener("click", getAnswer);     
}
catch(err){}

function getAnswer()
{
    var inputs = document.getElementsByTagName('input');

    for(var i = 0; i < inputs.length; i++) {
        if(inputs[i].type.toLowerCase() == 'radio') {
            // console.log(inputs[i].value);
            let result = inputs[i].value.split(" ");
            if (result[0] == result[1])
            {
                inputs[i].setAttribute("checked", "true");
            }
        }
    }
    console.log(inputs[5])
}