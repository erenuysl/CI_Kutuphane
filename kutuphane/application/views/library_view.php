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
            max-width: 800px;
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
            margin-bottom: 5px;
        }

        .radio-group {
            display: flex;
            gap: 20px;
        }

        button, input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover, input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Added style for buttons */
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

        th, td {
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
    <title>Kitap Ekleme Modülü</title>
</head>
<body>
    <div id="container">
        <a href="<?php echo base_url("library") ?>"><button>Kitap Ekleme</button></a>
        <a href="<?php echo base_url("type") ?>"><button>Tür Ekleme</button></a>
        <a href="<?php echo base_url("authors") ?>"><button>Yazar Ekleme</button></a>
        <h1>Kitap Ekleme Modülü</h1>
        <div id="body">
            
            <form action="<?php echo base_url('library/save') ?>" method="post">

                <label for=""><b>Kitap Adı</b></label>
                <input type="text" name="name">

                <label for="cars"><b>Yazar</b></label>
                <select name="author">
                    <?php    foreach($authors as $author){  ?>
                    <option value="<?php echo $author->id ?>"><?php echo $author->name." ".$author->surname ?></option>
                    <?php } ?>
                </select>

                <label for="cars"><b>Tür</b></label>
                <select name="type">
                    <?php    foreach($types as $type){  ?>
                    <option value="<?php echo $type->id ?>"><?php echo $type->name ?></option>
                    <?php } ?>
                </select>

                <label for=""><b>Yayınlanma Tarihi</b></label>
                <input type="date" name="publish_date">

                <label for=""><b>Durum</b></label>
                <div class="radio-group">
                    <input type="radio" name="status" value="1"checked id="active">
                    <label for="active">Aktif</label>

                    <input type="radio" name="status" value="0" id="inactive">
                    <label for="inactive">Pasif</label>
                </div>

                <input type="submit" value="Formu Gönder">

            </form>

            <h2>Kitap Listesi</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kitap Adı</th>
                        <th>Yazar</th>
                        <th>Tür</th>
                        <th>Yayınlanma Tarihi</th>
                        <th>Durum</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book): ?>
                        <tr>
                            <td><?php echo $book->id; ?></td>
                            <td><?php echo $book->name; ?></td>
                            <td><?php echo getAuthorName($book->author); ?></td>
                            <td><?php echo getTypeName($book->type); ?></td>
                            <td><?php echo $book->publish_date; ?></td>
                            <td data-status="<?php echo $book->status; ?>"><?php echo $book->status == 1 ? 'Aktif' : 'Pasif'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</body>

</html>
