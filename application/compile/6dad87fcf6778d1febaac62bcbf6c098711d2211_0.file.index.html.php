<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:29:58
  from 'D:\wamp64\www\shk\2006\server\mvc\application\template\index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ba9d6438106_36173027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dad87fcf6778d1febaac62bcbf6c098711d2211' => 
    array (
      0 => 'D:\\wamp64\\www\\shk\\2006\\server\\mvc\\application\\template\\index\\index.html',
      1 => 1598794197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ba9d6438106_36173027 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo APP_CSS;?>
demo/1.css">

</head>

<body>
<div class="main">

    <!-- 导航开始 -->
    <div class="nav">
        <div class="nav-left">
            <div class="nav-img">
                <a href="/" class="nav-a">

                    <img src="<?php echo APP_IMG;?>
demo/fylogo.png" alt="">
                </a>
            </div>
        </div>
        <div class="nav-right">
            <div class="nav-right-title">
                <div class="nav-title-write">


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                    <div class="nav-write">  <a href=" <?php echo ENTRY_ADD;?>
/admin/demo/<?php echo $_smarty_tpl->tpl_vars['v']->value['suoyin'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</a> </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                </div>
            </div>

        </div>
    </div>
    <!-- 导航结束 -->
    <!-- banner1开始 -->
    <div class="banner1">
        <div class="banner1-window"></div>
    </div>
    <!-- banner1结束 -->
    <!-- banner2开始 -->
    <div class="banner2">
        <div class="banner2-left">
            <div class="banner2-left-logo">
                <img src="<?php echo APP_IMG;?>
demo/banner2-logo1.png" alt="">
            </div>
            <div class="banner2-left-title">
                <h2>
                    <span>关于我们</span>

                </h2>

            </div>
            <div class="banner2-left-line">
                <div class="banner2-line-1">
                    <div class="banner2-line-2"></div>
                </div>
            </div>
            <div class="banner2-left-span">
                <p>
                        <span>
                        飞跃威特科技股份有限公司位于浙江台州，集电脑横机设计、研发、制造和全球销售于一体，是一家致力于提升全球针织机械技术水平、推动针织工艺发展进步、实现针织产业升级的高新技术企业。
                    </span>
                </p>
            </div>
            <div class="banner2-left-bai">
                <p>&nbsp;</p>
            </div>
            <div class="banner2-left-span">
                <p>
                        <span>
                        本着“引导时尚、引导市场”的经营理念和“追求卓绝、服务社会”的企业宗旨，公司坚持“科技兴企”和“人才强企”，拥有一批中、高等级专科技术职称的研发人才和中高层管理队伍，掌握了多项自主知识产权的技术...   </span>
                </p>
            </div>
            <div class="banner2-left-tubiao">
                <div class="banner2-left-tubiao-1">
                    <a class="banner2-tubiao-span">
                        <div title="查看详情+">查看详情+</div>


                    </a>
                </div>

            </div>

        </div>
    </div>
    <!-- banner2结束 -->
    <!-- banner3开始 -->
    <div class="banner3">
        <div class="banner3-img1" title="飞跃威特">
            <img src="<?php echo APP_IMG;?>
demo/banner3-img1.jpg" alt="" style="width: 100%;height: 100%;" class="bann123">
        </div>
        <div class="banner3-img1" title="飞跃威特">
            <img src="<?php echo APP_IMG;?>
demo/banner3-img2.jpg" alt="" style="width: 100%;height: 100%;">
        </div>
        <div class="banner3-img1" title="飞跃威特">
            <img src="<?php echo APP_IMG;?>
demo/banner3-img3.jpg" alt="" style="width: 100%;height: 100%;">
        </div>
        <div class="banner3-img1" title="飞跃威特">
            <img src="<?php echo APP_IMG;?>
demo/banner3-img4.jpg" alt="" style="width: 100%;height: 100%;">
        </div>
    </div>
    <!-- banner3 结束 -->
    <!-- banner4 开始 -->
    <div class="banner4">
        <div class="banner4-logo">
            <img src="<?php echo APP_IMG;?>
demo/banner4-logo.png" alt="" style="width: 486px;height: 45px;">
        </div>
        <div class="banner4-title">
            <span>新闻中心</span>
        </div>
        <div class="banner4-box">
            <div class="banner4-box-1">
                <div class="banner4-box-2">
                    <div class="banner4-box-3">
                        <div class="banner4-box-4">
                            <i class="newIcon">&gt;</i>
                            <div class="banner4-box-title">
                                <span class="md">07-16</span>
                                <p class="year">2020</p>
                            </div>
                            <div class="banner4-box-body">
                                <div class="banner4-box-body1">
                                    <p class="title ellipsis">
                                        浙江银保监局党委委员、纪委书记徐君良一行调研飞跃科创园
                                    </p>
                                    <p class="description">
                                        近日，浙江银保监局党委委员、纪委书记徐君良一行莅临飞跃科创园考察调研。绍兴银保监分局党委委员、纪委书记杨维君 、台州银保监分局党委书记、局长曹光群、 台州银保监分局党委委员、纪委书记钟洁慈 ，以及椒江农商银行党委书记陈波等领导陪同调研。
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner4-box-2">
                    <div class="banner4-box-3">
                        <div class="banner4-box-4">
                            <i class="newIcon">&gt;</i>
                            <div class="banner4-box-title">
                                <span class="md">06-15</span>
                                <p class="year">2020</p>
                            </div>
                            <div class="banner4-box-body">
                                <div class="banner4-box-body1">
                                    <p class="title ellipsis">
                                        凝心聚力再飞跃 2020飞跃集团销售团队拓训圆满完成
                                    </p>
                                    <p class="description">

                                        2020年6月14日,飞跃集团销售团队在集团公司副总毛玲艳、飞跃博特进出口公司负责人祝建华、飞跃科创园服务团队负责人罗坚带领下，冒着酷暑高温，开拔黄岩两岸三度训练营地，进行为期一天的团队拓展训练。
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner4-box-2">
                    <div class="banner4-box-3">
                        <div class="banner4-box-4">
                            <i class="newIcon">&gt;</i>
                            <div class="banner4-box-title">
                                <span class="md">06-02</span>
                                <p class="year">2020</p>
                            </div>
                            <div class="banner4-box-body">
                                <div class="banner4-box-body1">
                                    <p class="title ellipsis">
                                        飞跃联合欧鹰倾力打造热风缝口密封机升级版
                                    </p>
                                    <p class="description">
                                        新冠肺炎疫情发生以来，飞跃海外市场渠道正常运转，为充分满足全球市场特殊时期的产品需求，飞跃联合欧鹰协同创新，积极打造边条无缝化热封升级版产品，助力全球抗击疫情。 欧鹰机械是一家集研发、生产、销售和服务为一体的专业服装机械制造企业，已经从事生产各类防护服、生化服及救援帐篷等物资边条无缝化热封机械20余年，拥有防护服专用设备强大技术研发和生产能力，其自主研发生产的缝口密封机（压胶机）产品拥 </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner4-box-2">
                    <div class="banner4-box-3">
                        <div class="banner4-box-4">
                            <i class="newIcon">&gt;</i>
                            <div class="banner4-box-title">
                                <span class="md">05-29</span>
                                <p class="year">2020</p>
                            </div>
                            <div class="banner4-box-body">
                                <div class="banner4-box-body1">
                                    <p class="title ellipsis">
                                        坚定信心，抢抓机遇，进一步推动行业可持续发展
                                    </p>
                                    <p class="description">
                                        —集团领导参加2020年中缝协理事长工作视频会议作为每年行业风向标的重头会，2020年中国缝制机械协会理事长工作会议于3月31日上午，采取视频会议的方式顺利召开。中国轻工业联合会副会长、中国缝制机械协会理事长何烨主持会议并发表重要讲话。集团领导毛玲艳作为副理事长代表，与中缝协其他专兼职副理事长(代表)、特邀副理事长(代表)及秘书长共18人参加了会议。会上，杨晓京副理事长通报了协会近期围绕疫情防控和 </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner4-box-2">
                    <div class="banner4-box-3">
                        <div class="banner4-box-4">
                            <i class="newIcon">&gt;</i>
                            <div class="banner4-box-title">
                                <span class="md">05-29</span>
                                <p class="year">2020</p>
                            </div>
                            <div class="banner4-box-body">
                                <div class="banner4-box-body1">
                                    <p class="title ellipsis">
                                        椒江区人大、政协十届四次会议顺利召开
                                    </p>
                                    <p class="description">
                                        集团公司人大代表、政协委员牢记使命尽心履职2020年5月7日至10日，椒江区人大、政协十届四次会议在椒江顺利召开。来自集团公司的区人大代表邱仙斌、区政协常委毛玲艳、区政协委员冯平等代表委员们纷纷放下手头繁忙的工作，带着殷殷嘱托和精心准备的议提案积极参会，尽心履职。 在两会上，公司的代表和委员们积极议政建言，分别围绕区政府工作报告、区人大和政协工作报告，畅谈学习体会，提出意见建议，并 </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner4-box-2">
                    <div class="banner4-box-3">
                        <div class="banner4-box-4">
                            <i class="newIcon">&gt;</i>
                            <div class="banner4-box-title">
                                <span class="md">05-29</span>
                                <p class="year">2020</p>
                            </div>
                            <div class="banner4-box-body">
                                <div class="banner4-box-body1">
                                    <p class="title ellipsis">
                                        椒江区行政服务中心“就近办·融合”主题沙龙活动在
                                    </p>
                                    <p class="description">
                                        5月22日下午，由台州市椒江区行政服务中心“追梦人”沙龙组委会、共青团台州市椒江区人民政府行政服务中心委员会共同举办，飞跃科创园承办的“就近办·融合”主题沙龙活动在飞跃科创园西区成功举办。来自台州市行政服务中心、椒江和其他各县市区行政服务中心领导和相关人员，椒江各街道便民服务中心、政银联通及延伸街道事项涉及部门业务负责人共计65人参加活动。这也是台州行政服务中心“追梦人”沙龙系列活动的第一期开场活 </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="banner4-chakan">

            <div class="banner2-left-tubiao-1" style="border-color:rgba(59, 120, 212, 1);">
                <a class="banner2-tubiao-span">
                    <div title="查看详情+" class="banner2-title1">查看详情+</div>


                </a>
            </div>

        </div>
    </div>
    <!-- banner4结束 -->
    <!-- Copy开始 -->
    <div class="copy" >
        <div class="copy-box">
            <div class="copy-box1">
                <div class="copy-box1-title">
                    <a href="">
                        <span>关于我们</span>
                    </a>
                </div>
                <p class="copy-box1-span">
                        <span>
                            <a href="">集团公司简洁</a> <br>
                            <a href="">飞跃威特简洁</a><br>
                            <a href="">飞跃之路</a><br>
                            <a href="">荣誉资质</a><br>
                        </span>
                </p>
            </div>
            <div class="copy-box1">
                <div class="copy-box1-title">
                    <a href="">
                        <span>产品中心</span>
                    </a>
                </div>
                <p class="copy-box1-span">
                        <span>
                            <a href="">电脑横机系列</a> <br>
                            <a href="">高速缝盘机</a><br>
                            <a href="">埋夹机/络筒机</a><br>
                            <a href="">缝纫机系列</a><br>
                        </span>
                </p>
            </div>
            <div class="copy-box1">
                <div class="copy-box1-title">
                    <a href="">
                        <span>新闻中心</span>
                    </a>
                </div>
                <p class="copy-box1-span">
                        <span>
                            <a href="">公司新闻</a> <br>
                            <a href="">行业新闻</a><br>

                        </span>
                </p>
            </div>
            <div class="copy-box1">
                <div class="copy-box1-title">
                    <a href="">
                        <span>在线留言</span>
                    </a>
                </div>
                <p class="copy-box1-span">
                        <span>

                        </span>
                </p>
            </div>
            <div class="copy-box1">
                <div class="copy-box1-title">
                    <a href="">
                        <span>下载中心</span>
                    </a>
                </div>
                <p class="copy-box1-span">
                        <span>
                            <a href="">花型下载</a> <br>
                            <a href="">索取宣传册</a><br>
                            <a href="">服务网点</a><br>
                            <a href="">服务公告</a>

                        </span>
                </p>
            </div>
            <div class="copy-box1">
                <div class="copy-box1-title">
                    <a href="">
                        <span>联系我们</span>
                    </a>
                </div>
                <p class="copy-box1-span" style="width: 520px;">
                        <span>

                                <span style="color: #fff;">地址：中国浙江省台州市椒江区机场中路109号（聚星科创园C区20幢）</span>

                        <br>
                        <a href="">电话：0576-88178061</a><br>
                        <a href="">传真：0576-88178060</a><br>
                        <a href="">邮箱：robinjin@feiyuewitt.com</a><br>
                        <a href="">网址：Http://www.feiyuewitt.com</a>

                        </span>
                </p>
            </div>
            <div class="copy-saoma">
                <div class="copy-saoma-img">
                    <img src="<?php echo APP_IMG;?>
demo/copy-saoma.jpg" alt="">
                </div>
                <div class="copy-saoma-titele">
                    <span>扫一扫，进入手机网站</span>
                </div>
            </div>
        </div>
        <div class="copy-line">
            <span></span>
        </div>
        <div class="copy-right">
            <p>
                <span style="font-family: arial,helvetica,sans-serif;">Copyright&nbsp;©</span>
                <span>
                    &nbsp;浙江飞跃威特科技股份有限公司&nbsp;版权所有
                </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                <a href="">浙ICP备19026334号</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                <a href="">网站建设：中企动力台州</a>
            </p>
        </div>
    </div>

    <!-- copy结束 -->






</div>
<?php echo '<script'; ?>
 src="<?php echo APP_JS;?>
demo/duixiang.js">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo APP_JS;?>
demo/aniMath.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    new wheel(".banner1-window", {
        imgs: ["http://www.feiyuewitt.com/img/fybanner1.jpg?k=1576742527000", "http://www.feiyuewitt.com/img/fybanner2.jpg?k=1576742527000"],

        links: ["#", "#"],
        imgColor: ["#fff", "#fff"],
        imgSize: [1520, 649],
        btnColor: "#595959",
        btnActive: "#fff",
        btnPosition: ["center", "10"]



    }, {
        time: 3,
        runStyle: "Tween.Linear"
    })
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
