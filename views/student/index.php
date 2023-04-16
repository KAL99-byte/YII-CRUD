
<?php
use  yii\helpers\html;

?>

<?php

/** @var yii\web\View $this */

$this->title = 'myhome';

?>


<div class="student-index">


    <div class="jumbotron text-center bg-transparent">
 
        <h5 class="display-4">CRUD OPERATIONS!</h5>
       
        <div class="container">
  <div class="card-body">
<div class="text-right">
<a href="/student/create" class="btn btn-sm btn-primary">+Create</a>
</div>



<table id="jautable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Country</th>
      <th scope="col">City</th>
      <th scope="col">District</th>
      <th scope="col">View</th>
       <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
   
  </thead>
  

  <tbody>
  <?php foreach( $user as $k=> $field) {  ?>
    <tr>
    <td><?= $k+1; ?></td>
        <td><?= $field->name; ?></td>
        <td><?= $field->email; ?></td>
        <td><?= $field->country; ?></td>
        <td><?= $field->city; ?></td>
        <td><?= $field->district; ?></td>

        <td>
       <?= html::a("view",['/student/view','uid'=>$field->id],['class'=>'badge badge-primary  fa fa-eye']); ?>
 
        </td>
    
         <td>    <?= html::a("Edit",['/student/edit','uid'=>$field->id],['class'=>'   badge badge-success  fa fa-pencil']); ?>
         </td>              
   
 <td> <?= html::a("Delete",['/student/del','uid'=>$field->id],['class'=>'badge badge-danger  fa fa-trash','data-method'=>'post','data-confirm'=>'Are you sure you want to Delete']); ?></td>
    </tr>
   
    <?php }?>
    </table> 
  </tbody>

  
    </div>
  
</div>
 
</div>
</div>

