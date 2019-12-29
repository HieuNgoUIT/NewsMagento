<?php

namespace Rsgitech\News\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $date;
 
    public function __construct(
        \Magento\Framework\Stdlib\DateTime\DateTime $date
    ) {
        $this->date = $date;
    }
    
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $dataNewsRows = [
            [
                'title' => '“Mắt Biếc” Trúc Anh: "Một cô gái thích xa hoa đâu có nghĩa là thiếu chiều sâu nội tâm. Hà Lan đáng yêu thì Ngạn mới yêu nhiều như vậy."',
                'subtitle' => 'Với Trúc Anh, Hà Lan của "Mắt Biếc" vẫn luôn là một cô gái hướng nội và có những điều đáng để được người ta cảm thông.',
                'image' => 'https://picsum.photos/500/400',
                'description' => '<p>Trúc Anh nổi lên như một hiện tượng sau khi được lựa chọn để đảm nhận vai nữ chính trong Mắt Biếc - dự án phim chuyển thể từ tác phẩm của nhà văn Nguyễn Nhật Ánh mà đạo diễn Victor Vũ đã ấp ủ từ lâu. Chưa có nhiều kinh nghiệm diễn xuất cũng chẳng phải một gương mặt quá quen thuộc với giới trẻ, Trúc Anh từng khiến nhiều người lo ngại khi phải đảm nhận một vai diễn nặng ký. Đáng mừng là ngay sau những suất chiếu đầu tiên, cô gái nhỏ đã nhận về không ít phản hồi tích cực. Đến với buổi phỏng vấn của chúng tôi giữa thời điểm Mắt Biếc đang trở thành cái tên được người người, nhà nhà săn đón, Trúc Anh đã có những chia sẻ rất thành về cột mốc đáng nhớ trong sự nghiệp của mình. Tôi thấy đây là cảnh khóc xấu nhất mà mình từng được xem Trúc Anh nghĩ sao về cái kết của Mắt Biếc?</p>
                <p>Tôi luôn thích cái kết happy ending, những nhân vật chính và những người yêu nhau sẽ có cơ hội đến với nhau. Nhưng tôi lại thấy đây là cái kết hoàn hảo cho phim vì một chút day dứt, lưu luyến sẽ để lại trong lòng người xem ấn tượng khó phai hơn. Tôi có đọc một số review và thấy mọi người khá thích cái kết mới này, nó có cao trào và lấy được nước mắt của nhiều người. Khán giả có người dễ tính thì cũng có người khó tính, dĩ nhiên là khi làm một một bộ thì tôi không thể nào làm vừa lòng tất cả mọi người được. Trúc Anh có nghĩ tới một cái kết khác trọn vẹn hơn không? Tôi nghĩ rằng mỗi diễn viên khi hóa thân vào nhân vật đều có sẽ có một ngoại truyện cho nhân vật của mình trong đầu.</p> <p><img src="https://picsum.photos/500/400" alt=""></p>',
                'status' => 1,
                'updated_at' => $this->date->date(),
                'created_at' => $this->date->date()
            ],
            [
                'title' => 'U23 Việt Nam về nước: Hà Đức Chinh làm sân bay náo loạn, Quang Hải mệt vì "cười nhiều" ',
                'subtitle' => '14h chiều 22/12, U23 Việt Nam đã trở về TP.HCM để tiếp tục chuẩn bị cho VCK U23 châu Á 2020 sẽ diễn ra tại Thái Lan vào tháng 1 năm sau. Dự kiến toàn đội sẽ trở lại tập luyện vào ngày 25/12.',
                'image' => 'https://picsum.photos/500/400',
                'description' => 'U23 Việt Nam đã trở về TP.HCM sau chuyến tập huấn tại Hàn Quốc để chuẩn bị cho VCK U23 châu Á 2020 tại Thái Lan. Tiền đạo Hà Đức Chinh được chú ý nhiều nhất với kiểu đầu xù lạ lẫm. Vừa bước ra, Chinh "đen" đã khiến các CĐV tại sân bay một phen"náo loạn". Ảnh: Thủ Khúc
                Hà Đức Chinh ban đầu cười rất nhiều khi được fan chào đón.',
                'status' => 1,
                'updated_at' => $this->date->date(),
                'created_at' => $this->date->date()
            ]
        ];
        
        foreach($dataNewsRows as $data) {
            $setup->getConnection()->insert($setup->getTable('rsgitech_news'), $data);
        }

        $dataNewsRows = [
            [
                'comment_news_id' => '1',
                'name' => 'Anonymus User',
                'email' => 'Anonymus@gmail.com',
                'description' => 'Thank you for the news',
                'updated_at' => $this->date->date(),
                'created_at' => $this->date->date()
            ],

            [
                'comment_news_id' => '1',
                'name' => 'Hieu',
                'email' => 'hieu123@gmail.com',
                'description' => 'Thank you for the new blog!!! Its awesome',
                'updated_at' => $this->date->date(),
                'created_at' => $this->date->date()
            ]
        ];

        foreach($dataNewsRows as $data) {
            $setup->getConnection()->insert($setup->getTable('comments'), $data);
        }

        $dataNewsRows = [
            [
                'news_id' => '1',
                'key' => 'Weather',
                'value' => 'sunny'             
            ]          
        ];

        foreach($dataNewsRows as $data) {
            $setup->getConnection()->insert($setup->getTable('rsgitech_news_meta'), $data);
        }
    }
}

