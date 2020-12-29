<?php

use Illuminate\Database\Seeder;

class bangtaikhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data=[
    		[
    			'username'=>'admin',
    			'password'=>bcrypt('123456'),
    			'phanquyen'=>'1'

    		],
    		[
    			'username'=>'nhung28',
    			'password'=>bcrypt('123123'),
    			'phanquyen'=>'2'

    		],

    	];
        DB::table("vp_tai_khoan")->insert($data);
    }
}
