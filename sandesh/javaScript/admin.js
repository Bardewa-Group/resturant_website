const btn = document.querySelector("input[type='submit']");
const form = document.querySelector('.form form');
const error = document.querySelector('.error-text');

form.onsubmit = function (e) {
    e.preventDefault();
}

btn.onclick = function () {
    let request = new XMLHttpRequest();
    request.open('POST', 'php/login.php', true);
    request.onload = function () {
        if (request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
                let data = request.responseText;
                console.log(data);
                if(data === 'success') {
                    location.href = 'admin.php';
                }else{
                    error.innerHTML = data;
                    error.style.display = "block";
                }
            }
        }
    }
    let formdata = new FormData(form)
    request.send(formdata);
}