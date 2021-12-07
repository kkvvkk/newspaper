function changeNavLinksStyles() 
{
    let main = document.getElementsByName('main');
    //alert(main.classList)
    main.classList.remove('nav-link active');
    main.classList.add('nav-link');
    let articles = document.getElementsByName('articles');
    articles.classList.remove('nav-link');
    articles.classList.add('nav-link active');
    
}
window.addEventListener('DOMContentLoaded', changeNavLinksStyles(), false);
//window.onload() = changeNavLinksStyles();
