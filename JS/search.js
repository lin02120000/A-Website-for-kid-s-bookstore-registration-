//make search bar works functionnally
//Author: Lin Chen, Junjie Xu, Yang Xu

//search by book title
function searchName(){
    const searchInput = document.getElementById("searchbar").value;
    const bookTitle = document.getElementsByClassName("name");
    const bookAuthor = document.getElementsByClassName("author");
    for(let i = 0; i < bookTitle.length; i++){
        const items = document.getElementsByClassName("flip-box-one");

        if((!bookTitle[i].textContent.toLowerCase().includes(searchInput.toLowerCase())) && (!bookAuthor[i].textContent.toLowerCase().includes(searchInput.toLowerCase()))){
            items[i].style.display = "none";
        }else{
            items[i].style.display = "";
        }
    }
}

//search by author name
// function searchAuthor(){
//     const searchInput = document.getElementById("searchbar").value;

//     const bookAuthor = document.getElementsByClassName("author");

//     for(let i = 0; i < bookAuthor.length; i++){
//         const items = document.getElementsByClassName("flip-box-one");

//         if(!bookAuthor[i].textContent.toLowerCase().includes(searchInput.toLowerCase())){
//             items[i].style.display = "none";
//         }else{
//             items[i].style.display = "";
//         }
//     }
// }
//search conbination
//document.getElementById("searchbar").addEventListener("oninput",searchName);
// x.addEventListener("oninput",searchAuthor);