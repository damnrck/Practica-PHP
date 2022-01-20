<?php include("../template/header.php"); ?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Admin Services
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class = "form-group">
                    <label for="txtID">ID</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Service">
                </div>
                <div class = "form-group">
                    <label for="txtNAME">Name</label>
                    <input type="text" class="form-control" name="txtNAME" id="txtNAME" placeholder="Name Service">
                </div>
                <div class = "form-group">
                    <label for="txtIMG">Image</label>
                    <input type="file" class="form-control" name="txtIMG" id="txtIMG" placeholder="Image">
                </div>
                <div class="btn-group" role="group" aria-label="">
                    <button type="button" name="action" value="Add" class="btn btn-success">Add</button>
                    <button type="button" name="action" value="Modified" class="btn btn-warning">Modified</button>
                    <button type="button" name="action" value="Cancel" class="btn btn-info">Cancel</button>
                </div>
            </form>
        </div>
    </div> 
</div>


<div class="col-md-7">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Wordpress</td>
                        <td>Feature.jpg</td>
                        <td>Select | Delete</td>
                    </tr>
                </tbody>
            </table>
</div>

<?php include("../template/footer.php"); ?>