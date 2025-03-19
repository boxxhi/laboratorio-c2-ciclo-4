const modalsForms = document.querySelectorAll('.modal > div > form');

modalsForms.forEach(l => {
    l.addEventListener('submit', async function(e) {
        e.preventDefault();

        const data = new URLSearchParams(new FormData(e.target))
        const pelicula = l.parentElement.parentElement.querySelector('[data-id]');
        if (pelicula) {
            data.append('id', pelicula.getAttribute("data-id"));
        }
        
        const p = l.parentElement.querySelector('.error');
        let failed = false;

        try {
            const response = await fetch(l.action, {
                method: "POST",
                body:data,
                headers: {
                    "Content-Type":"application/x-www-form-urlencoded"
                }
            });

            const text = await response.text();
            if (!text.includes('exito')){ 
                failed = true;
            }

        } catch {
            failed = true;
        }
        
        if (failed) {
            p.style.display = 'block';
            return;
        }

        l.parentElement.parentElement.style.display = 'none';

        location.reload();
        
    });
})

async function deleteAjax(id) {
    const shouldDelete = confirm('Estas seguro de eliminar?');
    if (!shouldDelete) {
        return;
    }

    const data = new URLSearchParams({
        'id':id
    })

    const response = await fetch('actions/delete.php', {
        method: 'POST',
        body:data,
        headers: {
            "Content-Type":"application/x-www-form-urlencoded"
        }
    });

    const text = await response.text();
    if (!text.includes('exito')){ 
        alert('Error al eliminar');
        return;
    }

    alert('Eliminado correctamente');
    location.reload();

}