<?php
	class PublicAction extends Action{
		Public function code(){
			$w=isset($_GET['w'])?$_GET('w'):30;
			$h=isset($_GET['h'])?$_GET('h'):30;
    		import('ORG.Util.Image');
    		Image::buildImageVerify(2,1,'png',$w,$h,'code');
		}
	}