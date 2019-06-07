<div id="cm-menu">
            <nav class="cm-navbar cm-navbar-light">
                <div class="cm-flex"><a style="background:url('<?php echo base_url(); ?>assets/img/logo.png') center no-repeat; background-size:150px; ;" href="<?php echo base_url();?>vft" class="cm-logo"></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                        <ul class="cm-menu-items">
                        
<?php if($link == "Welcome"){ ?> <li class="active"> <?php } else { ?><li><?php } ?>
                        <a href="<?php echo base_url(); ?>vft" class="sf-house">Home</a></li>
<?php if($link == "Dashboard"){ ?> <li class="active"> <?php } else { ?><li><?php } ?>
                        <a href="<?php echo base_url(); ?>vft/dashboard" class="sf-dashboard">Dashboard</a></li>
<?php if($link == "Logical Access Control"){ ?> <li class="active"> <?php } else { ?><li><?php } ?>
                        <a href="<?php echo base_url(); ?>vft/lac" class="sf-notepad">Logical Access</a></li>
                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>