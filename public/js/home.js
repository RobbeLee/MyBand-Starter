let btns = document.querySelectorAll('.story__btn');

btns.forEach(btn => {
    btn.addEventListener('click', () => {
        let open = (btn.parentElement.nextElementSibling.dataset.open == 'true') ? true : false;
        open ? btn.parentElement.nextElementSibling.style.height = "auto" : btn.parentElement.nextElementSibling.style.height = "110px";
        open ? btn.parentElement.nextElementSibling.style.display = "block" : btn.parentElement.nextElementSibling.style.display = "-webkit-box";
        open ? btn.parentElement.nextElementSibling.dataset.open = 'false' : btn.parentElement.nextElementSibling.dataset.open = 'true';
    });
});