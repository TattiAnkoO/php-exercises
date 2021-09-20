<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" />
    <title>MY LIBRARY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style type="text/css">
    h1{
        font-style: oblique;
        font-weight: 800;
        padding-left: 250px;
    }
    table {
        font-style: oblique;
        border: 5px double #1b65fd;
        border-spacing: 3px 4px;
        background: rgba(70, 225, 246, 0.91);
    }
    th{
        padding-right: 100px;
    }
    td {
        font-style: oblique;
    }
    }
</style>
<body>
    <h1> My library</h1>
<button class="btn btn-success add" data-toggle="modal" data-target="#add" type=".add"> Add new book</button>
 <table>
       <thead>
        <tr>
            <th></th>
            <th>Autor</th>
            <th>Book</th>
            <th>Lang</th>
            <th>Edit</th>
            <th>Action</th>
        </tr>
       </thead>
       <tbody id="table">
       <?php if (!empty($v)): ?>
        <?php foreach ($v as $a):?>
           <tr class="line<?php echo $a['id'] ?>">
               <td><?php echo $a['id'] ?> </td>
               <td><?php echo $a['Autor'] ?></td>
               <td><?php echo $a['Book'] ?></td>
               <td><?php echo  $a['Lang'] ?></td>
               <td>
                   <button class="btn btn-warning edit"   data-toggle="modal" data-target="#edit" id="<?php echo $a['id'] ?>"  >Edit</button>
               </td>
               <td><button class="btn btn-danger del"  id="<?php echo $a['id'] ?>" > Delete </button> </td>
           </tr>
       <?php endforeach; ?>
       <?php endif; ?>
       </tbody>
    <script>
        $(document).ready( function (){

            $("body").on('click', '.del', function (){
                    $(this).closest().remove();
                    var self = $(this);
                $.ajax({
                    url:"functions.php",
                    type:"POST",
                    dataType: "json",
                    data: {param: 'delete', id:$(this).attr('id')},
                    success: function  (){
                        $(self).parents('tr').remove();
                        console.log ("hey you")
                    }
                })
            });

            $("#addBook").click(function () {
                let Autor = document.querySelector ('.addAutor').value;
                let Book = document.querySelector ('.addName').value;
                let Lang = document.querySelector ('.addLang').value;
                $.ajax({
                    url: "functions.php",
                    type: "POST",
                    dataType: "json",
                    data: {param: 'add', "Autor": Autor, "Book": Book, "Lang": Lang},
                    success: function (data) {
                        $.each(data, function (index, value) {
                            $("#table").append("<tr><td>" + value['id'] + "\t<td>" + value['Autor'] + "\t<td>" + value['Book'] + "\t<td>" + value['Lang'] + "\t <td> <button class=\"btn btn-warning edit\" data-toggle=\"modal\" data-target=\"#edit\">Edit\n" +
                                " </button> <td> <button class=\"btn btn-danger del\"  id=\"del\">Delete\n" + " </button>\t");
                          // console.log (value)
                            console.log (value['id'])
                            console.log (value['Autor'])
                            console.log (value['Book'])
                            console.log (value['Lang'])
                            console.log ("hey you you")
                        })
                    }
                });
            })

            $("body").on('click', '.edit', function (){
              var myBookID = $(this).attr('id')
                $(".modal-body #bookId").val( myBookID );
                var myBookBook = $(this).attr('Book')
                $(".modal-body #bookBook").val( myBookBook );
                console.log ('say something');
                $.ajax({
                    url:"functions.php",
                    type:"POST",
                    dataType: "json",
                    data: $(this).attr('id') + $(this).attr('Book'),
                  success: function (data) {
                      //  $('#bookId').show().html(data);
                      //  $('#bookBook').show().html(data);
                        console.log ('say something');

                    }
                    })
                })
        })

    </script>
        <?php include_once('modal.php'); ?>
</body>
</html>
