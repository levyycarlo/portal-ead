function showForm(formId) {
    var form = document.getElementById(formId + 'Form');
    if (form) {
        form.style.display = 'block';
    }
}

function hideForm(formId) {
    var form = document.getElementById(formId + 'Form');
    if (form) {
        form.style.display = 'none';
    }
}
