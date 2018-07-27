<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('books')->truncate();
        \Illuminate\Support\Facades\DB::table('books')->insert([
            [
                'name' => 'Minna no Nihonggo I',
                'price' => 65000,
                'categoryId' => 1,
                'description' => 'Giáo trình dành cho người bắt đầu học tiếng Nhật - tập 1',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/m/i/minna-no-nihongo.jpg'
            ],

            [
                'name' => 'Mina no Nihongo II',
                'price' => 70000,
                'categoryId' => 1,
                'description' => 'Giáo trình dành cho người bắt đầu học tiếng Nhật - tập 2',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/i/m/img306.u335.d20161103.t161836.757883.jpg'
            ],

            [
                'name' => 'Bản dịch ngữ pháp Minna no Nihongo I',
                'price' => 55000,
                'categoryId' => 1,
                'description' => 'Bản dịch ngữ pháp Minna no Nihongo tập 1',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/m/i/minna-no-nihongo_2_.jpg'
            ],

            [
                'name' => 'Bản dịch ngữ pháp Minna no Nihongo II',
                'price' => 55000,
                'categoryId' => 1,
                'description' => 'Bản dịch ngữ pháp Minna no Nihongo tập 2',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/b/a/ban-dich-va-giai-thich-ngu-phap-tieng-nhat.jpg'
            ],

            [
                'name' => 'Tiếng hàn tổng hợp sơ cấp 1 ',
                'price' => 135000,
                'categoryId' => 2,
                'description' => 'Giáo trình tiếng hàn dành cho người Việt Nam. Bộ sách đã bao gồm sách giáo khoa, sách bài tập và đĩa nghe',
                'images' => 'http://shopsachngoaingu.com/wp-content/uploads/13.jpg'
            ],

            [
                'name' => 'Tiếng hàn tổng hợp sơ cấp 2',
                'price' => 135000,
                'categoryId' => 2,
                'description' => 'Giáo trình tiếng hàn dành cho người Việt Nam. Bộ sách đã bao gồm sách giáo khoa, sách bài tập và đĩa nghe',
                'images' => 'http://shopsachngoaingu.com/wp-content/uploads/19.jpg'
            ],

            [
                'name' => 'Tiếng hàn tổng hợp trung cấp 3',
                'price' => 135000,
                'categoryId' => 2,
                'description' => 'Giáo trình tiếng hàn dành cho người Việt Nam. Bộ sách đã bao gồm sách giáo khoa, sách bài tập và đĩa nghe',
                'images' => 'http://shopsachngoaingu.com/wp-content/uploads/26.jpg'
            ],

            [
                'name' => 'Tiếng hàn tổng hợp trung cấp 4',
                'price' => 135000,
                'categoryId' => 2,
                'description' => 'Giáo trình tiếng hàn dành cho người Việt Nam. Bộ sách đã bao gồm sách giáo khoa, sách bài tập và đĩa nghe',
                'images' => 'http://shopsachngoaingu.com/wp-content/uploads/tieng-han-tong-hop-so-cap-4-sach-hoc.jpg'
            ],

            [
                'name' => 'Tiếng hàn tổng hợp cao cấp 5',
                'price' => 135000,
                'categoryId' => 2,
                'description' => 'Giáo trình tiếng hàn dành cho người Việt Nam. Bộ sách đã bao gồm sách giáo khoa, sách bài tập và đĩa nghe',
                'images' => 'http://shopsachngoaingu.com/wp-content/uploads/32.jpg'
            ],

            [
                'name' => 'Tiếng hàn tổng hợp cao cấp 6',
                'price' => 135000,
                'categoryId' => 2,
                'description' => 'Giáo trình tiếng hàn dành cho người Việt Nam. Bộ sách đã bao gồm sách giáo khoa, sách bài tập và đĩa nghe',
                'images' => 'http://shopsachngoaingu.com/wp-content/uploads/36.jpg'
            ],

            [
                'name' => 'Giáo trình tiếng hán 1 - quyển thượng',
                'price' => 35000,
                'categoryId' => 3,
                'description' => 'Giáo trình tiếng hán mới nhất hiện nay. Đã bao gồm đĩa nghe',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/g/i/giao-trinh-han-ngu-moi-app-1.u5869.d20171019.t162656.981785.jpg'
            ],

            [
                'name' => 'Giáo trình tiếng hán 1 - quyển hạ',
                'price' => 50000,
                'categoryId' => 3,
                'description' => 'Giáo trình tiếng hán mới nhất hiện nay. Đã bao gồm đĩa nghe',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/h/i/hinh.u4939.d20170925.t091351.687421.jpg'
            ],

            [
                'name' => 'Giáo trình tiếng hán 2 - quyển thượng',
                'price' => 50000,
                'categoryId' => 3,
                'description' => 'Giáo trình tiếng hán mới nhất hiện nay. Đã bao gồm đĩa nghe',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/g/i/giao-trinh-han-ngu-tap-2-quyen-thuong-a.jpg'
            ],

            [
                'name' => 'Giáo trình tiếng hán 2 - quyển hạ',
                'price' => 40000,
                'categoryId' => 3,
                'description' => 'Giáo trình tiếng hán mới nhất hiện nay. Không bao gồm đĩa nghe',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/g/i/giao-trinh-anh-ngu-tap-2-quyen-ha-a.jpg'
            ],

            [
                'name' => 'Giáo trình tiếng hán 3 - quyển thượng',
                'price' => 45000,
                'categoryId' => 3,
                'description' => 'Giáo trình tiếng hán mới nhất hiện nay. Không bao gồm đĩa nghe',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/i/m/img674_9.jpg'
            ],

            [
                'name' => 'Giáo trình tiếng hán 3 - quyển hạ',
                'price' => 45000,
                'categoryId' => 3,
                'description' => 'Giáo trình tiếng hán mới nhất hiện nay. ĐÃ bao gồm đĩa nghe',
                'images' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/6/_/6.u5869.d20171019.t162718.67453.jpg'
            ],

            [
                'name' => 'TỔNG HỢP ĐỀ THI ÔN LUYỆN NĂNG LỰC TIẾNG NHẬT TỪ VỰNG VÀ CHỮ KANJI N3 - N2 TRUNG CẤP',
                'price' => 45000,
                'categoryId' => 4,
                'description' => 'Sách dành cho người luyện thi JLPT',
                'images' => 'https://www.fahasa.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/8/9/8935246904244.jpg'
            ],

            [
                'name' => 'TỔNG HỢP ĐỀ THI ÔN LUYỆN NĂNG LỰC TIẾNG NHẬT NGỮ PHÁP VÀ ĐỌC HIỂU N3 - N2 TRUNG CẤP',
                'price' => 70000,
                'categoryId' => 4,
                'description' => 'Sách dành người luyện thi JLPPT',
                'images' => 'https://www.fahasa.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/8/9/8935246904237.jpg'
            ],

            [
                'name' => 'NUÔI CON KHÔNG PHẢI LÀ CUỘC CHIẾN',
                'price' => 70000,
                'categoryId' => 5,
                'description' => 'Sách dành cho những người đã và đang chuẩn bị trở thành bố mẹ',
                'images' => 'https://www.fahasa.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/m/image_145265.jpg'
            ],

            [
                'name' => 'ĂN DẶM KIỂU NHẬT',
                'price' => 105000,
                'categoryId' => 5,
                'description' => 'Sách dành cho những người đã và đang chuẩn bị trở thành bố mẹ',
                'images' => 'https://www.fahasa.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/m/image_172033.jpg'
            ],
        ]);

    }
}
