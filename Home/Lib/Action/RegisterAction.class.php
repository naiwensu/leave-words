<?php
	class RegisterAction extends Action{
		public function reg(){
			$this->display();
		}
		//检查用户是否注册过
		public function checkName(){
			$username=$_GET['username'];
			
			$user=M('User');
			$where['username']=$username;
			$count=$user->where($where)->count();
			if ($count) {

				echo "不允许";
			}else{
				echo "允许";
			}
		}
		//注册	
		public function doReg(){
			//$username=$_POST['username'];
			//$password=$_POST['password'];
			//$repassword=$_POST['repassword'];
			//$sex=$_POST['sex'];
			//$data['username']=$username;
			//$data['password']=$password;
			//$data['sex']=$sex;
			//$lastId=$user->add($data);
			
			//自动创建 自动验证
			//D方法会自动找自定义的UserModel类
			$user=D('User');
			if(!$user->create()){
				$this->error($user->getError());
			}
			$lastId=$user->add();
			if ($lastId) {
				$this->redirect('Index/index');
			}else{
				$this->error('用户注册失败');
			}


		}
	}