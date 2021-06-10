const btnedit = document.querySelectorAll('.btn-edit');
const formedit = document.querySelector('form#form-edit');

btnedit.forEach(btn => {
    btn.addEventListener('click', () => {
        var data = btn.parentElement.parentElement.querySelector('.content-single-table');

        formedit.setAttribute('action',data.dataset.url)
        document.querySelector('input#name').value = data.textContent

        formedit.classList.remove('hide');
    });
});

formedit.querySelector('button').addEventListener('click', (e) => {
    e.preventDefault()
    var inputvalue = document.querySelector('input#name').value;
    if ( inputvalue != "") {
        formedit.submit();
    }
})

const btndelete = document.querySelectorAll('.btn-delete');
const formdelete = document.querySelector('form#form-delete');

btndelete.forEach(btn => {
    btn.addEventListener('click',()=>{
        formdelete.setAttribute('action',btn.dataset.url);
        formdelete.submit();
    })
});