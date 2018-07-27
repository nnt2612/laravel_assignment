<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'name'=>'Tiếng Nhật',
                'description'=>'Những đầu sách dành cho ngững người yêu Tiếng Nhật',
                'images'=>'http://lazi.vn/uploads/center/1483613422_OHAYO.jpg'
            ],

            [
                'name'=>'Tiếng Hàn',
                'description'=>'Những đầu sách dành cho ngững người yêu Tiếng Hàn',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm7bmKFQAnqaVYyK74yo9QH4riPNGrcPnZZyRX-O0QgcwUjDZq'
            ],

            [
                'name'=>'Tiếng Trung',
                'description'=>'Những đầu sách dành cho ngững người yêu Tiếng Trung',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO47a_N6uKnL62aJHKSp-smZpIqwFIjcsW3sOAJ4XHmn2EDpkL'
            ],

            [
                'name'=>'Luyện Thi',
                'description'=>'Những quyển sách luyện thi thú vị nhất',
                'images'=>'https://i2.wp.com/aloha.edu.vn/wp-content/uploads/2017/02/luyen-thi-jlpt-1.jpg?fit=399%2C224&ssl=1'
            ],

            [
                'name'=>'Mẹ và bé',
                'description'=>'Những quyển sách thú vị dành cho những người đã và đang chuẩn bị làm mẹ ',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5Qd8wvTuWBanzkdXhtTCl7VkGjBN8VCQFl9HBZQrImpeXgs2b'
            ],
        ]);

    }
}
