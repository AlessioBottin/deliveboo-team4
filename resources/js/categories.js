let categoryBox = document.querySelectorAll(".category");

categoryBox.forEach(element => {
    element.style.backgroundColor = "white";
    element.style.color = "black";
    element.addEventListener('click', ()=>{
        // Change color and Bg color at click
        element.style.backgroundColor = element.style.backgroundColor === "white" ? "green" : "white";
        element.style.color = element.style.color === "black" ? "white" : "black";
        
        // Add or remove "selected" class at click
        if (element.classList.contains("selected")){
            element.classList.remove("selected");
        }else{
            element.classList.add("selected");
        }
    });
});
