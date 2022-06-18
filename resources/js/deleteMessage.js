const deleteForms = document.querySelectorAll('.delete-form');
console.log(deleteForms);



deleteForms.forEach(element => {
    const title = element.getAttribute('data-name');
    element.addEventListener('submit', (e)=>{
        e.preventDefault();
        const accept = confirm(`Sei sicuro di eliminare il dato: ${title}`);
        if (accept) e.target.submit();
    })

});
