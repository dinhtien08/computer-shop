<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Mỗi dòng gồm: hãng, tên laptop, giá bán (đồng), tồn kho, mô tả.
        $products = [
            [
                'Dell', 'Inspiron 15 3520', 13990000, 12,
                'Màn hình 15,6 inch Full HD cho không gian làm việc rộng khi nhập liệu và xem bảng tính. Cấu hình mẫu gồm Core i5, RAM 16 GB và SSD 512 GB, phù hợp cho sinh viên học trực tuyến, làm báo cáo và lập trình web cơ bản.',
            ],
            [
                'Dell', 'Inspiron 14 5430', 17990000, 8,
                'Laptop 14 inch dành cho người thường mang máy giữa nhà, lớp học và văn phòng. Core i5, RAM 16 GB và SSD 512 GB đáp ứng nhu cầu mở IDE, trình duyệt và ứng dụng họp trực tuyến cùng lúc.',
            ],
            [
                'Dell', 'Latitude 5440', 21990000, 6,
                'Mẫu laptop doanh nghiệp với màn hình 14 inch, Core i5 và RAM 16 GB. SSD 512 GB đủ chỗ cho tài liệu dự án, còn kích thước máy phù hợp với người thường xuyên di chuyển để họp hoặc gặp khách hàng.',
            ],
            [
                'Dell', 'XPS 13 9315', 27990000, 4,
                'Laptop nhỏ gọn với màn hình 13,4 inch tỷ lệ 16:10, thuận tiện khi đọc tài liệu dài hoặc xem nhiều dòng mã. Cấu hình Core i7, RAM 16 GB và SSD 512 GB hướng đến người ưu tiên tính di động và công việc văn phòng.',
            ],
            [
                'Dell', 'G15 5530', 26990000, 5,
                'Laptop gaming 15,6 inch dùng Core i7, RAM 16 GB và GPU GeForce RTX 4050. Card đồ họa rời phù hợp cho chơi game, học dựng hình 3D và chỉnh sửa video; SSD 1 TB dành chỗ cho trò chơi và tệp dự án lớn.',
            ],
            [
                'Dell', 'Precision 3581', 32990000, 3,
                'Máy trạm di động dành cho công việc kỹ thuật với Core i7, RAM 32 GB và SSD 1 TB. Màn hình 15,6 inch và GPU chuyên dụng phù hợp để thao tác với bản vẽ CAD, mô hình 3D và bộ dữ liệu lớn.',
            ],

            [
                'ASUS', 'Vivobook 15 X1504', 12990000, 15,
                'Laptop học tập có màn hình 15,6 inch Full HD, Core i5, RAM 8 GB và SSD 512 GB. Bàn phím có cụm số riêng thuận tiện cho nhập liệu kế toán, làm bài tập Excel và quản lý chi tiêu.',
            ],
            [
                'ASUS', 'Zenbook 14 OLED UX3402', 23990000, 7,
                'Màn hình OLED 14 inch phù hợp với người thường xem ảnh, làm slide và chỉnh sửa nội dung hình ảnh. Cấu hình mẫu dùng Core i5, RAM 16 GB và SSD 512 GB trong thân máy gọn để mang đi làm mỗi ngày.',
            ],
            [
                'ASUS', 'TUF Gaming A15 FA507', 24990000, 9,
                'Laptop gaming dùng Ryzen 7, RAM 16 GB, SSD 512 GB và GeForce RTX 4050. Màn hình 15,6 inch tần số quét 144 Hz giúp chuyển động trong game mượt hơn, đồng thời đáp ứng nhu cầu học lập trình đồ họa.',
            ],
            [
                'ASUS', 'ROG Zephyrus G14 GA402', 35990000, 4,
                'Mẫu gaming 14 inch phù hợp cho người muốn mang theo một máy để vừa làm việc vừa chơi game. Ryzen 9, RAM 32 GB, SSD 1 TB và GeForce RTX 4060 phục vụ dựng video, xử lý đồ họa và chạy các dự án game.',
            ],

            [
                'Lenovo', 'IdeaPad Slim 3 15IRU8', 11990000, 14,
                'Laptop phổ thông 15,6 inch với Core i3, RAM 8 GB và SSD 512 GB. Cấu hình phù hợp cho soạn thảo, tra cứu tài liệu, học qua video và thực hành các bài tập HTML, CSS hoặc JavaScript.',
            ],
            [
                'Lenovo', 'ThinkPad E14 Gen 5', 19990000, 10,
                'Laptop doanh nghiệp 14 inch dùng Core i5, RAM 16 GB và SSD 512 GB. Bàn phím có TrackPoint để điều khiển con trỏ ngay khi gõ, phù hợp cho người thường viết báo cáo, làm việc với terminal hoặc lập trình.',
            ],
            [
                'Lenovo', 'Legion 5 15ACH6H', 25990000, 5,
                'Laptop hiệu năng cao với Ryzen 7, RAM 16 GB và GeForce RTX 3060. Màn hình 15,6 inch cùng SSD 1 TB phục vụ chơi game, biên tập video và lưu các dự án có nhiều tài nguyên đồ họa.',
            ],

            [
                'HP', 'Pavilion 14', 14990000, 11,
                'Laptop 14 inch dùng Core i5, RAM 16 GB và SSD 512 GB, phù hợp với nhu cầu học tập và làm việc tại nhà. Kích thước màn hình cân bằng giữa diện tích hiển thị và sự gọn nhẹ khi mang máy đi học.',
            ],
            [
                'HP', 'EliteBook 840 G10', 28990000, 4,
                'Mẫu máy doanh nghiệp có màn hình 14 inch tỷ lệ 16:10, giúp hiển thị thêm nội dung theo chiều dọc khi đọc hợp đồng hoặc bảng biểu. Core i7, RAM 16 GB và SSD 512 GB đáp ứng công việc văn phòng đa nhiệm.',
            ],
            [
                'HP', 'Victus 16', 23990000, 6,
                'Laptop gaming màn hình 16,1 inch dành cho người thích không gian hiển thị lớn. Cấu hình Ryzen 7, RAM 16 GB, SSD 512 GB và GeForce RTX 4050 phù hợp để chơi game, chỉnh sửa video và học thiết kế 3D.',
            ],

            [
                'Acer', 'Aspire 5 A515', 13490000, 13,
                'Laptop 15,6 inch Full HD với Core i5, RAM 16 GB và SSD 512 GB. Máy phù hợp для học lập trình web, chạy môi trường PHP/MySQL cục bộ và mở song song trình duyệt, trình soạn thảo cùng tài liệu học tập.',
            ],
            [
                'Acer', 'Nitro V 15 ANV15-51', 22490000, 8,
                'Laptop gaming 15,6 inch trang bị Core i5, RAM 16 GB và GeForce RTX 4050. Màn hình 144 Hz hướng đến các tựa game có chuyển động nhanh; SSD 512 GB dùng để cài trò chơi và công cụ phát triển.',
            ],

            [
                'Apple', 'MacBook Air 13 M2', 22990000, 7,
                'Laptop 13,6 inch dùng chip Apple M2, bộ nhớ hợp nhất 16 GB và SSD 256 GB. Thiết kế không quạt phù hợp với môi trường làm việc yên tĩnh, viết mã, soạn tài liệu và chỉnh sửa ảnh trên macOS.',
            ],
            [
                'Apple', 'MacBook Pro 14 M3 Pro', 45990000, 0,
                'Laptop 14,2 inch dùng chip M3 Pro, bộ nhớ hợp nhất 18 GB và SSD 512 GB. Màn hình Liquid Retina XDR và hệ thống tản nhiệt chủ động phù hợp cho dựng phim, biên dịch ứng dụng và xử lý dự án sáng tạo kéo dài.',
            ],
        ];

        DB::transaction(function () use ($products) {
            $categories = [];

            foreach ($products as [$brand, $name, $price, $stock, $description]) {
                $categories[$brand] ??= Category::firstOrCreate(['name' => $brand]);

                Product::firstOrCreate(
                    [
                        'category_id' => $categories[$brand]->id,
                        'name' => $name,
                    ],
                    [
                        'price' => $price,
                        'stock' => $stock,
                        'description' => $description,
                        'image' => null,
                    ]
                );
            }
        });
    }
}
