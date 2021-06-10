const data = document.querySelectorAll('.uang');
data.forEach(uang => {
    var text = uang.innerHTML;
    var fixtext = []
    let counter = -1;
    for (let index = text.length - 1; index >= 0; index--) {
        counter++;
        if (counter % 3 == 0 && counter != 0) {
            fixtext.unshift('.');
        }
        fixtext.unshift(text[index]);
    }

    uang.innerHTML = 'Rp. ' + fixtext.join('');
});
