function myfun(){
    let search = document.getElementById("inp").value.toUpperCase();
    let table =document.getElementsByTagName("table");
    let tr =document.getElementsByTagName("tr");
    let front = document.querySelector(".main")
    for(let i=0; i<tr.length; i=i+1){
        let td = tr[i].getElementsByTagName("td")[0];
        if(td){
            let text = td.innerText;
            if(text.toUpperCase().indexOf(search) > -1){
                tr[i].style.display="";
            }else{
                tr[i].style.display="none";
    front.style.display="none";
            }
        }
    }
    if(search == ""){
        front.style.display="flex";
    }
    console.log(search);
}

   

function nav(){
let nav = document.querySelector(".nav");
nav.style.display="block";
let login = document.querySelector(".login");
    login.style.display="none";

}
function login(){
    let login = document.querySelector(".login");
    login.style.display="block";
    let nav = document.querySelector(".nav");
nav.style.display="none";
    
    }

    let review = document.querySelectorAll(".coustmer");
    let count = 0;
    console.log(review);
    
    review.forEach(function(coustmer, index){
        coustmer.style.left=`$(index * 100)%`
    });

    
    function next(){
        count ++;
        if(count == review.length){
            count=0;
        }
        barn();
    }
    function pre(){
        count --;
        if(count == -1){
            count= review.length-1;
        }
        barn();
    }

    function barn(){
        review.forEach(function(coustmer){
            coustmer.style.transfrom = `translateX(-${count * 100}%)`;
        })
   
    }