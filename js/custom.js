"use strict"

function getStudents() { 
    fetch('http://localhost/ajaxCRUD/api.php').then((res)=>{
        return res.json();
    }).then((data)=>{
        console.log(data);
    }).catch((err)=>{
        console.log(err);
    });
 }

 getStudents();