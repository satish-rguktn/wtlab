<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-color: green;
            font-family: Arial;
        }

        .box {
            width: 300px;
            margin: 150px auto;
            background-color: red;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            border: 2px solid blue;
        }

        h2 {
            color: black;
        }

        input {
            width: 90%;
            padding: 8px;
            margin-top: 10px;
            font-size: 14px;
        }

        button {
            width: 45%;
            padding: 10px;
            margin-top: 15px;
            font-size: 16px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
        }

        .reset {
            background-color: gray;
        }
    </style>
</head>

<body>

    <div class="box">
        <h2>Login</h2>

        <form>
            <input type="text" placeholder="Username"><br>
            <input type="password" placeholder="Password"><br>

            <button type="submit">Submit</button>
            <button type="reset" class="reset">Reset</button>
        </form>
    </div>

</body>
</html>
