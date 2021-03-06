<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h2>Hello SpeedPHP!</h2>
			<hr>
			<div class="row-fluid">
				<div class="span6">
					<h3>提交表单，通过HTML的form标签</h3>
					<form action="<?php echo url(array('c'=>'main', 'a'=>'receive', ));?>" method="POST">
						<fieldset>
							<legend>表单项</legend>
							<label>填点东西进去？</label><input name="username" type="text"
								placeholder="Type something…" /> <br>
							<button type="submit" class="btn">提交</button>
						</fieldset>
					</form>
					$(".model").model;
					<?php $nowtime = date("Y-m-d H:i:s"); ?>
					<p>当前时间是：<?php echo htmlspecialchars($nowtime, ENT_QUOTES, "UTF-8"); ?></p>
				</div>
				<div class="span6">
					<h3>进入其他控制器和方法（action）</h3>
					<ul>
						<li><a href="<?php echo url(array('c'=>'other', 'a'=>'index', ));?>">进入OtherController的默认方法（OtherController/actionIndex）</a></li>
						<li><a href="<?php echo url(array('c'=>'other', 'a'=>'json', ));?>">点击查看一个输出的JSON数据（OtherController/actionJson）</a></li>
						<li><a href="<?php echo url(array('c'=>'other', 'a'=>'val', 'whoami'=>'bootstrap', ));?>">传个值过去（OtherController/actionVal）</a></li>
						<li><a href="<?php echo url(array('c'=>'other', 'a'=>'tpl', ));?>">查看模板语法的输出（OtherController/actionTpl）</a></li>
						<li><a href="<?php echo url(array('c'=>'other', 'a'=>'dump', ));?>">dump函数的演示（OtherController/actionDump）</a></li>
					</ul>
					<h3>进入Module Admin（多应用开发）：</h3>
					<ul>
						<li><a href="<?php echo url(array('c'=>'admin/main', 'a'=>'index', ));?>">Admin首页</a></li>
						<li><a href="<?php echo url(array('c'=>'admin/main', 'a'=>'test', ));?>">Admin的Test页</a></li>
						<li><a href="<?php echo url(array('c'=>'admin/login', 'a'=>'index', ));?>">Admin里面的Login/index</a></li>
						<li><a href="<?php echo url(array('c'=>'admin/login', 'a'=>'test', ));?>">Admin里面的Login/test</a></li>
					</ul>
					<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">×</button>
						如果设置了URL重写，请注意观察以上链接。
					</div>

				</div>
			</div>
			<hr>
			<div class="row-fluid">
				<div class=span8>
					<h3>数据库学习准备：</h3>
					<p>1. 首先得要配置好数据库链接信息及建表：</p>

					<p>配置中是：（config.php文件）</p>

					<pre>
'mysql' => array(
	'MYSQL_HOST' => '', // 数据库IP地址
	'MYSQL_PORT' => '', // 数据库端口，如3306
	'MYSQL_USER' => '', // 用户名
	'MYSQL_DB'   => '', // 数据库库名
	'MYSQL_PASS' => '', // 数据库密码
	'MYSQL_CHARSET' => 'utf8', // 一般不用修改
),
</pre>
					<p>建表，如我们例子是： test_user</p>
					<pre>
CREATE TABLE `test_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
</pre>
					<p>2. 在model目录建立模型类，基本来说每个表建议建立一个模型类，方便扩展。</p>

					<p>如model/User.php内容如下：</p>
					<pre>
class User extends Model{
	var $table_name = "test_user";
}
</pre>
					<p>使用MySQL数据库的模型类务必要继承与Model类</p>
					<p>完成以上操作后，请参考右边的教程。---->>>>></p>
				</div>
				<div class=span4>
					<h3>数据操作基础：</h3>
					<ul>
						<li><a href="<?php echo url(array('c'=>'db', 'a'=>'create', ));?>">增加数据create</a></li>
						<li><a href="<?php echo url(array('c'=>'db', 'a'=>'update', ));?>">修改update</a></li>
						<li><a href="<?php echo url(array('c'=>'db', 'a'=>'delete', ));?>">删除delete</a></li>
						<li><a href="<?php echo url(array('c'=>'db', 'a'=>'find', ));?>">查找findAll/find</a></li>
						<li><a href="<?php echo url(array('c'=>'db', 'a'=>'query', ));?>">SQL查询query</a></li>
						<li><a href="<?php echo url(array('c'=>'db', 'a'=>'execute', ));?>">SQL执行execute</a></li>
					</ul>

				</div>
			</div>
		</div>
	</div>
</div>
