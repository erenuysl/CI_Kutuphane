<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        .radio-group label {
            display: inline-block;
            margin-right: 10px;
        }

        button,
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover,
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #container button {
            margin-right: 10px;
        }

        h2 {
            margin-top: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: white;
        }
       


      td[data-status="0"] {
         background-color: #ff0000; 
        color: white; 
     }


     </style>
    <title>Yazar Ekleme</title>
</head>

<body>

    <div id="container">
        <a href="<?php echo base_url("library") ?>"><button>Kitap Ekleme</button></a>
        <a href="<?php echo base_url("type") ?>"><button>Tür Ekleme</button></a>
        <a href="<?php echo base_url("authors") ?>"><button>Yazar Ekleme</button></a>
        <h1>Yazar Ekleme Modülü</h1>
        <div id="body">

            <form action="<?php echo base_url('authors/save') ?>" method="post">

                <label for=""><b>Yazar Adı</b></label>
                <input type="text" name="name">

                <label for=""><b>Yazar Soyadı</b></label>
                <input type="text" name="surname">

                <label for=""><b>Durum</b></label>
                <div class="radio-group">
                    <input type="radio" name="status" value="1" id="active">
                    <label for="active">Aktif</label>

                    <input type="radio" name="status" value="0" id="inactive">
                    <label for="inactive">Pasif</label>
                </div>

                <input type="submit" value="Formu Gönder">

            </form>
            <h2>Tür Listesi</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Yazar Adı</th>
                        <th>Yazar Soyadı</th>
                        <th>Durum</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($authors as $author): ?>
                        <tr>
                            <td ><?php echo $author->id; ?></td>
                            <td ><?php echo $author->name; ?></td>
                            <td ><?php echo $author->surname; ?></td>
                            <td data-status="<?php echo $author->status; ?>"><?php echo $author->status == 1 ? 'Aktif' : 'Pasif'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>

</body>

</html>
