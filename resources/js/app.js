import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// repupero pulsanti dalla tabella
const deletButtons = document.querySelectorAll('.delete-button');

deletButtons.forEach((button) => {
    button.addEventListener('click', function(){
        let project_slug = button.getAttribute('data-projectslug');

        let url = `${window.location.origin}/admin/projects/${project_slug}`;

        let form_delete = document.getElementById('form-delete');

        form_delete.setAttribute('action', url);
    })
})
