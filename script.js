document.getElementById("userForm").addEventListener("submit",function(e){

e.preventDefault();

let formData=new FormData(this);

fetch("insert.php",{

method:"POST",

body:formData

})

.then(response=>response.text())

.then(data=>{

location.reload();

});

});


function toggleStatus(id){

let formData=new FormData();

formData.append("id",id);

fetch("toggle.php",{

method:"POST",

body:formData

})

.then(response=>response.text())

.then(data=>{

document.getElementById("status"+id).innerHTML=data;

});

}