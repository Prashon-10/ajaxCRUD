"use strict";

function getStudents() {
  fetch("http://localhost/ajaxCRUD/api.php")
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      let output = "";
      data.map((student, index) => {
        output += `<tr>
            <td>${++index}</td>
            <td>${student.name}</td>
            <td>${student.email}</td>
            <td>${student.address}</td>
            <td>
                <button>Edit</button>
                <button>Delete</button>
            </td>
            </tr>`;
      });
      document.getElementById("students_list").innerHTML = output;
    })
    .catch((err) => {
      console.log(err);
    });
}

getStudents();
