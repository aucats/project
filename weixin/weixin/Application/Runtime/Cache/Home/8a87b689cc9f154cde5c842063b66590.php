<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>审核员专区</title>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/weixin/weixin/Public/mui/css/mui.css" rel="stylesheet" type="text/css"/>
<link href="/weixin/weixin/Public/mui/css/icons-extra.css" rel="stylesheet" type="text/css"/>
<script src="/weixin/weixin/Public/mui/js/mui.js"></script>
<script src="/weixin/weixin/Public/mui/js/laytpl.js"></script>
<script src="/weixin/weixin/Public/mui/fun/js.fun.js"></script>
<script src="/weixin/weixin/Public/mui/fun/mui.fun.js"></script>
<script src="/weixin/weixin/Public/mui/js/app.js"></script>
<script type="text/javascript">
	laytpl.config({min: true,cache: true,open: '{{',close: '}}'});
</script>
<style type="text/css">
	/** {font-family:cursive;}*/
</style>
	</head>
	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 id="title" class="mui-title">考核明细</h1>
		</header>
		<div class="mui-content"></div>
	</body>
	
	<script type="text/javascript">
		//启用双击监听
		mui.init(
		{
			subpages:[{
				url:"<?php echo U('Kaohe/examine_user_main');?>",
				id:"examine_user_main",
				styles:{
					top: '45px',
					bottom: '0px',
				}
			}]
		});
	</script>

</html>