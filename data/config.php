<?php
//系统配置信息 //功能：适合新的环境
return array( 
 	//认证机构信息
 	'zdep_id'		=>'CNCA-R-2015-199',	//机构批准号
	'proj_code'=>'bscc', //项目编码--数据库表名-数据源名称bscc_source
	

  	//////////////////////////////上传配置/////////////////////////////////////////// 
 	'upload_ep_dir'		=> 'uploads/ep/',//企业上传文档路径
	'upload_hr_dir'		=> 'uploads/hr/',//人员文档上传路径
 	'upload_hr_photo_dir'=> 'uploads/hr_photo/',//人员头像上传路径
	'upload_oa_file_dir' =>'uploads/file/',//oa文档上传路径
	'upload_notice_dir'	=>'uploads/notice/', //公告上传路径
	'uploadExts'	=> array('jpg', 'jpeg', 'gif', 'png', 'xls', 'xlsx', 'zip', 'rar', 'doc', 'docx', 'pdf','rtf'),//上传类型限制
	'uploadSize'	=> 204800000,//上传大小 200mb
	 	/////////////////////////////软件信息配置////////////////////////////////////////
 	'softname'		=> '认证行业管理信息系统', //软件名称
	'version'		=>'5.0',			//软件版本 
		//////////////////////////////获取组织机构代码///////////////////
	'orgUser'		=>'szNFRZxt',//账号
	'orgPasd'		=>"NangFang4995",	//密码
	'orgToken'		=>"ADA8D84F6EA24BD3913D269A1BAD3599",	//固定密钥
	
 
	
); 


 


  