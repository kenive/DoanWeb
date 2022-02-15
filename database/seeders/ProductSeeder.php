<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create( [
            'id'=>1,
            'name'=>'Hoa Cưới 5',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>50,
            'price'=>200000,
            'image'=>'images/hoa_cuoi/RosePink.jpg',
            'new'=>1,
            'productTypeid'=>3,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-07 00:33:46',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>2,
            'name'=>'Hoa Cưới 2',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>10,
            'price'=>180000,
            'image'=>'images/hoa_cuoi/RoseMixBaby.jpg',
            'new'=>1,
            'productTypeid'=>3,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-11 20:35:43',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>3,
            'name'=>'Hoa Cưới 3',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>110000,
            'image'=>'images/hoa_cuoi/huongduong.jpg',
            'new'=>0,
            'productTypeid'=>3,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>4,
            'name'=>'Hoa Cưới 4',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>230000,
            'image'=>'images/hoa_cuoi/lantrang.jpg',
            'new'=>0,
            'productTypeid'=>3,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>5,
            'name'=>'Hoa Khai Trương',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>1,
            'price'=>90000,
            'image'=>'images/khai_truong/hoakhaitruong10.jpg',
            'new'=>1,
            'productTypeid'=>4,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-11 20:35:43',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>6,
            'name'=>'Hoa Cưới 1',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>150000,
            'image'=>'images/hoa_cuoi/maudonhongphan.jpg',
            'new'=>0,
            'productTypeid'=>3,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-08 06:24:59',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>7,
            'name'=>'Hoa Khai Trương 1',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>10,
            'price'=>150000,
            'image'=>'images/khai_truong/hoakhaitruong4.jpg',
            'new'=>1,
            'productTypeid'=>4,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-26 19:50:57',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>8,
            'name'=>'Hoa Khai Trương 2',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>170000,
            'image'=>'images/khai_truong/hoakhaitruong5.jpg',
            'new'=>1,
            'productTypeid'=>4,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>9,
            'name'=>'Hoa Khai Trương 3',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>8,
            'price'=>160000,
            'image'=>'images/khai_truong/hoakhaitruong6.jpg',
            'new'=>0,
            'productTypeid'=>4,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-26 19:50:57',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>10,
            'name'=>'Hoa Khai Trương 4',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>155000,
            'image'=>'images/khai_truong/hoakhaitruong10.jpg',
            'new'=>0,
            'productTypeid'=>4,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>11,
            'name'=>'Hoa Chúc Mừng 1',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>50,
            'price'=>250000,
            'image'=>'images/chuc_mung/hoachucmung8.jpg',
            'new'=>0,
            'productTypeid'=>2,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-08 06:25:10',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>12,
            'name'=>'Hoa Chúc Mừng 2',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>100000,
            'image'=>'images/chuc_mung/hoachucmung9.jpg',
            'new'=>0,
            'productTypeid'=>2,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>13,
            'name'=>'Hoa Chúc Mừng 3',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>120000,
            'image'=>'images/chuc_mung/hoachucmung12.jpg',
            'new'=>0,
            'productTypeid'=>2,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>14,
            'name'=>'Hoa Lãng Mạn 1',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>11,
            'price'=>110000,
            'image'=>'images/lang_man/hoahong.jpg',
            'new'=>0,
            'productTypeid'=>5,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-26 21:32:09',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>15,
            'name'=>'Hoa Lãng Mạn 4',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>149000,
            'image'=>'images/lang_man/roseBigSize.jpg',
            'new'=>0,
            'productTypeid'=>5,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>16,
            'name'=>'Hoa Lãng Mạn 3',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>8,
            'price'=>130000,
            'image'=>'images/lang_man/tulipyellow.jpg',
            'new'=>1,
            'productTypeid'=>5,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-25 07:12:31',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>17,
            'name'=>'Hoa Cúng Viếng 1',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>7,
            'price'=>110000,
            'image'=>'images/chia_buon/hoachiabuon3.jpg',
            'new'=>0,
            'productTypeid'=>1,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-28 01:01:38',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>18,
            'name'=>'Hoa Cúng Viếng 2',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>47,
            'price'=>110000,
            'image'=>'images/chia_buon/hoachiabuon2.jpg',
            'new'=>1,
            'productTypeid'=>1,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-01-25 07:14:33',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>19,
            'name'=>'Hoa Cúng Viếng 3',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>50,
            'price'=>230000,
            'image'=>'images/chia_buon/hoachiabuon4.jpg',
            'new'=>1,
            'productTypeid'=>1,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>20,
            'name'=>'Hoa Cúng Viếng 4',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>50,
            'price'=>250000,
            'image'=>'images/chia_buon/hoachiabuon5.jpg',
            'new'=>0,
            'productTypeid'=>1,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>21,
            'name'=>'Hoa Khai Trương 5',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>160000,
            'image'=>'images/khai_truong/hoakhaitruong8.jpg',
            'new'=>1,
            'productTypeid'=>4,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>22,
            'name'=>'Hoa Chúc Mừng 4',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>300000,
            'image'=>'images/chuc_mung/hoachucmung4.jpg',
            'new'=>0,
            'productTypeid'=>2,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>23,
            'name'=>'Hoa Sinh Nhật 1',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>7,
            'price'=>100000,
            'image'=>'images/sinh_nhat/01.jpg',
            'new'=>0,
            'productTypeid'=>6,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-13 06:38:44',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>24,
            'name'=>'Hoa Sinh Nhật 2',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>6,
            'price'=>250000,
            'image'=>'images/sinh_nhat/roseHappy.jpg',
            'new'=>0,
            'productTypeid'=>6,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-13 06:38:44',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>25,
            'name'=>'Hoa Sinh Nhật 3',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>270000,
            'image'=>'images/sinh_nhat/08.jpg',
            'new'=>1,
            'productTypeid'=>6,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>26,
            'name'=>'Hoa Sinh Nhật 4',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>200000,
            'image'=>'images/sinh_nhat/07.jpg',
            'new'=>1,
            'productTypeid'=>6,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>27,
            'name'=>'Hoa Sinh Nhật 5',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>12,
            'price'=>300000,
            'image'=>'images/sinh_nhat/05.jpg',
            'new'=>0,
            'productTypeid'=>6,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Product::create( [
            'id'=>28,
            'name'=>'Hoa Lãng Mạn 5',
            'description'=>'Shop hoa là một địa chỉ cung cấp hoa tươi được đông đảo người dân địa phương khu vực thành phố Hồ Chí Minh và các tỉnh thành lân cận cũng như các du khách tin tưởng tìm đến.',
            'stock'=>10,
            'price'=>110000,
            'image'=>'images/lang_man/rosepurple.jpg',
            'new'=>0,
            'productTypeid'=>5,
            'status'=>0,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-11 20:35:43',
            'deleted_at'=>NULL
            ] );
    }
}
