const menutitle = document.querySelectorAll('.menu-title');

function cekcek(element) {
    var collapse = element.classList.contains('collapse');
    var lista = element.parentElement.querySelectorAll('a');

    if (collapse) {
        lista.forEach(a => {
            a.classList.remove('hide');
        });
    } else {
        lista.forEach(a => {
            a.classList.add('hide');
        })
    }
}

menutitle.forEach(span => {
    span.classList.remove('collapse');

    cekcek(span);

    span.addEventListener('click', (e) => {
        span.classList.toggle('collapse');
        cekcek(span);
    })
});

document.querySelectorAll('a.menu-a').forEach(a => {
    if (a.classList.contains('active')) {
        console.log(a.parentElement);
        a.parentElement.querySelector('.menu-title').classList.add('collapse');
    }
    cekcek(a.parentElement.querySelector('.menu-title'));
});

const topnav = document.querySelector('.topnav');

topnav.addEventListener('click', () => {
    document.querySelector('.sidenav').classList.toggle('show');
})

