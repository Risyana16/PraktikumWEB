



let atas = document.getElementById("totop");


window.addEventListener("scroll",function(){
    if(scrollY > 500){
        atas.style.display = "block"
    }else{
        atas.style.display = "none"
    }
})

window.addEventListener("click",function(){
    window.scrollTo ({
        top:0,
        behavior : "smooth"
    })
})