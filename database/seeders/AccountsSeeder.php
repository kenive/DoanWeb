<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\accounts;
class accountssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        accounts::create( [
            'id'=>1,
            'userName'=>'nguyen1',
            'Password'=>'nguyen123',
            'Email'=>'xnguyen759@gmail.com',
            'Phone'=>'0384189404',
            'Address'=>'Ninh Thuan',
            'FullName'=>'Xuân Nguyên',
            'isadmin'=>0,
            'avatar'=>'',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-26 22:02:37',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>2,
            'userName'=>'nguyen',
            'Password'=>'nguyen22',
            'Email'=>'xnguyen759@gmail.com',
            'Phone'=>'0384189402',
            'Address'=>'Ninh Thuan',
            'FullName'=>'Xuân Nguyên',
            'isadmin'=>0,
            'avatar'=>'',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-21 01:56:32',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>3,
            'userName'=>'admin',
            'Password'=>'123456a',
            'Email'=>'xnguyen759@gmail.com',
            'Phone'=>'0384189404',
            'Address'=>'Ha Noi',
            'FullName'=>'Bao Anh',
            'isadmin'=>1,
            'avatar'=>'',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-19 19:55:33',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>6,
            'userName'=>'asd',
            'Password'=>'das',
            'Email'=>'dasd',
            'Phone'=>NULL,
            'Address'=>'',
            'FullName'=>'',
            'isadmin'=>0,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>7,
            'userName'=>'casdas',
            'Password'=>'dsad',
            'Email'=>'dasd',
            'Phone'=>'098312312',
            'Address'=>'',
            'FullName'=>'',
            'isadmin'=>0,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>20,
            'userName'=>'tuan1',
            'Password'=>'12345',
            'Email'=>'xnguyen@gmail.com',
            'Phone'=>'',
            'Address'=>'',
            'FullName'=>'',
            'isadmin'=>NULL,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>'2022-01-19 03:08:34',
            'updated_at'=>'2022-01-19 03:08:34',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>21,
            'userName'=>'nguyen11',
            'Password'=>'123456',
            'Email'=>'x@gmail.com',
            'Phone'=>'',
            'Address'=>'',
            'FullName'=>'Quốc Nguyên',
            'isadmin'=>1,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>'2022-01-19 06:51:01',
            'updated_at'=>'2022-01-19 06:51:01',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>22,
            'userName'=>'nguyen22',
            'Password'=>'123',
            'Email'=>'xnguyen@gmail.com',
            'Phone'=>'',
            'Address'=>'',
            'FullName'=>'',
            'isadmin'=>NULL,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>'2022-01-19 19:09:55',
            'updated_at'=>'2022-01-19 19:09:55',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>29,
            'userName'=>'thu22',
            'Password'=>'thu22',
            'Email'=>'x@gmail.com',
            'Phone'=>'0384278404',
            'Address'=>'Khánh Hoà',
            'FullName'=>'Nguyễn Huỳnh Mai Phương',
            'isadmin'=>NULL,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>'2022-01-28 00:48:35',
            'updated_at'=>'2022-01-28 00:50:45',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>30,
            'userName'=>'thu11',
            'Password'=>'thu11',
            'Email'=>'x@gmail.com',
            'Phone'=>'0394832748',
            'Address'=>'Hcm',
            'FullName'=>'Tuần Trần',
            'isadmin'=>NULL,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>'2022-01-28 01:00:48',
            'updated_at'=>'2022-01-28 01:02:03',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>31,
            'userName'=>'nguyen0',
            'Password'=>'nguyen123',
            'Email'=>'x@gmail.com',
            'Phone'=>'0394843232',
            'Address'=>'Nha Trang',
            'FullName'=>'Quốc Bảo',
            'isadmin'=>NULL,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>'2022-01-29 02:50:07',
            'updated_at'=>'2022-01-29 02:51:48',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>32,
            'userName'=>'thu12',
            'Password'=>'thu12',
            'Email'=>'x@gmail.com',
            'Phone'=>'',
            'Address'=>'',
            'FullName'=>'',
            'isadmin'=>NULL,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>'2022-01-29 02:54:45',
            'updated_at'=>'2022-01-29 02:54:45',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>33,
            'userName'=>'me1234',
            'Password'=>'nguyen123',
            'Email'=>'suke@gmail.com',
            'Phone'=>'0384189404',
            'Address'=>'Đà Nẵng',
            'FullName'=>'Tuấn Tú',
            'isadmin'=>NULL,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>'2022-02-11 20:19:50',
            'updated_at'=>'2022-02-11 20:32:46',
            'deleted_at'=>NULL
            ] );
                        
            accounts::create( [
            'id'=>34,
            'userName'=>'huuthanh',
            'Password'=>'huuthanh',
            'Email'=>'x@gmail.com',
            'Phone'=>'0384849404',
            'Address'=>'Hồ Chí Minh',
            'FullName'=>'Bùi Trần Hữu Thanh',
            'isadmin'=>NULL,
            'avatar'=>'',
            'status'=>0,
            'created_at'=>'2022-02-11 21:50:28',
            'updated_at'=>'2022-02-11 21:51:54',
            'deleted_at'=>NULL
            ] );
    }
}
