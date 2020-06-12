<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'product_management_access',
            ],
            [
                'id'    => '18',
                'title' => 'product_category_create',
            ],
            [
                'id'    => '19',
                'title' => 'product_category_edit',
            ],
            [
                'id'    => '20',
                'title' => 'product_category_show',
            ],
            [
                'id'    => '21',
                'title' => 'product_category_delete',
            ],
            [
                'id'    => '22',
                'title' => 'product_category_access',
            ],
            [
                'id'    => '23',
                'title' => 'product_tag_create',
            ],
            [
                'id'    => '24',
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => '25',
                'title' => 'product_tag_show',
            ],
            [
                'id'    => '26',
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => '27',
                'title' => 'product_tag_access',
            ],
            [
                'id'    => '28',
                'title' => 'product_create',
            ],
            [
                'id'    => '29',
                'title' => 'product_edit',
            ],
            [
                'id'    => '30',
                'title' => 'product_show',
            ],
            [
                'id'    => '31',
                'title' => 'product_delete',
            ],
            [
                'id'    => '32',
                'title' => 'product_access',
            ],
            [
                'id'    => '33',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '34',
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => '35',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '36',
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => '37',
                'title' => 'user_alert_access',
            ],
			[
                'id'    => '38',
                'title' => 'event_create',
            ],
            [
                'id'    => '39',
                'title' => 'event_edit',
            ],
            [
                'id'    => '40',
                'title' => 'event_show',
            ],
            [
                'id'    => '41',
                'title' => 'event_delete',
            ],
            [
                'id'    => '42',
                'title' => 'event_access',
            ],
			[
                'id'    => '43',
                'title' => 'member_access',
            ],
			[
                'id'    => '44',
                'title' => 'member_delete',
            ],
			[
                'id'    => '45',
                'title' => 'member_show',
            ],
			[
                'id'    => '46',
                'title' => 'member_edit',
            ],
			[
                'id'    => '47',
                'title' => 'member_create',
            ],
			[
                'id'    => '48',
                'title' => 'employee_access',
            ],
			[
                'id'    => '49',
                'title' => 'employee_show',
            ],
			[
                'id'    => '50',
                'title' => 'employee_edit',
            ],
			[
                'id'    => '51',
                'title' => 'employee_create',
            ],
			[
                'id'    => '52',
                'title' => 'employee_delete',
            ],
			[
                'id'    => '53',
                'title' => 'order_access',
            ],
			[
                'id'    => '54',
                'title' => 'order_show',
            ],
			[
                'id'    => '55',
                'title' => 'order_edit',
            ],
			[
                'id'    => '56',
                'title' => 'order_create',
            ],
			[
                'id'    => '57',
                'title' => 'order_delete',
            ],
			
			[
                'id'    => '58',
                'title' => 'service_access',
            ],
			[
                'id'    => '59',
                'title' => 'service_show',
            ],
			[
                'id'    => '60',
                'title' => 'service_edit',
            ],
			[
                'id'    => '61',
                'title' => 'service_create',
            ],
			[
                'id'    => '62',
                'title' => 'service_delete',
            ],
			[
                'id'    => '63',
                'title' => 'client_access',
            ],
			[
                'id'    => '64',
                'title' => 'client_show',
            ],
			[
                'id'    => '65',
                'title' => 'client_edit',
            ],
			[
                'id'    => '66',
                'title' => 'client_create',
            ],
			[
                'id'    => '67',
                'title' => 'client_delete',
            ],
        ];

        Permission::insert($permissions);
    }
}
