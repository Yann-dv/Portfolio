// Prevent scrolling when modal is open

const closingBtn = document.getElementById('clode_modal_btn');
const nav = document.getElementById('navbar');

document.addEventListener("click", function (e) {
    let hasHref = e.target.hasAttribute('href');
    let linkToModal = e.target.getAttribute('href')
    if(hasHref) {
        if(linkToModal === '#contactModal') {
            console.log('modal open');
            document.body.classList.toggle("disable_oveflow");
            nav.classList.toggle("hidden");
        }
        else if(e.target === closingBtn ) {
            document.body.classList.toggle("disable_oveflow");
            nav.classList.toggle("hidden");
            console.log('modal close')
        }
}
    else {
        //nothing to do
    }
});
