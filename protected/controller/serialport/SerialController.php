<?php
class SerialController  extends BaseController {
	function actionIndex(){
		phpinfo();
		echo "serialport index!";
	}

	function actionTest(){
		echo "serialport test!";
	}
}