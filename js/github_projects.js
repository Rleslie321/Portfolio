// Robert Leslie
// javascript program to pull all of my projects from my github and add them to my page
// uses github rest api
// 2020


// query for my repos
const searchQueryURL = 'https://api.github.com/users/Rleslie321/repos';

// when the page loads fetch my repos from github
window.addEventListener('DOMContentLoaded', function (e) {
    return fetch(searchQueryURL)
        .then(result => result.json())
        .then(response => printResponse(response))
        .catch(err => console.log(err))
});

// global vars
var curr = null;
const mydiv = document.querySelector('.projectMain');

// for each repo create an element and then get the readme from each repo
function printResponse(response){
    for(i = 0; i < response.length; i++){
        curr = response[i];
        waitOnMe(curr.name);
        const el = document.createElement('div');
        el.innerHTML = `<div class='content'><h4>${curr.name}</h4><p>${curr.description}</p> <p></p></div>`;
        mydiv.appendChild(el);
    }
}

// function to set the readme content on the page after the information is received
// the content also needs to be base64 decoded hence the atob
// children[0] is the h2 element, children[2] is the empty paragraph previously added
function setMe(readme, name){
    const content  = document.querySelectorAll('.content');
    content.forEach((item)=>{
        if(item.children[0].innerHTML == name){
            item.children[2].innerHTML = atob(readme.content);
        }
    })
}

// function to get the readme from each repo and call the setter for the information to be displayed
function waitOnMe(name){
    const req = async () => { await fetch(`https://api.github.com/repos/Rleslie321/${name}/readme`)
        .then(result => result.json())
        .then(readme => setMe(readme, name))
        .catch(err => console.log(err))
    }
    return req();
}