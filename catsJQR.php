<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>KOTISHE</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<div>

    <table >
        <thead>
        <tr>
            <th>Cat</th>
            <th>Number</th>
        </tr>
        </thead>
        <tbody id="table" class="line" >
        <td><?php echo $cats[[0]]?> </td>
        <td><?php echo $cats[[1]] ?></td>
        </tbody>
    </table>
</div>
<script>
    $.ajax({
        url: "cats.php",
        type: "POST",
        dataType: "json",
        success: function (dataType) {
            $.each(dataType, function (cat, numb) {
                $("#table").append("<tr><td>"+numb[0]+"\t<td>"+numb[1]+"\t\t");
                console.log (numb[0])
                console.log (numb[1])
            })
        }
    });
</script>
</body>