<?php for ($i = 0; $i < sizeof($json_data['data']); $i++) { ?>
    <div class="modal fade show" id="Editthesis<?php echo $json_data['data'][$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <!-- form start -->
                <div class='modal-header'>
                    <h5 class='modal-title' id='Editthesis'>Edit Product</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="db/query.php" method="POST" enctype="multipart/form-data">

                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>

                            <input type="text" class="form-control" name="name" value="<?php echo $json_data['data'][$i]['name'] ?>" required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control" name="description" value="<?php echo $json_data['data'][$i]['description'] ?>" required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control" name="price" value="<?php echo $json_data['data'][$i]['price'] ?>" required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control" name="path"  value="<?php echo $json_data['data'][$i]['path'] ?>"required>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning" id="EditProduct" name="EditProduct" value="<?php echo $json_data['data'][$i]['id'] ?>">แก้ไขสิ้นค้า</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php  } ?>