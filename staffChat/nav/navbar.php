

<nav class="fh5co-nav" role="navigation">
<div class="container-fluid">
    <div class="row">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text-left menu-1">
                        <ul>
                            <li class="active"><a href="chat.php">Chat</a></li>
                            <?php 
                            
                            if(!empty($staff_role) && $staff_role === "admin"){
                            ?>
                            <li><a href="blog.html">Add new Staff</a></li>
                            <?php }?>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
</nav>