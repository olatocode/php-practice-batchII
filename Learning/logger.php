<?php


trait Logger
{
	public function log($msg)
	{
		echo date('Y-m-d h:i:s') . ':' . '(' . __CLASS__ . ') ' . $msg;
	}
}

trait welcome {

    public function welcome() {
        echo "Welcome!";
    }
}

trait copy {    
    use logger, welcome;

    public function copyCode($msg) {
        $this->log($msg);
        $this->welcome();
    }

}




?>