/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
var rootElement = document.documentElement;

function handleScroll(){
    var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
    if ((rootElement.scrollTop / scrollTotal) > 0.80){
        scrollToTopBtn.classList.add("showBtn");
    }
    else{
        scrollToTopBtn.classList.remove("showBtn");
    }
}

function scrollToTop(){
    rootElement.scrollTo({top:0, behavior:"smooth"});
}

scrollToTopBtn.addEventListener("click", scrollToTop);
document.addEventListener("scroll", handleScroll);

