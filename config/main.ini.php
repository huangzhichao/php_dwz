<?php
 /*
  * made by Qirong Wu
  function: 整个前台站点链接配置
 */
 $smarty->assign("login",md5('login'));//登录界面
 $smarty->assign("user_check",md5('user_check'));//用户登录验证
 $smarty->assign("index",md5('index'));//用户登录验证
 $smarty->assign("orderlist",md5('orderlist'));//订单
 $smarty->assign("orderlist_json",md5('orderlist_json'));
 $smarty->assign("orderlist_get_all",md5('orderlist_get_all'));
 $smarty->assign("add_order",md5('add_order'));
 $smarty->assign("productlist",md5('productlist'));
 $smarty->assign("outproductlist",md5('outproductlist'));
 $smarty->assign("inproductlist",md5('inproductlist'));
 $smarty->assign("admin",md5('admin'));//用户登录验证
 $smarty->assign("my_test",md5('my_test'));//测试
 $smarty->assign("test_update",md5('test_update'));//测试
 $smarty->assign("test_updateact",md5('test_updateact'));//测试
 $smarty->assign("test_del",md5('test_del'));//测试
  $smarty->assign("test_add",md5('test_add'));//测试
  $smarty->assign("test_addact",md5('test_addact'));//测试
 // 订单数据
?>