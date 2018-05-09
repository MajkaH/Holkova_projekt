<div class="container">
    <?php if(!empty($success_msg)){ ?>
        <div class="col-xs-12">
            <div class="alert alert-success"><?php echo $success_msg; ?></div>
        </div>
    <?php }elseif(!empty($error_msg)){ ?>
        <div class="col-xs-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
    <?php } ?>
    <div class="row">
        <h1>Kurz</h1>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Kurz <a href="<?php echo site_url('kurz/add/'); ?>" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th width="5%">ID</th>
                        <th width="30%">Oblast_kurzu</th>
                        <th width="20%">Cena</th>

                    </tr>
                    </thead>
                    <tbody id="userData">
                    <?php if(!empty($kurz)): foreach($kurz as $kurz): ?>
                        <tr>
                            <td><?php echo '#'.$kurz['id_Kurz']; ?></td>
                            <td><?php echo $kurz['Oblast_kurzu']; ?></td>
                            <td><?php echo $kurz['Cena']; ?></td>

                            <td>
                                <a href="<?php echo site_url('kurz/view/'.$kurz['id']); ?>" class="glyphicon glyphicon-eye-open"></a>
                                <a href="<?php echo site_url('kurz/edit/'.$kurz['id']); ?>" class="glyphicon glyphicon-edit"></a>
                                <a href="<?php echo site_url('kurz/delete/'.$kurz['id']); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr><td colspan="4">Kurz nenájdený.....</td></tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>