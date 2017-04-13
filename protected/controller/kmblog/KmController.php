<?php
class KmController  extends BaseController {
	public $types;
	function actionIndex(){
		$art = new Article();
		$this->findall = $art->findAll();
	}
	function actionTest(){
		echo "km test!";
	}
	function actionAdd(){
		$this->types = 'add';
		list($t1, $t2) = explode(' ', microtime());
		//echo $t2  .  ceil( ($t1 * 1000) );
		// 准备数据，一个“字段名”对应“值”的数组
		if(!empty($_POST['name']) && !empty($_POST['cont'])){
			$a = $_POST['name'];
			$b = $_POST['cont'];
			echo $_POST['typess'];
			if($_POST['typess'] == 'add'){
				$data = array(
					"article_name" => $a,
					"article_time" => $t2,//.ceil( ($t1 * 1000) ),
					"user_id" => 1,
					"article_content" => $b
				);
			
				$art = new Article();
				$this->newid = $art->create($data);
				echo '保存成功!';
			}else{
				$art = new Article();
				$this->result = $art->update(array(
					"article_id" => $_POST['typess'] // 条件
				), array(
					"article_name" => $a,
					"article_time" => $t2,//.ceil( ($t1 * 1000) ),
					"article_content" => $b
				));
				echo '修改成功!';
			}
		}
	}
	
	// 修改update
	function actionUpdate(){
		if(!empty($_GET['id'])){
			$art = new Article();
			$this->findone = $art->find(array("article_id"=>$_GET['id']));
			$this->types = $_GET['id'];
			$this->display("kmblog/km_add.html");
		}
	}
	
	// 删除delete
	function actionDelete(){
		if(!empty($_GET['id'])){
			echo $_GET['id'];
			
			   $art = new Article();
		$this->result = $art->delete(array(
			"article_id" => $_GET['id']
		));
		// delete也是返回影响行数，没有匹配的结果会返回0
		
		$this->findall = $art->findAll();
		$this->display("kmblog/km_index.html");
		
		}
		/*
	    $user = new User();
		$uid = 3;
		$this->result = $user->delete(array(
			"uid" => $uid
		));
		$this->findall = $user->findAll();
		$this->display("db/delete.html");*/
	}
	
	// 查找findAll/find
	function actionFind(){
		if (!empty($_GET['id'])){
			$art = new Article();
			$this->findone = $art->find(array("article_id"=>$_GET['id']));
		}
	}
	
	// SQL查询query
	function actionQuery(){
		/*
		$user = new User();
		$uid = 3;
		$sql = "SELECT * FROM test_user WHERE uid > :uid";
		$this->findall = $user->query($sql, array(
			":uid" => $uid, // 注意这种绑定参数的做法，可以防止SQL注入
		));
		$this->display("db/query.html");*/
	}
	
	// SQL执行execute
	function actionExecute(){
		/*
		$user = new User();
		$username = "whoami";
		// 准备SQL，要删除username是“whoami”的家伙
		$sql = "DELETE FROM test_user WHERE username = :username";
		
		// 同query，execute第一个参数是SQL语句，第二个参数是绑定参数的列表
		$this->result = $user->execute($sql, array(
				":username" => $username, // 注意这种绑定参数的做法，可以防止SQL注入
		));
		// execute返回参数和create等相同，即是影响行数，为0则证明没有做任何的修改
		
		
		$this->findall = $user->findAll();
		$this->display("db/execute.html");*/
	}
}