<h1><?=$product['name']?></h1>
<p><?=$product['description']?></p>
<?php foreach ($product['images'] as $image):?>
    <img width="200"  src="/img/small/<?=$image['path']?>" alt="">
<?php endforeach;?>

    <input id="qty_input" type="number" value="0" name="qty">
    <input data-id="<?=$product['id']?>" id="add_to_card" type="submit" value="Добавить">
<script>

    $(function () {
        $("#add_to_card").on('click', function () {
            var id = $(this).data('id');
            var qty = $("#qty_input").val();
            console.log(id);
            console.log(qty);

            $.ajax({
                url : "/basket/add",
                type: "POST",
                data: {
                    product_id: id,
                    qty: qty
                },
                success : function (response) {
                    response = JSON.parse(response);
                    if(response.status == 'success'){
                        alert(response.message)
                    }
                }
            })
        })
    })
</script>