<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MedicalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicals')->delete();

        DB::table('medicals')->insert(array(
            0 => array(
                'id' => 1,
                'description' => 'Tiền sử phản vệ từ độ 2 trở lên',

            ),
            1 => array(
                'id' => 2,
                'description' => 'Tiền sử bị COVID-19 trong vòng 6 tháng',

            ),
            2 => array(
                'id' => 3,
                'description' => 'Tiền sử tiêm vắc xin khác trong 14 ngày qua',

            ),
            3 => array(
                'id' => 4,
                'description' => 'Tiền sử suy giảm miễn dịch, ung thư giai đoạn cuối, cắt lách, xơ gan mất bù,...',

            ),
            4 => array(
                'id' => 5,
                'description' => 'Đang dùng thuốc ức chế miễn dịch, corticoid liều cao (tương đương hoặc hơn 2mg prednisolon/kg/ngày trong ít nhất 7 ngày) hoặc điều trị hóa trị, xạ trị',

            ),
            5 => array(
                'id' => 6,
                'description' => 'Bệnh cấp tính',

            ),
            6 => array(
                'id' => 7,
                'description' => 'Tiền sử bệnh mạn tính, đang tiến triển',

            ),
            7 => array(
                'id' => 8,
                'description' => 'Tiền sử bệnh mạn tính đã điều trị ổn',

            ),
            8 => array(
                'id' => 9,
                'description' => 'Đang mang thai, phụ nữ nuôi con bằng sữa mẹ',

            ),
            9 => array(
                'id' => 10,
                'description' => 'Độ tuổi: ≥ 65 tuổi',

            ),
            10 => array(
                'id' => 11,
                'description' => 'Tiền sử rối loạn đông máu/cầm máu hoặc đang dùng thuốc chống đông',

            ),
            11 => array(
                'id' => 12,
                'description' => 'Tiền sử dị ứng với các dị nguyên khác',

            ),
        ));
    }
}