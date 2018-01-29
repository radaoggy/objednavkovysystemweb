<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<title><?php echo $title ?></title>
<link href=<?php echo base_url('resources/boostrap/css/spacelab-theme.min.css');?> rel="stylesheet" type="text/css"/>
<link href=<?php echo base_url('resources/css/style.css');?> rel="stylesheet" type="text/css"/>
  

</head>
<body>
 <nav class="navbar navbar-static-top navbar-inverse">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Liga mistrů zeměpis</a>
                </div>
               
        <?php
            $this->load->view('menu');
        ?>
               
                  </div>
 </nav>
    <article>
        <div class="container">
                <?php
            echo $content;
                ?>
                
        </div>
 </article>
<script src='<?php echo base_url('resources/jquery/jquery.js');?>' type="text/javascript"></script>
<script src='<?php echo base_url('resources/boostrap/js/bootstrap.min.js');?>' type="text/javascript"></script>
</body>
</html>

        
        