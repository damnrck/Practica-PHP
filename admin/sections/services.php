<?php include("../template/header.php"); ?>

<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNAME=(isset($_POST['txtNAME']))?$_POST['txtNAME']:"";
$txtIMG=(isset($_FILES['txtIMG']['name']))?$_FILES['txtIMG']['name']:"";
$action=(isset($_POST['action']))?$_POST['action']:"";

include("../config/access.php");

switch($action){
    case"Add":
        $SQLsentence= $connection->prepare("INSERT INTO servicios (name,image) VALUES (:name,:image);");
        $SQLsentence->bindParam(':name',$txtNAME);
        $date= new DateTime();
        $fileNAME=($txtIMG!="")?$date->getTimestamp()."_".$_FILES["txtIMG"]["name"]:"default.jpg";
        $tmpIMG=$_FILES["txtIMG"]["tmp_name"];
        if($tmpIMG!=""){
            move_uploaded_file($tmpIMG,"../../img".$fileNAME);
        }
        $SQLsentence->bindParam(':image',$fileNAME);
        $SQLsentence->execute();
        break;
    case"Modified":
        $SQLsentence= $connection->prepare("UPDATE servicios SET name=:name WHERE id=:id");
        $SQLsentence->bindParam(':name',$txtNAME);
        $SQLsentence->bindParam(':id',$txtID);
        $SQLsentence->execute();
        if($txtIMG!=""){
            $SQLsentence= $connection->prepare("UPDATE servicios SET image=:image WHERE id=:id");
            $SQLsentence->bindParam(':image',$txtIMG);
            $SQLsentence->bindParam(':id',$txtID);
            $SQLsentence->execute();
        }
        break;
    case"Cancel":
        echo "Press Cancel";
        break;
    case"Select":
        $SQLsentence= $connection->prepare("SELECT * FROM servicios WHERE id=:id");
        $SQLsentence->bindParam(':id',$txtID);
        $SQLsentence->execute();
        $service=$SQLsentence->fetch(PDO::FETCH_LAZY);
        $txtNAME=$service['name'];
        $txtIMG=$service['image'];
        break;
    case"Delete":
        $SQLsentence= $connection->prepare("DELETE FROM servicios WHERE id=:id");
        $SQLsentence->bindParam(':id',$txtID);
        $SQLsentence->execute();
        break;
}

$SQLsentence= $connection->prepare("SELECT * FROM servicios");
$SQLsentence->execute();
$listServices=$SQLsentence->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Admin Services
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class = "form-group">
                    <label for="txtID">ID</label>
                    <input type="text" class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID Service">
                </div>
                <div class = "form-group">
                    <label for="txtNAME">Name</label>
                    <input type="text" class="form-control" value="<?php echo $txtNAME; ?>" name="txtNAME" id="txtNAME" placeholder="Name Service">
                </div>
                <div class = "form-group">
                    <label for="txtIMG">Image</label>
                    <?php echo $txtIMG; ?>
                    <input type="file" class="form-control" name="txtIMG" id="txtIMG" placeholder="Image">
                </div>
                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="action" value="Add" class="btn btn-success">Add</button>
                    <button type="submit" name="action" value="Modified" class="btn btn-warning">Modified</button>
                    <button type="submit" name="action" value="Cancel" class="btn btn-info">Cancel</button>
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
                    <?php foreach($listServices as $service){ ?>
                    <tr>
                        <td><?php echo $service['id'];?></td>
                        <td><?php echo $service['name'];?></td>
                        <td><?php echo $service['image'];?></td>
                        <td>
                        <form method="post">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $service['id'];?>" />
                            <input type="submit" name="action" value="Select" class="btn btn-primary" />
                            <input type="submit" name="action" value="Delete" class="btn btn-danger" />
                                
                        </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
</div>

<?php include("../template/footer.php"); ?>