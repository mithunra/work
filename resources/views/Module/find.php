

<?php
/**
 * Created by PhpStorm.
 * User: mithu
 * Date: 9/9/2017
 * Time: 11:30 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href=<?php echo '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' ?> rel="stylesheet" type="text/css" />
</head>
<body>
<?php
echo Form::open(['route'=>['Module.create'],'class' => 'form-horizontal','action' => ['ModuleController@create']])
?>
<br>
<br>
<?php echo Form::hidden('ModuleId',$module->id)?>
<div class="form-group">
    <label class="col-md-4 control-label" for="ModuleName">Module Name</label>
    <div class="col-md-4">
       <?php echo Form::text('ModuleName',$module->module_name,['class'=>'form-control input-md']); ?>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="ModuleContent">Module Content</label>
    <div class="col-md-4">
        <?php echo Form::text('ModuleContent',$module->module_content,['class'=>'form-control input-md']); ?>

    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label" for="Submit"></label>
    <div class="col-md-offset-6">
    <?php echo Form::submit('Submit',['class'=>'btn btn-primary']);?>
    </div>
</div>
<?php Form::close() ?>

<div class="container">
    <h2>Module List</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Module Name</th>
            <th>Module Content</th>
            <th>Member Count</th>
        </tr>
        </thead>
        <tbody>
        <?php
foreach ($modules as $module):?>
        <tr class="success">
            <td><?php echo $module->module_name?></td>
            <td><?php echo $module->module_content?></td>
            <td><?php echo $module->module_user_count?></td>
            <td><a href="<?php echo action('ModuleController@delete', array('id' => $module->id)); ?>" class="btn btn-danger">Delete</a></td>
            <td><a href="<?php echo action('ModuleController@find', array('id' => $module->id)); ?>" class="btn btn-danger">Edit</a></td>
        </tr>
        <?php
        endforeach; ?>
        </tbody>
    </table>
</div>

<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>