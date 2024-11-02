<?php

return [
    'settings' => 'Cài đặt',
    'name' => 'Thương mại điện tử',
    'setting' => [
        'email' => [
            'title' => 'E-commerce',
            'description' => 'Ecommerce email config',
            'order_confirm_subject' => 'Subject of order confirmation email',
            'order_confirm_subject_placeholder' => 'The subject of email confirmation send to the customer',
            'order_confirm_content' => 'Content of order confirmation email',
            'order_status_change_subject' => 'Subject of email when changing order\'s status',
            'order_status_change_subject_placeholder' => 'Subject of email when changing order\'s status send to customer',
            'order_status_change_content' => 'Content of email when changing order\'s status',
            'from_email' => 'Email from',
            'from_email_placeholder' => 'Email from address to display in mail. Ex: example@gmail.com',
        ],
    ],
    'store_address' => 'Địa chỉ cửa hàng',
    'store_phone' => 'Số điện thoại cửa hàng',
    'order_id' => 'Mã đơn hàng',
    'order_token' => 'Chuỗi mã hoá đơn hàng',
    'customer_name' => 'Tên khách hàng',
    'customer_email' => 'Email khách hàng',
    'customer_phone' => 'Số điện thoại khách hàng',
    'customer_address' => 'Địa chỉ khách hàng',
    'product_list' => 'Danh sách sản phẩm trong đơn hàng',
    'payment_detail' => 'Chi tiết thanh toán',
    'shipping_method' => 'Phương thức vận chuyển',
    'payment_method' => 'Phương thức thanh toán',
    'standard_and_format' => 'Tiêu chuẩn & Định dạng',
    'standard_and_format_description' => 'Các tiêu chuẩn và các định dạng được sử dụng để tính toán những thứ như giá cả sản phẩm, trọng lượng vận chuyển và thời gian đơn hàng được đặt.',
    'change_order_format' => 'Chỉnh sửa định dạng mã đơn hàng (tùy chọn)',
    'change_order_format_description' => 'Mã đơn hàng mặc định bắt đầu từ :number. Bạn có thể thay đổi chuỗi bắt đầu hoặc kết thúc để tạo mã đơn hàng theo ý bạn, ví dụ "DH-:number" hoặc ":number-A"',
    'start_with' => 'Bắt đầu bằng',
    'end_with' => 'Kết thúc bằng',
    'order_will_be_shown' => 'Mã đơn hàng của bạn sẽ hiển thị theo mẫu',
    'weight_unit' => 'Đơn vị cân nặng',
    'height_unit' => 'Đơn vị chiều dài/chiều cao',
];
