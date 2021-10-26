const portfolio = document.querySelector('#portfolioList');

const addProject = index => {
    for(let i = 0; i < index; i++) {
    const item = document.createElement('div')
    item.setAttribute('class', 'item')
    portfolio.insertAdjacentElement('beforeend', item)
    // Autre manière : container.appendChild(item)
    console.log("Project created");
    }
}

addProject(3);