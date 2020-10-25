document.querySelector('#menu').addEventListener('click', function (e) {
    if (document.querySelector('#blocMenu').style.display == 'none') {
        document.querySelector('#blocMenu').style.display = 'block';
    } else {
        document.querySelector('#blocMenu').style.display = 'none';
    }
})