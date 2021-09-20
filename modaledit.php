<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm"  >Add new book</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="edit.php" method="post">
                <p>Name: <input type="text" Name="name" /></p>
                <p>Autor: <input type="text" Name="autor" /></p>
                <p>Lang: <input type="text" Name="lang" /></p>
                <p><input type="button" /></p>
            </form>
        </div>
    </div>
</div>
//тут надо создать скрытый input