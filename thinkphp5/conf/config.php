<?php
return  [
	// 是否开启路由
    'url_route_on'           => true,
    // 是否强制使用路由
    'url_route_must'         => false,

    //验证码配置
	'captcha'  => [
	// 验证码字符集合
	'codeSet' => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY', 
	// 验证码字体大小(px)
	'fontSize' => 20, 
	// 是否画混淆曲线
	'useCurve' => false, 
	// 验证码图片高度
	'imageH' => 42,
	//是否添加杂点
	'useNoise'=>false,
	// 验证码图片宽度
	'imageW' => 148, 
	// 验证码位数
	'length' => 4, 
	// 验证成功后是否重置 
	'reset' => true
]

];