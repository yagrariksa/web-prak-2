const modalbtn = document.querySelectorAll('.modal-btn-trigger');

modalbtn.forEach(button => {
    button.addEventListener('click',(e)=>{
        var modal = document.querySelector(e.target.dataset.modal);
        modal.classList.remove('hide');

        var close = modal.querySelector('.modal-close');
        close.addEventListener('click',()=>{
            modal.classList.add('hide');
        })

        var cancel = modal.querySelector('.btn-cancel');
        cancel.addEventListener('click',()=>{
            modal.classList.add('hide');
        })
    })
});