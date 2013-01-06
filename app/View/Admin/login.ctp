<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
      }
</style>


<div class="container">
<?php
echo $this->Form->create(false, array('action' => 'login'));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Login');
?>
</div>

