<div class="page-header">
    
</div>
<div class="row">
    
    <div class="col-md-4">        
        <?php if($_POST) include 'aksi.php';?>
        <form class="form-signin" action="?m=login" method="post">              
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Masukkan Username..." name="user" autofocus />
            </div>
            <div class="form-group">            
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan Password..." name="pass" />  
            </div>      
            <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>        
        </form>     
    </div> 
</div>