<a href="index.php?page=product-create">Create</a>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Date</th>
        <th>Description</th>
        <th>Category id</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key=>$product):?>
    <tr>
        <td><?php echo $key+1?></td>
        <td><?php echo $product->name?></td>
        <td><?php echo $product->price?></td>
        <td><?php echo $product->quantity?></td>
        <td><?php echo $product->date?></td>
        <td><?php echo $product->description?></td>
        <td><?php echo $product->category_id?></td>
        <td onclick="return confirm('Are you sure???')"><a href="index.php?page=product-delete&id=<?php echo $product->id?>">Delete</a></td>
        <td><a href="index.php?page=product-edit&id=<?php echo $product->id?>">Edit</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>

</table>