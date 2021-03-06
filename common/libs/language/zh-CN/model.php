<?php 

return [
        
        'required' => '该信息不能为空',

	'Admin' => [
		'id' => 'ID',
                'username' => '用户名',
                'auth_key' => 'Auth Key',
                'password_hash' => '密码',
                'password_reset_token' => '密码重置Token',
                'email' => '邮箱',
                'status' => '状态',
                'role' => '角色',
                'created_at' => '创建时间',
                'updated_at' => '修改时间',
	],

        'AdminLoginAttributeLabel' => [
                'username' => '用户名',
                'password' => '密码',
                'rememberMe' => '记住我',
        ],

        'AdminLoginValidatePassword' => '用户名或密码错误',

        'loginTitle' => '管理员登录',
        'loginMsg' => '请键入登录信息',
        'loginSubmitTitle' => '登录',

        'AdminForm' => [

        ],

];