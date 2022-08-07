$('#userModal').on('show.bs.modal', function (e) {
    e.currentTarget.querySelectorAll('form').forEach(f => f.reset());
    let action = e.relatedTarget.ariaLabel;
    e.currentTarget.querySelector('#userModalLabel').textContent = '';
    e.currentTarget.querySelector('#userModalLabel').textContent = `${action} Usuario`;
    if (action === 'Editar') {
        e.currentTarget.querySelector('#name').value = e.relatedTarget.parentNode.parentNode.children[1].textContent;
        e.currentTarget.querySelector('#email').value = e.relatedTarget.parentNode.parentNode.children[2].textContent;
        e.currentTarget.querySelector('.body-create').classList.add('d-none');
        e.currentTarget.querySelector('.body-edit').classList.remove('d-none');
    } else {
        e.currentTarget.querySelector('.body-edit').classList.add('d-none');
        e.currentTarget.querySelector('.body-create').classList.remove('d-none');
    }
});
