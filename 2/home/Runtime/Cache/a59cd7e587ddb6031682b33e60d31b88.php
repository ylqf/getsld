<?php if (!defined('THINK_PATH')) exit();?><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style type="text/css"/>.ti{background-color:#3300ff;color:#FFF;margin-bottom:1px;border:1px solid #3300ff;}</style><title>二级域名注册</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/></head><body align=“left”><p class="ti"><?php echo ($tittle); ?></p>
<?php if($result['0']): ?>登录成功！欢迎<?php echo ($result['1']['name']); ?>,上次登录时间<?php echo date('Y年m月d日  h:i:s',$result['1']['login_time']);?><a href="<?php echo U('Index/index');?>">进入系统</a>
<?php else: ?>登录失败，原因：<?php echo ($result['1']); ?>。<a href="<?php echo U('Login/index');?>">返回登录</a><?php endif; ?>
<p class="ti">BY:myzly</p></body></html>