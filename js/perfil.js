document.getElementById('btn-detalles').addEventListener('click', function() {
    const detalles = document.getElementById('detalles');
    if (detalles.classList.contains('oculto')) {
        detalles.classList.remove('oculto');
        this.textContent = 'Ocultar Detalles';
    } else {
        detalles.classList.add('oculto');
        this.textContent = 'Mostrar Detalles';
    }
});

