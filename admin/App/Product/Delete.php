<?php for ($i = 0; $i < sizeof($json_data['data']); $i++) { ?>
    <div class="modal fade show" id="Delthesis<?php echo $json_data['data'][$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <!-- form start -->
                <div class='modal-header'>
                    <h5 class='modal-title' id='Delthesis'>Delete Product</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form action="db/query.php" method="POST" enctype="multipart/form-data">

                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>

                            <input type="text" class="form-control" name="name" value="<?php echo $json_data['data'][$i]['name'] ?>" readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control" name="description" value="<?php echo $json_data['data'][$i]['description'] ?>" readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control" name="price" value="<?php echo $json_data['data'][$i]['price'] ?>" readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="path"  value="<?php echo $json_data['data'][$i]['path'] ?>"readonly>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger" name="DelProduct" value="<?php echo $json_data['data'][$i]['id'] ?>">ลบสินค้า</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<?php } ?>