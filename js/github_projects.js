// Robert Leslie
// v2.0.0
// javascript program to pull project information from my backend api
// 2020

const content =  document.querySelector('.projectMain');
const WEBSITE_FINDER = "Website:";

// when the window loads, call my api and get the information returned
window.onload = async () =>{
    const response = await fetch('/app/projects');
    const data = await response.json();
    console.log(data);
    let curr = null;
    for(i = 0; i < data.length; i++){
        curr = data[i];

        var checkWebsite = atob(curr.readme);
        var websitePos = checkWebsite.indexOf(WEBSITE_FINDER);
        const el = document.createElement('div');
        // handles if the project has a website
        if(websitePos != -1){
            var website = checkWebsite.slice(websitePos + WEBSITE_FINDER.length+1);
            checkWebsite = checkWebsite.slice(0, websitePos-1);
            el.innerHTML = `<div class='content'><h4>${curr.name}</h4><p class="description">${curr.description}</p> <p class="readme">${checkWebsite}</p><a href=${website}>${curr.name} Link <i class="fas fa-angle-right"></i></a></div>`;
        }else{
            el.innerHTML = `<div class='content'><h4>${curr.name}</h4><p class="description">${curr.description}</p> <p class="readme">${checkWebsite}</p></div>`;
        }
        content.appendChild(el);
    }
    
}