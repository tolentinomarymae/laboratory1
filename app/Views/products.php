<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
   <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            font-size:.8vw;
            max-width: 100%;

        }
        .container {
            max-width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #8ecae6;
            color: black;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #fefae0;
            border: 1px;
            border-bottom: #8ecae6;
            color: black;
            
        }
        a {
            text-decoration: none;
            color: #333;
            margin-right: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Add Product</h2>
                <form action="/save" method="post">
                    <label for="productName">Product Name:</label><br>
                    <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                    <input type="text" name="productName" placeholder="Product Name"
                        value="<?= isset($pro['productName']) ? $pro['productName'] : '' ?>"><br>

                    <label for="productDescription">Product Description:</label><br>
                    <input type="text" name="productDescription" placeholder="Product Description"
                        value="<?= isset($pro['productDescription']) ? $pro['productDescription'] : '' ?>"><br>

                    <label for="productCategory">Product Category:</label><br>
                    <select name="productCategory">
                        <option value="">Select a category</option> 
                        <?php if (!is_null($categories) && is_array($categories)) : ?>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category ?>">
                                    <?= $category ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select><br>

                    <label for="productQuantity">Product Quantity:</label><br>
                    <input type="number" name="productQuantity" placeholder="Product Quantity"
                        value="<?= isset($pro['productQuantity']) ? $pro['productQuantity'] : '' ?>"><br>

                    <label for="productPrice">Product Price:</label><br>
                    <input type="text" name="productPrice" placeholder="Product Price"
                        value="<?= isset($pro['productPrice']) ? $pro['productPrice'] : '' ?>"><br>

                    <input type="submit" value="Save">
                </form>
            </div>
            <div class="col-md-7">
                <h2>Products</h2>
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Category</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Delete/Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product as $pr): ?>
                            <tr>
                                <td><?= $pr['ProductName'] ?></td>
                                <td><?= $pr['ProductDescription'] ?></td>
                                <td><?= $pr['ProductCategory'] ?></td>
                                <td><?= $pr['ProductQuantity'] ?></td>
                                <td><?= $pr['ProductPrice'] ?></td>
                                <td>
                                    <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="/edit/<?= $pr['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
