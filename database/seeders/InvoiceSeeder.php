<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;
class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::create( [
            'id'=>19,
            'issuedDate'=>'2022-01-27',
            'nameShopping'=>'Xuân Nguyên',
            'addressShoping'=>'Nha Trang',
            'phoneShoping'=>'0384189404',
            'total'=>890000,
            'accountId'=>1,
            'status'=>4,
            'created_at'=>'2022-01-26 19:50:57',
            'updated_at'=>'2022-02-05 03:12:37',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>20,
            'issuedDate'=>'2022-01-27',
            'nameShopping'=>'Anh Nguyễn',
            'addressShoping'=>'Ninh Thuận',
            'phoneShoping'=>'0384178494',
            'total'=>750000,
            'accountId'=>1,
            'status'=>4,
            'created_at'=>'2022-01-26 20:37:26',
            'updated_at'=>'2022-02-05 03:12:39',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>21,
            'issuedDate'=>'2022-01-27',
            'nameShopping'=>'Mai Hương',
            'addressShoping'=>'Hà Nội',
            'phoneShoping'=>'0384178484',
            'total'=>110000,
            'accountId'=>1,
            'status'=>1,
            'created_at'=>'2022-01-26 21:32:09',
            'updated_at'=>'2022-02-08 01:35:20',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>22,
            'issuedDate'=>'2022-01-27',
            'nameShopping'=>'Hương Lý',
            'addressShoping'=>'Hoà Bình',
            'phoneShoping'=>'0384179447',
            'total'=>750000,
            'accountId'=>1,
            'status'=>3,
            'created_at'=>'2022-01-26 21:36:07',
            'updated_at'=>'2022-01-26 22:50:37',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>23,
            'issuedDate'=>'2022-01-27',
            'nameShopping'=>'Quốc Hùng',
            'addressShoping'=>'Thái Nguyên',
            'phoneShoping'=>'038498949',
            'total'=>500000,
            'accountId'=>2,
            'status'=>4,
            'created_at'=>'2022-01-26 21:39:57',
            'updated_at'=>'2022-01-29 03:40:20',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>24,
            'issuedDate'=>'2022-01-27',
            'nameShopping'=>'Xuân nguyên',
            'addressShoping'=>'Nha trang',
            'phoneShoping'=>'0947843212',
            'total'=>200000,
            'accountId'=>1,
            'status'=>3,
            'created_at'=>'2022-01-26 22:03:33',
            'updated_at'=>'2022-02-09 01:14:28',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>25,
            'issuedDate'=>'2022-01-28',
            'nameShopping'=>'Quốc Nguyên',
            'addressShoping'=>'Hoà Bình',
            'phoneShoping'=>'0394823232',
            'total'=>1180000,
            'accountId'=>29,
            'status'=>3,
            'created_at'=>'2022-01-28 00:52:47',
            'updated_at'=>'2022-01-28 01:04:37',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>26,
            'issuedDate'=>'2022-01-28',
            'nameShopping'=>'Bảo Hùng',
            'addressShoping'=>'Thái Nguyên',
            'phoneShoping'=>'0384189404',
            'total'=>220000,
            'accountId'=>30,
            'status'=>2,
            'created_at'=>'2022-01-28 01:01:38',
            'updated_at'=>'2022-02-07 10:03:02',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>27,
            'issuedDate'=>'2022-01-28',
            'nameShopping'=>'abc',
            'addressShoping'=>'hcm',
            'phoneShoping'=>'039418494',
            'total'=>180000,
            'accountId'=>29,
            'status'=>4,
            'created_at'=>'2022-01-28 01:11:53',
            'updated_at'=>'2022-02-07 10:03:28',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>28,
            'issuedDate'=>'2022-01-29',
            'nameShopping'=>'Quốc Thư',
            'addressShoping'=>'khánh hoà',
            'phoneShoping'=>'0394389404',
            'total'=>180000,
            'accountId'=>1,
            'status'=>3,
            'created_at'=>'2022-01-29 01:51:00',
            'updated_at'=>'2022-02-09 01:14:53',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>29,
            'issuedDate'=>'2022-01-29',
            'nameShopping'=>'Quốc Bảo',
            'addressShoping'=>'Hoà Bình',
            'phoneShoping'=>'038437838',
            'total'=>680000,
            'accountId'=>31,
            'status'=>2,
            'created_at'=>'2022-01-29 02:53:26',
            'updated_at'=>'2022-02-08 01:35:15',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>30,
            'issuedDate'=>'2022-01-29',
            'nameShopping'=>'Quốc Bảo',
            'addressShoping'=>'Hoà Bình',
            'phoneShoping'=>'038437838',
            'total'=>250000,
            'accountId'=>1,
            'status'=>1,
            'created_at'=>'2022-01-29 02:56:35',
            'updated_at'=>'2022-01-29 02:56:35',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>32,
            'issuedDate'=>'2022-02-12',
            'nameShopping'=>'Xuân nguyên',
            'addressShoping'=>'Hà Nội',
            'phoneShoping'=>'0384189404',
            'total'=>580000,
            'accountId'=>33,
            'status'=>3,
            'created_at'=>'2022-02-11 20:35:43',
            'updated_at'=>'2022-02-11 20:37:44',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Invoice::create( [
            'id'=>33,
            'issuedDate'=>'2022-02-13',
            'nameShopping'=>'Xuân A',
            'addressShoping'=>'hcm',
            'phoneShoping'=>'0394389494',
            'total'=>1050000,
            'accountId'=>1,
            'status'=>1,
            'created_at'=>'2022-02-13 06:38:44',
            'updated_at'=>'2022-02-13 06:38:44',
            'deleted_at'=>NULL
            ] );
    }
}
