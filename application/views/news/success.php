<?php
//application/bews/news/success.php
$this->load->view($this->config->item('theme') . 'header');
?>
<h1>Success!</h1>
<p>Wouldnt it be nice if you could see the new record?</p>
<?php
$this->load->view($this->config->item('theme') . 'footer');
?>