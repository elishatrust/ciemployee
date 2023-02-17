
<div class="container p-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class=" p-3"><?=$table_title;?>
                    <a href="<?php echo base_url('employee/create');?>" class="text-white float-right btn btn-sm bg-primary fw-normal fs-6">Add Employee</a>                        
                    </h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered" id="dataTable1">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">FIRST NAME</th>
                                <th scope="col">LAST NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <?php foreach ($empValue as $row) : ?>
                        <tbody>
                            <tr class="cursor:pointer">
                                <th scope="row"><?= $row->id; ?></th>
                                <td><?= $row->first_name; ?></td>
                                <td><?= $row->last_name; ?></td>
                                <td><?= $row->email; ?></td>
                                <td><?= $row->phone; ?></td>
                                <td><?= $row->address; ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="<?= base_url('employee/view/'.$row->id);?>" class="btn border">
                                                <i class="bi bi-eye text-dark p-2 fs-5"  title="View"></i></a>
                                            <a href="<?= base_url('employee/edit/'.$row->id);?>" class="btn border">
                                                <i class="bi bi-pen text-warning p-2 fs-5 "  title="Edit"></i></a>
                                            <a href="<?= base_url('employee/delete/'.$row->id);?>" class="btn border remove" value="<?= $row->id;?>">
                                                <i class="bi bi-trash text-danger p-2 fs-5" title="Delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
 
 
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: '/employee/'+id,
               type: 'DELETE',
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });
</script>