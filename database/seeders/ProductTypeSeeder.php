<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductType;
class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producttype::create( [
            'id'=>1,
            'name'=>'Hoa Cúng Viếng',
            'imageUrl'=>'images/chia_buon/hoachiabuon1.jpg',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-05 21:04:52',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Producttype::create( [
            'id'=>2,
            'name'=>'Hoa Chúc Mừng',
            'imageUrl'=>'images/chuc_mung/hoachucmung4.jpg',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Producttype::create( [
            'id'=>3,
            'name'=>'Hoa Đám Cưới',
            'imageUrl'=>'images/hoa_cuoi/baby.jpg',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Producttype::create( [
            'id'=>4,
            'name'=>'Hoa Khai Trương',
            'imageUrl'=>'images/khai_truong/hoakhaitruong3.jpg',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Producttype::create( [
            'id'=>5,
            'name'=>'Hoa Lãng Mạn',
            'imageUrl'=>'images/lang_man/hoahong.jpg',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Producttype::create( [
            'id'=>6,
            'name'=>'Hoa Sinh Nhật',
            'imageUrl'=>'images/sinh_nhat/babyHappy.jpg',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
      
    }
}
