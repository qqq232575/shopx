<?php
<<<<<<< HEAD
defined('InShopNC') or exit('Access Invalid!');
=======
defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
/**
 * 共有語言
 */

/**
 * index
 */
$lang['groupbuy_index_no_right']			= '您的店舖等級沒有此權限';
$lang['groupbuy_index_in_audit']			= '您的店舖等級正在審核中';
$lang['groupbuy_index_add_success']			= '添加團購活動成功';
$lang['groupbuy_index_add_fail']			= '添加團購活動失敗';
$lang['groupbuy_index_not_exists']			= '未找到團購活動';
$lang['groupbuy_index_modify_success']		= '修改團購活動成功';
$lang['groupbuy_index_modify_fail']			= '修改團購活動失敗';
$lang['groupbuy_index_default_spec']		= '預設規格';
$lang['groupbuy_index_all_group']			= '全部團購';
$lang['groupbuy_index_unpublish']			= '未發佈';
$lang['groupbuy_index_canceled']			= '已取消';
$lang['groupbuy_index_going']				= '進行中';
$lang['groupbuy_index_finished']			= '已完成';
$lang['groupbuy_index_ended']				= '已結束';
$lang['groupbuy_index_num']					= '(人數)';
$lang['groupbuy_index_amount']				= '(數量)';
$lang['groupbuy_index_desc']				= '說明';
$lang['groupbuy_index_order_num']			= '訂購數';
$lang['groupbuy_index_input_name']			= '請填寫團購名稱';
$lang['groupbuy_index_desc']				= '團購說明';
$lang['groupbuy_index_end_time']			= '結束時間';
$lang['groupbuy_index_search_first']		= '請先搜索團購商品';
$lang['groupbuy_index_input_right_num']		= '請正確填寫成團人數';
$lang['groupbuy_index_input_right_amount']	= '請正確填寫成團件數';
$lang['groupbuy_index_def_quantity_error']  = '請正確填寫已訂購數';
$lang['groupbuy_index_goods_sum_null']		= '商品總數不能為空';
$lang['groupbuy_index_goods_sum_one']		= '商品總數不能小於1';
$lang['groupbuy_index_input_right_price']	= '請正確填寫團購價格';
$lang['groupbuy_index_max_per_user_error']  = '請正確填寫每人限購數量';
$lang['groupbuy_index_input_price']			= '請填寫團購價格';
$lang['groupbuy_index_base_info']			= '團購基本信息';
$lang['groupbuy_index_activity_name']		= '活動名稱';
$lang['groupbuy_index_publish_now']			= '立即發佈';
$lang['groupbuy_index_yes']					= '是';
$lang['groupbuy_index_no']					= '否';
$lang['groupbuy_index_publish_tip']			= '如果“立即發佈”，除“團購說明”外的信息將不能再被更改';
$lang['groupbuy_index_start_time']			= '開始時間';
$lang['groupbuy_index_end_time']			= '結束時間';
$lang['groupbuy_index_goods_info']			= '團購商品信息';
$lang['groupbuy_index_choose_goods']		= '選擇商品';
$lang['groupbuy_index_order_num_now']		= '已訂購數';
$lang['groupbuy_index_order_num_published']	= '發佈後顯示的已訂購數';
$lang['groupbuy_index_condition']			= '限制條件';
$lang['groupbuy_index_by_num']				= '按照人數';
$lang['groupbuy_index_by_amount']			= '按照數量';
$lang['groupbuy_index_group_num']			= '成團人數';
$lang['groupbuy_index_group_espect_num']	= '能完成團購的期望訂購人數';
$lang['groupbuy_index_group_amount']		= '成團件數';
$lang['groupbuy_index_group_espect_amount']	= '能完成團購的期望訂購件數';
$lang['groupbuy_index_amount_limit']		= '每人限購';
$lang['groupbuy_index_amount_limit_tip']	= '每個參團者最多能訂購的件數，0為不限制';
$lang['groupbuy_index_goods_sum']			= '商品總數';
$lang['groupbuy_index_amount_max_limit']	= '所有參團者最多能訂購的數量，預設為商品庫存數';
$lang['groupbuy_index_intro']				= '本團介紹';
$lang['groupbuy_index_spec_price']			= '規格價格';
$lang['groupbuy_index_spec']				= '規格';
$lang['groupbuy_index_stock']				= '庫存';
$lang['groupbuy_index_store_price']			= '店舖價格';
$lang['groupbuy_index_group_price']			= '團購價';
$lang['groupbuy_index_search']				= '查詢';
$lang['groupbuy_index_submit']				= '提交';
$lang['groupbuy_index_new_group']			= '新增團購';
$lang['groupbuy_index_activity_state']		= '活動狀態';
$lang['groupbuy_index_start_time']			= '起始時間';
$lang['groupbuy_index_group_num']			= '已團購';
$lang['groupbuy_index_to']					= '至';
$lang['groupbuy_index_year']				= '年';
$lang['groupbuy_index_month']				= '月';
$lang['groupbuy_index_day']					= '日';
$lang['groupbuy_index_publish_tip']			= '發佈後除修改說明外不能再被編輯，您確定要發佈嗎';
$lang['groupbuy_index_publish']				= '發佈';
$lang['groupbuy_index_del_tip']				= '若該團購已完成，則刪除該團購將導致未下單的用戶無法下單，您確定要這麼做嗎';
$lang['groupbuy_index_order']				= '訂單';
$lang['groupbuy_index_order_state']			= '訂購情況';
$lang['groupbuy_index_finish_tip']			= '該操作將要把團購設置為成功狀態，您確定要結束預定嗎';
$lang['groupbuy_index_finish']				= '完成';
$lang['groupbuy_index_end']				    = '結束預定';
$lang['groupbuy_index_no_record']			= '沒有找到符合條件的商品';
$lang['groupbuy_index_loading_list']		= '正在加載商品列表';
$lang['groupbuy_index_no_goods']			= '沒有找到相關商品';
$lang['groupbuy_index_choose_goods']		= '選擇商品';
$lang['groupbuy_index_goods_name']			= '商品名稱';
$lang['groupbuy_index_store_class']			= '本店分類';
$lang['groupbuy_index_please_choose']		= '請選擇';
$lang['groupbuy_index_search_back']			= '請先從上面搜索';
$lang['groupbuy_index_publish_success']		= '發佈成功';
$lang['groupbuy_index_change_to_finish']		= '已更改狀態為完成';
$lang['groupbuy_index_group_canceled']			= '團購商品已取消';
$lang['groupbuy_index_modify_intro_success']	= '修改商品說明成功';
$lang['groupbuy_index_modify_order_num_sucess']	= '修改商品訂購數成功';
$lang['groupbuy_index_cancel_reason']			= '取消原因';
$lang['groupbuy_index_username']				= '用戶名';
$lang['groupbuy_index_linkman']					= '聯繫人';
$lang['groupbuy_index_phone']					= '聯繫電話';
$lang['groupbuy_index_jian']					= '件';
$lang['groupbuy_index_no_record_now']			= '暫無訂購記錄';
$lang['groupbuy_index_del_success']		= '刪除團購活動成功';
$lang['groupbuy_index_del_fail']		= '刪除團購活動失敗';
$lang['groupbuy_index_datefail']		= '日期不能小於當日，\n預設團購時間為7天！';
$lang['groupbuy_index_startdatefail']		= '團購開始時間不早于當日，\n預設團購開始時間為當日！';
?>
