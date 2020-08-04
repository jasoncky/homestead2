<?php

return [
    'userManagement'    => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
	'memberManagement'  => [
        'title'          => 'Member management',
        'title_singular' => 'Member management',
    ],
	'employeeManagement'  => [
        'title'          => 'Employee management',
        'title_singular' => 'Employee management',
    ],
	'appointmentManagement'  => [
        'title'          => 'Appointment management',
        'title_singular' => 'Appointment management',
    ],
	'contactManagement'  => [
        'title'          => 'Contact management',
        'title_singular' => 'Contact management',
    ], 	
    'permission'        => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'              => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
	'team'              => [
        'title'          => 'Teams',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'users'        => 'Users',
            'users_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'              => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
			'status'				   => 'Status',
			'status_helper'			   => '',
        ],
    ],
	'member'              => [
        'title'          => 'Members',
        'title_singular' => 'Member',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
			'phone'                    => 'Phone',
            'phone_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'provider'                    => 'Provider',
            'provider_helper'             => '',
            'provider_id'           => 'Provider ID',
			'google_id'           => 'Google ID',
            'provider_id_helper'    => '',
			'google_id_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
			'status'				   => 'Status',
			'status_helper'			   => '',
        ],
    ],
    'productManagement' => [
        'title'          => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'productCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
			'description'        => 'Description',
            'description_helper' => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
        ],
    ],
    'productTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
			'color'				=> 'Color',
			'color_helper'       => '',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'product'           => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'code'               => 'Code',
            'code_helper'        => '',
			'description'        => 'Description',
            'description_helper' => '',
            'price'              => 'Price',
            'price_helper'       => '',
            'stock'               => 'Stock',
            'stock_helper'        => '',
			'category'           => 'Categories',
            'category_helper'    => '',
            'tag'                => 'Tags',
            'tag_helper'         => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
			'status'               => 'Status',
            'status_helper'        => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
        ],
    ],
    'userAlert'         => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => '',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => '',
            'user'              => 'Users',
            'user_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
        ],
    ],
	'appointment'          => [
        'title'          => 'All Appointments',
        'title_singular' => 'Appointments',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'start_time'        => 'Start Time',
            'start_time_helper' => '',
            'end_time'          => 'End Time',
            'end_time_helper'   => '',
            'recurrence'        => 'Recurrence',
            'recurrence_helper' => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'appointment'             => 'Appointment',
            'appointment_helper'      => '',
			'client'             => 'Client',
            'client_helper'      => '',
            'employee'           => 'Employee',
            'employee_helper'    => '',
			'comments'           => 'Comments',
            'comments_helper'    => '',
            'services'           => 'Services',
            'services_helper'    => '',
			'venue'           => 'Venue',
            'venue_helper'    => '',
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
			'email'             => 'Email',
            'email_helper'      => '',
            'phone'             => 'Phone',
            'phone_helper'      => '',
			'photo'             => 'Photo',
            'photo_helper'      => '',
            'badges'            => 'Badges',
            'badges_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
			'created_by'		=> 'Created by',
			'created_by_helper' => '',
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
			'status'              => 'Status',
            'status_helper'       => '',
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
	'service'        => [
        'title'          => 'Services',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
	'client'         => [
        'title'          => 'Clients',
        'title_singular' => 'Client',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'phone'             => 'Phone',
            'phone_helper'      => '',
            'email'             => 'Email',
            'email_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
	'contact'         => [
        'title'          => 'Contacts',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'first_name'              => 'First Name',
            'first_name_helper'       => '',
			'last_name'              => 'Last Name',
            'last_name_helper'       => '',
            'phone'             => 'Phone',
            'phone_helper'      => '',
            'email'             => 'Email',
            'email_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];
