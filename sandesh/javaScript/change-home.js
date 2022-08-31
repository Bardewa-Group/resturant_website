let form = document.querySelector('.form1');
let add = document.querySelector("input[name='add']");
let update = document.querySelector("input[name='update']");
const error = document.querySelector('.error-text');

form.onsubmit = function(e){
    e.preventDefault();
}

// for home page
add.onclick = () => {
    let request2 = new XMLHttpRequest();
    request2.open('POST', 'php/home-add.php', true);
    request2.onload = () => {
        if(request2.readyState === XMLHttpRequest.DONE) {
            if(request2.status === 200){
                let data2 = request2.responseText;
                console.log(data2);
                if(data2 === 'Updated'){
                    // code to display the message and link to the home page
                    alert(data2);
                }else{
                    error.innerHTML = data2;
                    error.style.display = "block";
                }
            }
        }
    }
    let formdata = new FormData(form);
    request2.send(formdata);
}

update.onclick = () => {
    let request = new XMLHttpRequest();
    request.open('POST', 'php/home-update.php', true);
    request.onload = () => {
        if(request.readyState === XMLHttpRequest.DONE) {
            if(request.status === 200){
                let data = request.responseText;
                if(data === 'Updated' || data === ''){
                    // code to display the message and link to the home page
                    alert('Updated');
                }else{
                    error.innerHTML = data;
                    error.style.display = "block";
                }
            }
        }
    }
    let formdata = new FormData(form);
    request.send(formdata);
}