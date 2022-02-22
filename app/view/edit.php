<form action="" method="post">
    <input type="text" name="name" value="<?php echo $product->name?>">
    <input type="text" name="price" value="<?php echo $product->price?>">
    <input type="text" name="quantity" value="<?php echo $product->quantity?>">
<!--    <input type="text" name="date" value="--><?php //echo $product->datetime?><!--">-->
    <input type="text" name="description" value="<?php echo $product->description?>">
    <input type="text" name="category_id" value="<?php echo $product->category_id?>">
    <button>Edit</button>
</form>