require('./bootstrap');
import 'bootstrap';

const deleteBtnArr = document.querySelectorAll('.delete');

deleteBtnArr.forEach(btn => {
    btn.addEventListener('click', function(){
       const eleConfirm = this.parentElement.querySelector('.delete-confirm');
       eleConfirm.classList.toggle('d-none')
    })
});

console.log(deleteBtnArr);
