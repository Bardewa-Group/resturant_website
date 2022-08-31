// request for lunch section
// let form = document.querySelector('.form');

// form.onsubmit = function (e) {
//     e.preventDefault();
// }

let requestx = new XMLHttpRequest();
requestx.open('POST', 'php/test.php', true);
requestx.onload = () => {
    if (requestx.readyState === XMLHttpRequest.DONE) {
        if (requestx.status === 200) {
            let data = requestx.responseText;
            document.querySelector('.main-menu-content').innerHTML = data;
            console.log(data);
        }
    }
}
requestx.send();


window.addEventListener('load', function () {


    const open = document.querySelectorAll('[data-modal-target]');
    const close = document.querySelectorAll('[data-close-button]');
    const overlay = document.querySelector('.overlay');
    open.forEach(element => {
        element.onclick = () => {
            modaljs = document.querySelector(element.dataset.modalTarget);
            openModal(modaljs);
        }
    });

    close.forEach(element => {
        element.onclick = () => {
            const modal = document.querySelector(element.dataset.closeButton);
            closeModal(modal);
            console.log(modal);

        }
    });


    overlay.onclick = () => {
        closeModal(modaljs);
    }

    function openModal(modaljs) {
        if (modaljs == null) return;
        modaljs.classList.add('active');
        overlay.classList.add('active');
    }

    function closeModal(modaljs) {
        if (modaljs == null) return;
        modaljs.classList.remove('active');
        overlay.classList.remove('active');
    }
})
