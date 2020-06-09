<?php

return [
    'userManagement'    => [
        'title'          => '用户管理',
        'title_singular' => '用户管理',
    ],
	'memberManagement'  => [
        'title'          => '会员管理',
        'title_singular' => '会员管理',
    ],
    'permission'        => [
        'title'          => '权限',
        'title_singular' => '权限',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => '标题',
            'title_helper'      => '',
            'created_at'        => '创建于',
            'created_at_helper' => '',
            'updated_at'        => '更新于',
            'updated_at_helper' => '',
            'deleted_at'        => '删除于',
            'deleted_at_helper' => '',
        ],
    ],
    'role'              => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => '标题',
            'title_helper'       => '',
            'permissions'        => '权限',
            'permissions_helper' => '',
            'created_at'         => '创建于',
            'created_at_helper'  => '',
            'updated_at'         => '更新于',
            'updated_at_helper'  => '',
            'deleted_at'         => '删除于',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'              => [
        'title'          => '用户',
        'title_singular' => '用户',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            '名称'                     => '名称',
            '名称_helper'              => '',
            'email'                    => '电子邮件',
            'email_helper'             => '',
            'email_verified_at'        => '电子邮件已于验证',
            'email_verified_at_helper' => '',
            'password'                 => '密码',
            'password_helper'          => '',
            'roles'                    => '角色',
            'roles_helper'             => '',
            'remember_token'           => '记住的令牌',
            'remember_token_helper'    => '',
            'created_at'               => '创建于',
            'created_at_helper'        => '',
            'updated_at'               => '更新于',
            'updated_at_helper'        => '',
            'deleted_at'               => '删除于',
            'deleted_at_helper'        => '',
			'status'				   => '状况',
			'status_helper'			   => '',
        ],
    ],
	'member'              => [
        'title'          => 'Members',
        'title_singular' => 'Member',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => '名称',
            'name_helper'              => '',
            'email'                    => '电子邮件',
            'email_helper'             => '',
            'email_verified_at'        => '电子邮件已于验证',
            'email_verified_at_helper' => '',
            'password'                 => '密码',
            'password_helper'          => '',
            'provider'                    => '社交媒体',
            'provider_helper'             => '',
            'provider_id'           => '社交媒体 ID',
			'google_id'           => '谷歌 ID',
            'provider_id_helper'    => '',
			'google_id_helper'    => '',
            'created_at'               => '创建于',
            'created_at_helper'        => '',
            'updated_at'               => '更新于',
            'updated_at_helper'        => '',
            'deleted_at'               => '删除于',
            'deleted_at_helper'        => '',
			'status'				   => '状况',
			'status_helper'			   => '',
        ],
    ],
    'productManagement' => [
        'title'          => '产品管理',
        'title_singular' => '产品管理',
    ],
    'productCategory'   => [
        'title'          => '类别',
        'title_singular' => '类别',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            '名称'               => '名称',
            '名称_helper'        => '',
            'description'        => '描述',
            'description_helper' => '',
            'photo'              => '照片',
            'photo_helper'       => '',
            'created_at'         => '创建于',
            'created_at_helper'  => '',
            'updated_at'         => '更新于',
            'updated_at_helper'  => '',
            'deleted_at'         => '删除于',
            'deleted_at_helper'  => '',
        ],
    ],
    'productTag'        => [
        'title'          => '标签',
        'title_singular' => '标签',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            '名称'              => '名称',
            '名称_helper'       => '',
			'color'				=> '颜色',
			'color_helper'       => '',
            'created_at'        => '创建于',
            'created_at_helper' => '',
            'updated_at'        => '更新于',
            'updated_at_helper' => '',
            'deleted_at'        => '删除于',
            'deleted_at_helper' => '',
        ],
    ],
    'product'           => [
        'title'          => '产品',
        'title_singular' => '产品',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            '名称'               => '名称',
            '名称_helper'        => '',
            'description'        => '描述',
            'description_helper' => '',
            'price'              => '价钱',
            'price_helper'       => '',
            'category'           => '类别',
            'category_helper'    => '',
            'tag'                => '标签',
            'tag_helper'         => '',
            'photo'              => '照片',
            'photo_helper'       => '',
            'created_at'         => '创建于',
            'created_at_helper'  => '',
            'updated_at'         => '更新于',
            'updated_at_helper'  => '',
            'deleted_at'         => '删除于',
            'deleted_at_helper'  => '',
        ],
    ],
    'userAlert'         => [
        'title'          => '用户快讯',
        'title_singular' => '用户快讯',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'alert_text'        => '快讯正文',
            'alert_text_helper' => '',
            'alert_link'        => '快讯链接',
            'alert_link_helper' => '',
            'user'              => '用户',
            'user_helper'       => '',
            'created_at'        => '创建于',
            'created_at_helper' => '',
            'updated_at'        => '更新于',
            'updated_at_helper' => '',
        ],
    ],
	'event'          => [
        'title'          => '全部活动',
        'title_singular' => '活动',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            '名称'              => '名称',
            '名称_helper'       => '',
            'start_time'        => '开始时间',
            'start_time_helper' => '',
            'end_time'          => '时间结束',
            'end_time_helper'   => '',
            'recurrence'        => '循环',
            'recurrence_helper' => '',
            'created_at'        => '创建于',
            'created_at_helper' => '',
            'updated_at'        => '更新于',
            'updated_at_helper' => '',
            'deleted_at'        => '删除于',
            'deleted_at_helper' => '',
            'event'             => '活动',
            'event_helper'      => '',
        ],
    ],
	'badge'          => [
        'title'          => 'Badges',
        'title_singular' => 'Badge',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'icon'              => 'Icon',
            'icon_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'employee'       => [
        'title'          => 'Employees',
        'title_singular' => 'Employee',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'position'          => 'Position',
            'position_helper'   => '',
            'photo'             => 'Photo',
            'photo_helper'      => '',
            'country'             => 'Country',
            'country_helper'      => '',
			'city'             => 'City',
            'city_helper'      => '',
			'badges'            => 'Badges',
            'badges_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
	'order'          => [
        'title'          => 'Orders',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'customer_name'         => 'Customer Name',
            'customer_name_helper'  => '',
            'customer_email'        => 'Customer Email',
            'customer_email_helper' => '',
            'products'              => 'Products',
            'products_helper'       => '',
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => '',
        ],
    ],
	'transaction'    => [
        'title'          => 'Transactions',
        'title_singular' => 'Transaction',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'transaction_date'        => 'Transaction Date',
            'transaction_date_helper' => '',
            'amount'                  => 'Amount',
            'amount_helper'           => '',
            'description'             => 'Description',
            'description_helper'      => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
        ],
    ],
];
