<?php 
shell_exec( 'git fetch --all' );
shell_exec( 'git reset --hard origin/master' );
shell_exec( 'git pull origin master' );
?>