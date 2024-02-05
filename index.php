<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <blockquote>
        <h1>Students Record</h1>
        <form action="">
            <label for="name">Name</label><br>
            <input type="text" id="name"><br>
            <label for="email">Email</label><br>
            <input type="email" id="email"><br>
            <label for="address">Address</label><br>
            <input type="text" id="address"><br><br>
            <button id="add_student">Add Student</button>
        </form>
        <hr>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="students_list"></tbody>
        </table>
    </blockquote>
    <script src="./js/custom.js"></script>
</body>

</html>