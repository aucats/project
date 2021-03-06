<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
	* {font-family:SimSun;}
</style>
		<style type="text/css">

			.content-header {
				height: 10rem;
				background-size: cover;
			}
			
			
			.content-header .mui-table-view-cell:after,
			.content-content .mui-table-view-cell:after {
				background-color: rgba(0, 0, 0, 0)
			}
		</style>
	</head>

	<body>
		<div class="mui-content">
			<div class="content-header">
				<div id="slider" class="mui-slider" >
				  <div class="mui-slider-group mui-slider-loop">
				    <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
				    <div class="mui-slider-item mui-slider-item-duplicate">
				      	<a href="#"><img src="/weixin/weixin/Public/mui/images/lunbo/3.jpg"></a>
				    </div>
				    <!-- 第一张 -->
				    <div class="mui-slider-item">
				      	<a href="#"><img src="/weixin/weixin/Public/mui/images/lunbo/1.jpg"></a>
				    </div>
				    <!-- 第二张 -->
				    <div class="mui-slider-item">
				      	<a href="#"><img src="/weixin/weixin/Public/mui/images/lunbo/2.jpg"></a>
				    </div>
				    <!-- 第三张 -->
				    <div class="mui-slider-item">
				      	<a href="#"><img src="/weixin/weixin/Public/mui/images/lunbo/3.jpg"></a>
				    </div>
				    <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
				    <div class="mui-slider-item mui-slider-item-duplicate">
				      	<a href="#"><img src="/weixin/weixin/Public/mui/images/lunbo/1.jpg"></a>
				    </div>
				  </div>
				  <div class="mui-slider-indicator">
				    <div class="mui-indicator mui-active"></div>
				    <div class="mui-indicator"></div>
				    <div class="mui-indicator"></div>
				  </div>
				</div>
			</div>
			<div class="content-content">
				<div class="mui-slider">
					<div class="mui-slider-group">
						<div class="mui-slider-item">
							<ul class="mui-table-view mui-grid-view mui-grid-9 jump">
								<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4" id='home'>
									<a href="#">
										<span class="mui-icon mui-icon-home"></span>
										<div class="mui-media-body">公司官网</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4 href" url="<?php echo U('shenheyuan/tongzhi');?>">
									<a href="#">
										<span class="mui-icon mui-icon-chatbubble"></span>
										<div class="mui-media-body">公司公告</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4 href" url="<?php echo U('shenheyuan/renwuchaxun');?>">
									<a href="#">
										<span class="mui-icon mui-icon-list"></span>
										<div class="mui-media-body">任务查询</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4 href" url="<?php echo U('shenheyuan/qiandao');?>">
									<a href="#">
										<span class="mui-icon mui-icon-location"></span>
										<div class="mui-media-body">签到</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4 href" url="<?php echo U('shenheyuan/jindu');?>">
									<a href="#">
										<span class="mui-icon-extra mui-icon-extra-calendar"></span>
										<div class="mui-media-body">行程进度</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-4 href" url="<?php echo U('kaohe/examine_user');?>">
									<a href="#">
										<span class="mui-icon-extra mui-icon-extra-topic"></span>
										<div class="mui-media-body">公司考核</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="mui-slider-indicator">
						<div class="mui-indicator mui-active"></div>
					</div>
				</div>
			</div>
			<div class="content-footer">
				<h4 style="height: 30px;text-align: center;background: #f5f5f5;line-height: 30px;">
					审核员通知
				</h4>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		mui.init({
			subpages:[{
				url:'<?php echo U("index/index_list");?>',
				id:'index-list',
				styles:{top: '405px'}
			}]
		});
		mui("#slider").slider({interval: 2000});
		mui.ready(function()
		{
			document.getElementById('home').addEventListener('tap',function()
			{
				window.location.href = 'http://www.cshcc.cn';
			});
		});
	</script>

</html>