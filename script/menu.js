document.querySelector('#menu').addEventListener('click', function (e) { //Show first menu
    if (document.querySelector('#firstLevel').style.display == 'block') {
        document.querySelector('#firstLevel').style.display = 'none';
    } else {
        document.querySelector('#firstLevel').style.display = 'block';
    }
})

document.querySelector('#menuSecondLevel').addEventListener('click', function (e) { //Show second menu (stages)
    if (document.querySelector('#secondLevel').style.display == 'block') {
        document.querySelector('#secondLevel').style.display = 'none';
    } else {
        document.querySelector('#secondLevel').style.display = 'block';
    }
})