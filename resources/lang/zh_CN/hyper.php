<?php

return [

    # Hyper Theme

    'notice_announcement' => '- 公 示 栏 -',
    'error_back_btn'      => '返回',
    'error_error'         => '错误',
    'order_search'        => '查询订单',
    'global_currency'     => '￥',
    'blog_name'           => '售后Q群',
    'blog_url'            => 'https://qm.qq.com/cgi-bin/qm/qr?k=8VnPsbPuH9T3VzKuTUfApqkFCEZsP8aT&jump_from=webapi&authKey=BIFH+zGNLBM5crB5oNGrOJTByjGo7g4RLrGqcPZoFOdjMwxH3zJ0pDnfipa7yiV6', // 或者您想要跳转的其他URL
    # home.blade.php

    'home_title'              => '欢迎来到云小店~',
    'home_search_box'         => '输入关键词搜索...',
    'home_product_name'       => '商品名称',
    'home_product_class'      => '类型',
    'home_in_stock'           => '库存',
    'home_price'              => '价格',
    'home_place_an_order'     => '操作',
    'home_discount'           => '折扣',
    'home_automatic_delivery' => '自动发货',
    'home_charge'             => '人工发货',
    'home_buy'                => '购买',
    'home_sell_out'           => '暂时无货',
    'home_sell_out_tip'       => '商品缺货',
    'home_whole'              => '全部',
    'home_tip'                => '提示',
    'home_out_of_stock'       => '缺货',

    # buy.blade.php
    'buy_title'                 => '产品详细信息',
    'buy_automatic_delivery'    => '自动发货',
    'buy_charge'                => '人工发货',
    'buy_purchase'              => '购买',
    'buy_the_above'             => '件起',
    'buy_each'                  => '元/件',
    'buy_price'                 => '价格',
    'buy_email'                 => '电子邮箱',
    'buy_input_account'         => '接收卡密或通知',
    'buy_purchase_quantity'     => '购买数量',
    'buy_in_stock'              => '库存',
    'buy_purchase_restrictions' => '限购',
    'buy_search_password'       => '查询密码',
    'buy_input_search_password' => '查询订单密码',
    'buy_promo_code'            => '优惠码',
    'buy_input_promo_code'      => '您有优惠码吗？',
    'buy_choose_payment_method' => '请选择支付方式',
    'buy_behavior_verification' => '行为验证',
    'buy_verify_code'           => '验证码',
    'buy_payment_method'        => '支付方式',
    'buy_order_now'             => '提交订单',
    'buy_product_desciption'    => '商品详情',
    'buy_warning'               => '警告！',
    'buy_purchase_tips'         => '提示',
    'buy_empty_mailbox'         => '邮箱不能为空！',
    'buy_zero_quantity'         => '购买数量不能为 0！',
    'buy_exceeds_stock'         => '数量不允许大于库存！',
    'buy_exceeds_limit'         => '已超过限购数量！',
    'buy_empty_query_password'  => '查询密码不能为空！',
    'buy_empty_payment_method'  => '未选择支付方式！',
    'buy_empty_captcha'         => '验证码不能为空！',
    'buy_correct_verification'  => '请正确完成行为验证！',

    # bill.blade.php

    'bill_title'             => '确认订单',
    'bill_order_number'      => '订单号',
    'bill_product_name'      => '订单名称',
    'bill_commodity_price'   => '商品单价',
    'bill_purchase_quantity' => '购买数量',
    'bill_promo_code'        => '优惠码',
    'bill_discounted_price'  => '优惠金额',
    'bill_actual_payment'    => '商品总价',
    'bill_email'             => '邮箱',
    'bill_order_information' => '订单资料',
    'bill_payment_method'    => '支付方式',
    'bill_pay_immediately'   => '立即支付',

    # orderinfo.blade.php

    'orderinfo_title'              => '订单详情',
    'orderinfo_order_title'        => '订单名称',
    'orderinfo_number_of_orders'   => '下单数量',
    'orderinfo_order_time'         => '下单时间',
    'orderinfo_email'              => '邮箱',
    'orderinfo_order_class'        => '订单类型',
    'orderinfo_automatic_delivery' => '自动发货',
    'orderinfo_charge'             => '人工发货',
    'orderinfo_total_order_price'  => '订单总价',
    'orderinfo_order_status'       => '订单状态',
    'orderinfo_status_expired'     => '已过期',
    'orderinfo_status_wait_pay'    => '待支付',
    'orderinfo_status_pending'     => '待处理',
    'orderinfo_status_processed'   => '已处理',
    'orderinfo_status_completed'   => '已完成',
    'orderinfo_status_failed'      => '已失败',
    'orderinfo_status_abnormal'    => '状态异常',
    'orderinfo_payment_method'     => '支付方式',
    'orderinfo_carmi'              => '卡密',
    'orderinfo_copy_carmi'         => '复制卡密',
    'orderinfo_tips'               => '提示',
    'orderinfo_copy_success'       => '复制成功',
    'orderinfo_copy_error'         => '复制失败',
    'orderinfo_order_information'  => '没有找到订单信息',

    # qrpay.blade.php

    'qrpay_title'                 => '扫码支付',
    'qrpay_order_expiration_date' => '订单有效期',
    'qrpay_expiration_date'       => '分钟',
    'qrpay_actual_payment'        => '商品总价',
    'qrpay_open_app_to_pay'       => '打开app支付',
    'qrpay_notice'                => '通知！',
    'payment_successful'          => '支付成功！',
    'order_pay_timeout'           => '支付超时！',

    # searchOrder.blade.php

    'searchOrder_title'                  => '查询订单',
    'searchOrder_query_tips'             => '注意：最多只能查询近5笔订单。',
    'searchOrder_order_search_by_number' => '订单',
    'searchOrder_order_search_by_email'  => '邮箱',
    'searchOrder_order_search_by_ie'     => '缓存',
    'searchOrder_order_number'           => '订单号',
    'searchOrder_search_now'             => '立即查询',
    'searchOrder_reset_order'            => '重置',
    'searchOrder_email'                  => '邮箱',
    'searchOrder_search_password'        => '查询密码',
    'searchOrder_input_order_number'     => '请输入订单编号',
    'searchOrder_input_email'            => '请输入邮箱',
    'searchOrder_input_query_password'   => '请输入查询密码',
];
