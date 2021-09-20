<!DOCTYPE html>
<div class="modal" id="add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <p>Name:   <input type="text"   Name="addName"  class="addName" /></p>
            <p>Autor: <input type="text"    Name="addAutor" class="addAutor" /></p>
            <p>Lang: <input type="text"     Name="addLang"  class="addLang" /></p>
            <button class="btn btn-success" id="addBook" >Add</button>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade"  id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редактировать книгу</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit" method="post" class="itEdit">
                    <p>id: <input type="int" Name="id"  id="bookId" class="editId" /></p>
                    <p>Book: <input type="text" Name="Book" id="bookBook" class="editBook"  /></p>
                    <p>Autor: <input type="text" Name="Autor" id="bookAutor" class="editAutor" /></p>
                    <p>Lang: <input type="text" Name="Lang" id="bookLang" class="editLang" /></p>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save">Save changes</button>
            </div>
        </div>
    </div>
</div>
</html>