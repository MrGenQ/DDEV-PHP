<?php require 'views/_partials/head.view.php';?>
<div class="container">
<form>
<label for="site-search">Search for the company by name:</label>
<input type="search" id="site-search" name="q" >
<button type="submit" class="btn btn-primary">Search</button>
</form>
<button type="submit" class="btn btn-primary" onclick="window.location='/add-task';">Add company</button>
<h3>Companys list:</h3>
<table class="table table-bordered table striped ">
            <tr>
                <th>Company Name</th>
                <th>Code</th>
                <th>PVM CODE</th>
                <th>Adress</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Things</th>
                <th>CEO</th>
                <th></th>
            </tr>
        <?php foreach($task->allTasks() as $company):?>
            <tr>
                    <td><?=$company['pavadinimas'];?></td>
                    <td><?=$company['kodas'];?></td>
                    <td><?=$company['pvm_kodas'];?></td> 
                    <td><?=$company['adresas'];?></td>
                    <td><?=$company['telefonas'];?></td> 
                    <td><?=$company['pastas'];?></td> 
                    <td><?=$company['veikla'];?></td> 
                    <td><?=$company['vadovas'];?></td>
                    <td><a href="/delete-task/id/<?=$company['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');"><img src="images/close.png" width=15></a></td>
                </tr>    
        <?php endforeach;?>
    </table>
</div>
<?php require 'views/_partials/htmlEnd.php';?>
