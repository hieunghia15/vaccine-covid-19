<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Priority_GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priority_groups')->delete();

        DB::table('priority_groups')->insert(array(
            0 => array(
                'id' => 1,
                'name' => '(1) Người làm việc trong các cơ sở y tế, ngành y tế (công lập và tư nhân)',
            ),
            1 => array(
                'id' => 2,
                'name' => '(2) Người tham gia phòng chống dịch (Thành viên Ban chỉ đạo phòng, chống dịch các cấp, người làm việc ở các khu cách ly, làm nhiệm vụ truy vết, điều tra dịch tễ, tổ Covid dựa vào cộng đồng, tình nguyện viên, phóng viên…)',
            ),
            2 => array(
                'id' => 3,
                'name' => '(3) Lực lượng Quân đội',

            ),
            3 => array(
                'id' => 4,
                'name' => '(4) Lực lượng Công an',
            ),
            4 => array(
                'id' => 5,
                'name' => '(5) Nhân viên, cán bộ ngoại giao của Việt Nam và thân nhân được cử đi nước ngoài; người làm việc trong các cơ quan Ngoại giao, Lãnh sự, các tổ chức quốc tế hoạt động tại Việt Nam',
            ),
            5 => array(
                'id' => 6,
                'name' => '(6) Hải quan, cán bộ làm công tác xuất nhập cảnh',

            ),
            6 => array(
                'id' => 7,
                'name' => '(7) Người cung cấp dịch vụ thiết yếu: hàng không, vận tải, du lịch; cung cấp dịch vụ điện, nước',
            ),
            7 => array(
                'id' => 8,
                'name' => '(8) Giáo viên, người làm việc, học sinh, sinh viên tại các cơ sở giáo dục, đào tạo; lực lượng bác sỹ trẻ; người làm việc tại các cơ quan, đơn vị hành chính; các tổ chức hành nghề luật sư, công chứng, đấu giá… thường xuyên tiếp xúc với nhiều người',
            ),
            8 => array(
                'id' => 9,
                'name' => '(9) Người mắc các bệnh mạn tính; Người trên 65 tuổi',

            ),
            9 => array(
                'id' => 10,
                'name' => '(10) Người sinh sống tại các vùng có dịch',
            ),
            10 => array(
                'id' => 11,
                'name' => '(11) Người nghèo, các đối tượng chính sách xã hội',
            ),
            11 => array(
                'id' => 12,
                'name' => '(12) Người được cơ quan nhà nước có thẩm quyền cử đi công tác, học tập, lao động ở nước ngoài hoặc có nhu cầu xuất cảnh để công tác, học tập và lao động ở nước ngoài; chuyên gia nước ngoài làm việc tại Việt Nam',

            ),
            12 => array(
                'id' => 13,
                'name' => '(13) Các đối tượng là người lao động, thân nhân người lao động đang làm việc tại các doanh nghiệp (bao gồm cả doanh nghiệp trong khu công nghiệp, khu chế xuất, doanh nghiệp kinh doanh vận tải, tín dụng, du lịch…), cơ sở kinh doanh dịch vụ thiết yếu như các cơ sở lưu trú, ăn uống, ngân hàng, chăm sóc sức khỏe, dược, vật tư y tế… cơ sở bán lẻ, bán buôn, chợ, công trình xây dựng, người dân ở vùng, khu du lịch',
            ),
            13 => array(
                'id' => 14,
                'name' => '(14) Các chức sắc, chức việc các tôn giáo',

            ),
            14 => array(
                'id' => 15,
                'name' => '(15) Người lao động tự do',

            ),
            15 => array(
                'id' => 16,
                'name' => '(16) Các đối tượng khác theo Quyết định của Bộ trưởng Bộ Y tế hoặc Chủ tịch Ủy ban nhân dân tỉnh, thành phố và đề xuất của các đơn vị viện trợ vắc xin cho Bộ Y tế',
            ),
        ));
    }
}