<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR AZIZAH</title>
    <style>
        body {
            font-family: Courier, sans-serif;
            background-color: #2f4f4f;
            margin: 100;
            padding-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100hv;
            
        }

        .calculator {
            background-color: #BDB76B;
            width: 600px;
            height: 400px;
            padding: 50px;
            border-radius: 50px;
            box-shadow: 5px 5px 10px; rgba(0, 0, 0, 0,1);
            text-align: left;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        input[type="number"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 400px;
            border: 1px solid #ccc;
            border-radius: 50px;
            outline: none;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin:  5px;
            border: 5;
            border-radius: 10px;
            cursor: pointer;
            background-color: #D3D3D3;
            color: dark;
            font-size: 16px;
            transition: background-color 0,3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>


</head>
<body>
    <div class="calculator">
    <h1><center>KALKULATOR AZIZAH</center></h1>
    <form action="{{route ('proses.store')}}" method="post">
        @csrf
        <center>
        <label for="a">Input Angka Pertama :</label><br>
        <input type="number" name="a" id=""><br><br>
        <label for="b">Input Angka Kedua :</label><br>
        <input type="number" name="b" id=""><br><br>
        <input type="submit" value="+" name="op">
        <input type="submit" value="_" name="op">
        <input type="submit" value=":" name="op">
        <input type="submit" value="x" name="op">
        </center>

    
    </form>
    </div>
</body>
</html>