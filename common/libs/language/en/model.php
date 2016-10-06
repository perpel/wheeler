<?php

return [

        'required' => 'must be filled',
	
	'Admin' => [
		'id' => 'ID',
                'username' => 'Username',
                'auth_key' => 'Auth Key',
                'password_hash' => 'Password Hash',
                'password_reset_token' => 'Password Reset Token',
                'email' => 'Email',
                'status' => 'Status',
                'role' => 'Role',
                'created_at' => 'Created At',
                'updated_at' => 'Updated At',
	],

        'AdminLoginAttributeLabel' => [
                'username' => 'Username',
                'password' => 'Password',
                'rememberMe' => 'RememberMe',
        ],

        'AdminLoginValidatePassword' => 'error',

        'loginTitle' => 'Admin',
        'loginMsg' => 'Please fill to downlist',
        'loginSubmitTitle' => 'Login',


];