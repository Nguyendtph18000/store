<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\Table\Table;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
      for($i=1;$i<20;$i++){
          $nguoidung[$i]= [
              'name' => "Đinh Trung Nguyên",
              'email' => 'nguyen'.$i.'@gmail.com',
              // 'trang_thai' => 'nguyen'.$i.'@gmail.com',
              'password' => Hash::make('123456'),
              "created_at"=>date("y-m-d H:i:s"),
              "updated_at"=>date("y-m-d H:i:s"),
          ];
          $sanpham[$i] = [
            'ten_sp'=>"Iphone 1".$i,
            'gia'=>20000,
            'id_danhmuc'=>1,
            'so_luong'=>2,
            'hinh_anh'=>"product1.jpg",
            'mo_ta'=>"xịn ",
            "created_at"=>date("y-m-d H:i:s"),
            "updated_at"=>date("y-m-d H:i:s"),
           
          ];
          $khachhang[$i] = [
            'ten_kh'=>"Abc".$i,
            'email' => 'abc'.$i.'@gmail.com',
            'dia_chi' => 'Hà Nội',
            "created_at"=>date("y-m-d H:i:s"),
            "updated_at"=>date("y-m-d H:i:s"),
           
          ];
          $khuyenmai[$i] = [
            'ten_km'=>"Giảm giá mạnh",
            'code_km'=>"abc123",
            "created_at"=>date("y-m-d H:i:s"),
            "updated_at"=>date("y-m-d H:i:s"),
          ];
          $hoadon[$i]= [
            'id_kh' => 12,
            'id_sp' => 2,
          
            "created_at"=>date("y-m-d H:i:s"),
            "updated_at"=>date("y-m-d H:i:s"),
        ];
        $giohang[$i]= [
          'ten_kh'=>"Đinh Trung Nguyên",
          'email' => 'nguyen'.$i.'@gmail.com',
          'dia_chi' => "Hà Nội",
          'ten_sp' => "Iphone 1",
          'gia' => 20000,
          'hinh_anh'=>"product1.jpg",
          'mo_ta'=>"xịn ",
          "created_at"=>date("y-m-d H:i:s"),
          "updated_at"=>date("y-m-d H:i:s"),
      ];
      $cthoadon[$i]= [
        'id_sanpham'=>"Đinh Trung Nguyen",
        'ten_kh'=>"Đinh Trung Nguyen",
        'email' => 'nguyen'.$i.'@gmail.com',
        'dia_chi' => "Hà Nội",
        'ten_sp' => "Iphone 1",
        'gia' => 20000,
        'hinh_anh'=>"product1.jpg",
        'mo_ta'=>"xịn ",
        'tong_tien'=>20000,
        "created_at"=>date("y-m-d H:i:s"),
        "updated_at"=>date("y-m-d H:i:s"),
    ];
      }
      for($i = 1;$i<11;$i++){
      $banner[$i] = [
        'ten_banner'=>"Iphone".$i,
        'hinh_anh'=>"banner1.png",
        "created_at"=>date("y-m-d H:i:s"),
        "updated_at"=>date("y-m-d H:i:s"),
      ]; }
      for($i = 1;$i<11;$i++){
      $danhmuc[$i] = [
        'ten_danhmuc'=>"Iphone",
        "created_at"=>date("y-m-d H:i:s"),
        "updated_at"=>date("y-m-d H:i:s"),
       
      ];}
      for($i = 1;$i<11;$i++){
        $cart[$i] = [
          'user_id'=>"1",
          "created_at"=>date("y-m-d H:i:s"),
          "updated_at"=>date("y-m-d H:i:s"),
         
        ];}
        for($i = 1;$i<11;$i++){
          $cart_items[$i] = [
            'sanpham_id'=>"1",
            'cart_id'=>"1",
            'so_luong'=>"2",
            'gia'=>"20000",
            "created_at"=>date("y-m-d H:i:s"),
            "updated_at"=>date("y-m-d H:i:s"),
           
          ];
    }
      DB::table('khach_hangs')->insert($khachhang);
      DB::table('hoa_dons')->insert($hoadon);
      DB::table('khuyen_mais')->insert($khuyenmai);
      DB::table('banners')->insert($banner);
      DB::table('danh_mucs')->insert($danhmuc);
      DB::table('san_phams')->insert($sanpham);
      DB::table('users')->insert($nguoidung);
      DB::table('ct_hoadons')->insert($cthoadon);
      DB::table('carts')->insert($cart);
      DB::table('cart_items')->insert($cart_items);
    //   DB::table('users')->insert([
    //     'name' => "Poly",
    //     'email' => 'poly@gmail.com',
    //     //'level'=> 1,
    //     'password' => Hash::make('123456'),
    // ]);
     
      // DB::table('teachers')->insert($teacherSeed);
      // DB::table('students')->insert($studentSeed);
       
    }
      
   
}
