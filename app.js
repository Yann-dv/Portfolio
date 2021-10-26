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

fetch ('https://api.github.com/users/Yann-dv/repos')
.catch(error =>  {throw error})
.then(res => {
    if(res.ok){
    res.json().then(data => {
        console.table(res)
        addProject(data.length)
    })
    } else {
        console.log("Github repositories error");
    }
})
