
const $newBtn = document.getElementById("new");
const $newModal = document.getElementById("new-modal");

const $editModal = document.getElementById("edit-modal");

const $editBtns = document.querySelectorAll('.edit-btn');
const closeBtns = document.getElementsByClassName('close');

$editBtns.forEach(editBtn => {
    editBtn.addEventListener('click', function(e) {
        const image = editBtn.parentElement.childNodes[0].childNodes[0].src;
        const titulo = editBtn.parentElement.childNodes[1].textContent;
        const sinopsis = editBtn.parentElement.childNodes[2].textContent;

        $editModal.style.display = 'block';

        const iTitulo = $editModal.querySelector('[name="titulo"]');
        const iImg = $editModal.querySelector('[name="imagen"]');
        const iSis = $editModal.querySelector('[name="sinopsis"]');
        const id = editBtn.getAttribute('data-id');

        $editModal.querySelector('form').setAttribute('data-id', id)
        iTitulo.value = titulo;
        iImg.value = image;
        iSis.value = sinopsis;
    })
})

for (let closeBtn of closeBtns) {
    closeBtn.onclick = function() {

        $newModal.querySelector(".error").style.display = 'none';
        $editModal.querySelector(".error").style.display = 'none';

        $editModal.style.display = 'none';
        $newModal.style.display = 'none';
    }
}

$newBtn.addEventListener('click', function() {
    $newModal.querySelector(".error").style.display = 'none';
    $newModal.style.display = 'block';
});