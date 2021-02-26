<?php
/* Smarty version 3.1.39, created on 2021-02-26 09:31:24
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038b1dc65e448_37593442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c11ed55cb0a6250c99bb89ad46ff4644acb5f226' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\template\\home.tpl',
      1 => 1614328282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038b1dc65e448_37593442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4068337106038b1dc65d177_58687345', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15812813866038b1dc65dc11_12739241', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/index.tpl");
}
/* {block "title"} */
class Block_4068337106038b1dc65d177_58687345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4068337106038b1dc65d177_58687345',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_15812813866038b1dc65dc11_12739241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15812813866038b1dc65dc11_12739241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>lTài liệu gốc: https://design1.atlassian.net/wiki/spaces/EKITEN/pages/230359472

        Trong quá trình vận hành màn hình user, màn hình quản lý staff, màn hình quản lý cửa hàng của ekiten trên thực tế, thì đồng thời xác nhận xem môi trường ekiten đã build ở local có được build đúng hay chưa.
        ※Chú ý
        DB của môi trường local là dùng chung, sử dụng devdb.ekiten.dojsys.com
        Vì mỗi ngày sẽ đồng bộ cái này với môi trường production, nên những thông tin được tạo hay thay đổi bởi các hành động bên dưới sang ngày tiếp theo sẽ không còn nữa.
        Màn hình quản lý staff và màn hình quản lý cửa hàng không thể login cùng lúc trên cùng một trình duyệt.
        Đang ở trạng thái login vào quản lý staff, đi login vào quản lý cửa hàng →×
        Phải logout màn hình quản lý staff hoặc mở bằng trình duyệt khác
        Logout khỏi quản lý staff, login vào quản lý cửa hàng →○
        Đang login vào quản lý cửa hàng đi login vào quản lý staff →○
        Tuy nhiên như vậy quản lý cửa hàng sẽ thành trạng thái logout, không thể thực hiện các thao tác nào nữa.
        Domain - server đã xác nhận kết nối bởi setup môi trường local
        static.ekiten.piyo
        Server imgst03,04
        www.ekiten.piyo、s.ekiten.piyo
        Server ap09,11,12
        www.ekiten.piyo/[shops]/*
        main（chưa biết viết như nào thì ổn）
        Server micro-solor05,06
        www.mgt.ekiten.piyo
        Server mgt03,04
        Server sdb03

        Cấp lại password của account quản lý staff trên local
        Thông tin của account được tạo ở môi trường production cũng được đồng bộ vào DB của local. Nhưng vì thuật toán hàm băm của mật khẩu khác nhau nên không thể sử dụng cùng một mật khẩu để login, cần phải cấp lại mật khẩu.
        Truy cập vào https://www.mgt.ekiten.piyo/stf/password.php
        Nhập địa chỉ email của mình, nhấn 送信 (gửi đi)
        Truy cập vào http://ekiten.piyo:1080/ , xác nhận xem email đã được gửi đến chưa
        Xác nhận kết nối：server mail01,02
        Cấp lại mật khẩu từ URL dùng cho việc cấp lại mật khẩu, giữ nguyên như vậy, xác nhận login

        Liên quan đến thao tác của hội viên cửa hàng miễn phí
        Đăng ký tạm
        Từ https://www.ekiten.piyo/charge/advtop/ chuyển đến form đăng ký
        Nhập các mục cần thiết, đăng ký tạm thời
        Tại https://www.mgt.ekiten.piyo/stf/free_member_shop_info.php , xác nhận status của cửa hàng
        Đăng ký chính thức
        Truy cập vào http://ekiten.piyo:1080/ , xác nhận xem email đã được gửi đến chưa
        Theo URL ghi trong email, hoàn tất việc đăng ký tạm thời
        Tại https://www.ekiten.piyo/stf/free_member_shop_info.php , xác nhận status của cửa hàng
        Copy ID cửa hàng
        Kiểm duyệt
        https://www.mgt.ekiten.piyo/stf/index.php?sh=
        Tại link trên, click vào tab 審査(kiểm duyệt) > 初期登録審査(kiểm duyệt đăng ký lần đầu) > 無料店舗会員(kiểm duyệt hội viên cửa hàng miễn phí)
        Lọc bằng ID cửa hàng
        Nếu có hiện cửa hàng lúc nãy vừa đăng ký thì check vào「○審査有効」(kiểm duyệt có hiệu lực), nhấn nút 更新 (cập nhật)
        Nếu chuyển trang, hiển thị「更新完了」(cập nhật hoàn tất) thì OK

        Xác nhận login vào quản lý cửa hàng
        Truy cập vào http://ekiten.piyo:1080/ , xác nhận xem email đã được gửi đến chưa
        Tên：【エキテン】無料店舗会員 掲載開始のご案内 (hướng dẫn lần đầu đăng bài cho hội viên cửa hàng miễn phí của ekiten)
        Click vào link của màn hình quản lý cửa hàng có trong email（https://www.mgt.ekiten.piyo/own/
        Login bằng địa chỉ email đã đăng ký và password được cấp tạm thời
        Chú ý phải login từ một trình duyệt khác với trình duyệt đang thao tác màn hình quản lý staff
        Chỉ riêng trang top page đầu tiên là có thể login trên cùng một trình duyệt
        Sau đó, ở những trang chọn từ tab menu dùng để thay đổi thông tin, thì nếu không dùng một trình duyệt khác thì không làm được.
        Cập nhật thông tin cửa hàng
        Login vào https://www.mgt.ekiten.piyo/own/
        Từ mục quản lý thông tin cơ bản của menu bên trái, edit thông tin hội viên cửa hàng miễn phí đã tạo.
        https://www.mgt.ekiten.piyo/stf/index.php?sh= の
        Ở link trên, click vào tab 審査 (kiểm duyệt) > 店舗情報審査 (kiểm duyệt thông tin cửa hàng)> 基本情報編集審査(新) kiểm duyệt edit thông tin cơ bản (mới).
        Lọc ID cửa hàng và ngày yêu cầu thay đổi (店舗ID) (変更依頼日時) theo thứ tự giảm dần, check vào「○審査有効」(kiểm duyệt hợp lệ), nhấn nút 更新 (cập nhật).
        Xác nhận xem nội dung đã edit có được hiển thị chính xác không.
        Sau khi cập nhật hoàn tất, xác nhận xem nó có được phản ánh lên page cửa hàng hay không.
        Page chi tiết cửa hàng：URL page cửa hàng nằm trong email「【エキテン】無料店舗会員 掲載開始のご案内」 (hướng dẫn lần đầu đăng bài cho hội viên cửa hàng miễn phí của ekiten)
        Hủy hợp đồng（chỉ hướng dẫn cách làm）
        Login vào https://www.mgt.ekiten.piyo/own/ , click vào「よくある質問」(câu hỏi thường gặp)
        Click vào mục「お問い合わせ」(liên hệ) ở cuối trang
        Vì sau khi click sẽ redirect đến domain dịch vụ bên ngoài nên chỉ dùng cho môi trường production và kiểm thử
        Không thể thao tác ở các môi trường khác.
        Nhấn vào【無料店舗会員解約手続き】(thủ tục hủy hội viên cửa hàng miễn phí) ở cuối page
        Chọn ≪店舗名≫(tên cửa hàng) ≪解約理由≫(lý do hủy)
        Nếu có ≪ご意見・ご要望等≫ (ý kiến, nguyện vọng, v.v..) thì nhập vào
        Nhấn vào【入力内容を確認する】(xác nhận nội dung đã nhập)
        Nhấn nút【送信する】(gửi)

        Liên quan đến các thao tác user
        Đăng ký user
        Truy cập vào link dưới, đăng ký user tạm thời.
        https://www.ekiten.piyo/mypage/registration.php?from=registration
        Địa chỉ email phải khác với cửa hàng. Có thể là địa chỉ ảo.
        Truy cập vào http://ekiten.piyo:1080/ , xác nhận xem email đã được gửi đến chưa.
        Tên：【エキテン】ユーザー本登録のご案内 (hướng dẫn đăng ký user chính thức (ekiten)).
        Theo địa chỉ URL có ghi trong email, hoàn thành đăng ký chính thức.
        Đăng bình luận
        Truy cập vào page chi tiết cửa hàng mà lúc nãy vừa đăng ký.
        Click vào nút「口コミ投稿」(đăng bình luận) ở phía trên bên phải page cửa hàng.
        Nhập theo hướng dẫn để hoàn tất đăng bình luận.
        Kiểm duyệt bình luận
        https://www.mgt.ekiten.piyo/stf/index.php?sh=の
        Tại link trên, click vào tab 審査(kiểm duyệt) > ユーザー審査(kiểm duyệt user) > 口コミ・口コミ編集審査(新)(Bình luận-kiểm duyệt edit bình luận (mới)).
        Lọc bằng thời gian đăng bài, check vào「○審査有効」(kiểm duyệt hợp lệ), nhấn nút 更新 (cập nhật).
        Xác nhận xem nội dung đã đăng có được hiển thị đúng không.
        Sau khi cập nhật xong thì xác nhận xem nó đã được phản ánh lên page cửa hàng chưa.
        Đăng ảnh
        Cách làm giống với đăng bình luận, click vào「写真投稿」(đăng ảnh) ở page cửa hàng, đăng ảnh
        Xác nhận kết nối：https://www.img02.ekiten.piyo/
        Server imgup01
        Kiểm duyệt ảnh
        Truy cập vào https://www.img03.ekiten.piyo/, xóa lỗi privacy.
        https://www.mgt.ekiten.piyo/stf/index.php?sh=
        Tại link trên, click vào tab 審査 (kiểm duyệt) > ユーザー審査 (kiểm duyệt user) > 写真審査(新) (kiểm duyệt ảnh (mới)).
        Lọc bằng thời gian đăng bài, check vào「○審査有効」(kiểm duyệt hợp lệ), nhấn nút 更新 (cập nhật).
        Xác nhận xem ảnh đã đăng có được hiển thị đúng không
        Xác nhận kết nối：https://www.img03.ekiten.piyo/
        Server img08,09
        Sau khi cập nhật hoàn tất thì xác nhận xem số lượng ảnh đăng có được phản ánh lên page cửa hàng không.
        Lý do ảnh không được hiển thị là tại đây

        Liên quan đến thao tác của hội viên chính thức
        Đăng ký hội viên chính thức
        https://www.ekiten.piyo/charge/up_form.php?shop_id=nothing_shop Từ link bên trái, nhập các mục cần thiết
        Phương thức thanh toán nếu đặt là「口座振替」(chuyển khoản) thì data cần nhập sẽ giảm đi một chút, vậy sẽ tiện hơn.
        Xử lý tiếp nhận
        https://www.mgt.ekiten.piyo/stf/index.php?sh=
        Tại link trên, tìm kiếm cửa hàng vừa đăng ký lúc nãy bằng cách click vào tab 正会員情報 (thông tin hội viên chính thức) > 申込一覧 (danh sách đăng ký)
        Click vào nút「>>」của「次へ>」ở phía trên bên phải, đi đến cuối list là thấy
        Click vào ID đăng ký của cửa hàng đã đăng ký
        Đổi「取引先審査」(đối tác kiểm duyệt) ở trên cùng thành「審査OK」(kiểm duyệt OK), nhấn vào nút「審査更新」(cập nhật kiểm duyệt) ở dưới cùng
        Nhập các mục bắt buộc, click vào「新規受注へ」(tiếp nhận mới)
        CRM ID nhập tùy ý, từ 1 ký tự trở lên là OK
        Ở màn hình sau khi cập nhật sẽ hiện error message như bên dưới, nhưng cứ kệ nó
        SFA情報の登録に失敗しました。システム管理者へご連絡ください。
        Hoàn tất
        Trả lời bản khảo sát
        Truy cập vào http://ekiten.piyo:1080/ , xác nhận xem email đã được gửi đến chưa.
        Tên：［重要］【エキテン】正会員ページ公開までの流れ・アンケートご協力のお願い (［Quan trọng］【ekiten】quy trình trước khi public page hội viên chính thức・vui lòng trả lời bản khảo sát)
        Theo chỉ dẫn trên mail, login vào quản lý cửa hàng, trả lời bản khảo sát.
        Trả lời lần lượt, bắt đầu từ thông tin cơ bản.
        Bản khảo sát có khá nhiều cột phải điền nên hơi phiền nhưng cố gắng nhé.
        Sau khi trả lời xong hết thì click vào「次へ」, đăng ký ảnh
        Sau khi cài đặt xong thì click vào「次へ」
        Chuyển sang trạng thái tạo page tức là đã xong
        Tạo page
        https://www.mgt.ekiten.piyo/stf/index.php?sh=
        Click vào tab thông tin hội viên chính thức (正会員情報), tìm cửa hàng vừa đăng ký lúc nãy.
        Tìm bằng ID cửa hàng hoặc status hoạt động: đã nhận nguyên liệu (制作ステータス：素材受領済).
        Click vào ID cửa hàng, chuyển đến màn hình chi tiết cửa hàng.
        Sau này sẽ dùng nên hãy ghi lại ID cửa hàng.
        Đăng ký các thông tin（＜＊＞）
        Tuy nhiên, nếu không đăng ký thì vẫn có thể công khai được nên cũng có thể bỏ qua
        Sau khi đăng ký xong các thông tin thì tiến hành hiệu chỉnh page
        Tuy nhiên, phần này cũng có thể bỏ qua
        Kiểm duyệt nội dung
        https://www.mgt.ekiten.piyo/stf/index.php?sh=
        Click vào tab 審査(kiểm duyệt) > 初期登録審査 (kiểm duyệt đăng ký lần đầu)> 正会員登録審査(旧) (kiểm duyệt đăng ký hội viên chính thức (cũ)
        Lọc bằng ID cửa hàng, xác nhận, check nội dung, click vào kiểm duyệt OK (審査OK)
        Nếu được cập nhật thì như vậy là xong.
        仮公開連絡
        https://www.mgt.ekiten.piyo/stf/index.php?sh=
        Click vào tab thông tin hội viên chính thức (正会員情報), sử dụng ID cửa hàng để tìm cửa hàng lúc nãy vừa đăng ký.
        Click vào ID cửa hàng, chuyển đến màn hình chi tiết cửa hàng.
        Click vào cài đặt công khai (公開設定) của <thông tin cừa hàng> (＜店舗情報＞),cài đặt như sau:
            Check vào mục ページ切り替え (chuyển trang) của【公開設定】(cài đặt công khai), click vào mục edit phía dưới cùng.
            Click vào thông tin hợp đồng (契約情報) của <thông tin cửa hàng> (＜店舗情報＞), cài đặt như sau:
                Set【営業情報】制作担当、校正担当 (【thông tin kinh doanh】người tạo, người hiệu chỉnh), click vào edit
                Bất kỳ tài khoản nào khác với tài khoản đang login đều được.
                Từ tab thông tin hội viên chính thức (正会員情報) của quản lý cửa hàng, tìm lại cửa hàng đó, click vào công khai tạm thời trong email.
                Check nội dung, gửi email.
                Yêu cầu chỉnh sửa
                Truy cập vào http://ekiten.piyo:1080/, check xem email đã gửi đến chưa.
                Tên：【エキテン】正会員プラン 仮ページをご確認ください (【ekiten】vui lòng xác nhận page tạm thời của plan hội viên chính thức.
                Login vào quản lý cửa hàng, từ màn hình home, check page vừa làm.
                Nếu không khởi động container đặt lịch thì có thể không xem được preview page.
                Click vào「修正を依頼する」(yêu cầu chỉnh sửa) phía dưới.
                Ghi nội dung yêu cầu chỉnh sửa tùy ý, click gửi (送信)
                Chỉnh sửa
                Truy cập vào http://ekiten.piyo:1080/, check xem email đã gửi đến chưa.
                Tên：【エキテン】仮公開ページの修正依頼 【ekiten】Yêu cầu chỉnh sửa page công khai tạm
                Tiến hành tạo trang nói trên, kiểm duyệt nội dung
                Nếu không chỉnh sửa gì thì cho dù có tìm bằng tab kiểm duyệt cũng không tìm được.
                Sửa xong thì email cũng không đến hay sao？
                Chỉ thị công khai
                Tại màn hình home của quản lý cửa hàng, click vào thủ tục công khai「公開手続き」
                Check vào đồng ý「同意します」, clock vào tiến hành thủ tục công khai「公開手続きを行う」
                Cài đặt công khai
                Truy cập vào http://ekiten.piyo:1080/, check xem email đã gửi đến chưa.
                Tên：【エキテン】正会員ページの公開依頼 【ekiten】Y/c công khai của page hội viên chính thức
                Hiển thị màn hình chi tiết cửa hàng ở quản lý staff (ス管)
                Click vào thông tin hợp đồng (契約情報) của <Thông tin cửa hàng> (＜店舗情報＞), cài đặt như sau:
                    Ở 【thông tin hợp đồng】status thanh toán (【契約情報】支払ステータス), chọn ngày tùy ý, chuyển memo (メモ) thành đã thanh toán (「入金済み」).
                    Click vào cài đặt công khai (公開設定) của ＜店舗情報＞(<Thông tin cửa hàng>), cài đặt như sau:
                        Click vào Công khai 「公開する」của【cài đặt công khai】kỳ hạn đăng (【公開設定】掲載期間), click luôn vào dialogue hiện ra.
                        Bỏ check của【cài đặt công khai】chuyển page (【公開設定】ページ切り替え)
                        Xác nhận xem màn hình home của quản lý cửa hàng có thay đổi không
                        Hủy
                        https://www.mgt.ekiten.piyo/stf/index.php?sh=
                        Click vào tab thông tin hội viên chính thức (正会員情報), tìm đại một cửa hàng hội viên chính thức đã có.
                        Tốt nhất là lọc bằng status công khai (公開ステータス)：đang công khai (公開中), genre, địa chỉ, v.v..
                        Tìm một cửa hàng có thể click vào【hủy hội viên chính thức】xử lý hủy (【正会員解約】解約処理) ở phía trên màn hình chi tiết cửa hàng
                        Nếu không quá 1 năm（thời gian ký hợp đồng bắt buộc）thì không thể chuyển được
                        Lúc tôi viết mô tả này thì tôi đã click được:
                        https://www.mgt.ekiten.piyo/stf/charge_top.php?c=214526&history_flg=
                        Click vào xử lý hủy (解約処理), theo hướng dẫn thực hiện xử lý hủy
                        Trên bản khảo sát không có mục nào là bắt buộc
                        Trên production, ngoài những cửa hàng có  lý do là「閉店」(đóng cửa) thì những cửa hàng quá ngày kết thúc hợp đồng thì đều được tự động chuyển sang hội viên cửa hàng miễn phí.
                        Truy cập vào http://ekiten.piyo:1080/, check xem email đã gửi đến chưa.
                        Tên：【エキテン】正会員プラン解約申込み手続き完了のお知らせ【ekiten】thông báo hoàn tất thủ tục đăng ký hủy plan hội viên chính thức

                        Thu thập thông tin cửa hàng hội viên chính thức đã được công khai
                        Vì đăng ký xong thì batch xử lý công khai vào đêm cùng ngày mới hoạt động, nên ngắn nhất thì phải từ ngày hôm sau mới có thể công khai được.
                        Vì vậy, ở môi trường test và develop không thể công khai hội viên chính thức ngay trong ngày được.
                        Từ đó, thu thập thông tin login quản lý cửa hàng của cửa hàng hội viên chính thức đã công khai (đây là những thông tin dùng để tiến hành các hoạt động sau khi công khai hội viên chính thức).
                        https://www.mgt.ekiten.piyo/stf/index.php?sh=
                        Click vào tab thông tin hội viên chính thức, tìm một cửa hàng hội viên chính thức bất ký
                        Tốt nhất là nên chọn status công khai: đang công khai (公開ステータス：公開中), genre, địa chỉ, để tìm kiếm.
                        Tại màn hình chi tiết cửa hàng, xác nhận option plan và địa chỉ mail.
                        Option plan：hầu hết nằm ở phía trên cùng＜オプションプラン＞
                        Nếu không có mô tả gì：có thể đăng ký hoạt động bên dưới.
                        Nếu có mô tả：có thể hủy hoạt động bên dưới.
                        Địa chỉ mail：【担当者情報】のメールアドレス Địa chỉ mail của【Thông tin người phụ trách】.
                        Tại https://www.mgt.ekiten.piyo/own/login/password.php , tiến hành cấp lại password.
                        Truy cập vào http://ekiten.piyo:1080/, xác nhận xem email đã được gửi đến chưa.
                        Tên：【エキテン店舗会員】店舗管理画面パスワード再設定はこちらから 【Hội viên cửa hàng ekiten】Cài đặt lại password màn hình quản lý cửa hàng từ đây.
                        Nhấp vào link ghi trong email, cài đặt lại password.
                        Truy cập vào http://ekiten.piyo:1080/, xác nhận xem email đã được gửi đến chưa.
                        Tên：【エキテン店舗会員】店舗管理画面パスワード再設定完了のお知らせ【Hội viên cửa hàng ekiten】Thông báo hoàn tất cài đặt lại password màn hình quản lý cửa hàng.
                        Nếu có thể login được vào quản lý cửa hàng là ok

                        Hoạt động nâng cấp
                        Đăng ký
                        Tìm trên banner hiển thị ở quản lý cửa hàng mục「上位プラン」(nâng cấp), click vào
                        Sau khi hiển thị trang, click vào「ゴールド or プラチナ申込」(Đăng ký golden hoặc platinum)
                        Click vào「利用規約に同意して申し込む」(đồng ý với quy định sử dụng, đăng ký)
                        Truy cập vào http://ekiten.piyo:1080/, xác nhận xem email đã được gửi đến chưa.
                        Tên：正会員プランアップグレードの申込手続完了のお知らせ Thông báo hoàn tất thủ tục đăng ký nâng cấp thành hội viên chính thức.
                        Hủy
                        Click vào 会員登録情報 (thông tin đăng ký hội viên) →ご契約情報 (thông tin hợp đồng) trên menu bên trái của quản lý cửa hàng.
                        Click vào 「契約変更」(thay đổi hợp đồng) trên 正会員プランアップグレード (Kế hoạch nâng cấp hội viên chính thức)
                        Click vào「アップグレードの解約」「Hủy nâng cấp」
                        Thực hiện hủy theo hướng dẫn của màn hình
                        Truy cập vào http://ekiten.piyo:1080/, xác nhận xem email đã được gửi đến chưa.
                        Tên：【エキテン】正会員プランアップグレードの解約手続完了のお知らせ Thông báo hoàn tất thủ tục hủy nâng cấp thành hội viên chính thức.

                        Hoạt động area match option
                        Đăng ký
                        Tìm trên banner hiển thị ở quản lý cửa hàng mục「エリアマッチ」(area match)
                        Click vào「申込はこちら」(đăng ký tại đây)
                        Click vào「利用規約に同意して申し込む」(đồng ý với quy định sử dụng, đăng ký)
                        Truy cập vào http://ekiten.piyo:1080/, xác nhận xem email đã được gửi đến chưa.
                        Tên：エリアマッチオプションの申込手続完了のお知らせ (thông báo hoàn tất thủ tục đăng ký area match operation)
                        Hủy
                        Click vào 会員登録情報 (thông tin đăng ký hội viên) →ご契約情報 (thông tin hợp đồng) của quản lý cửa hàng
                        Click vào「契約変更」(thay đổi hợp đồng) của エリアマッチオプション (area match option)
                        Clock vào「エリアマッチオプションの解約」(hủy area match option)
                        Theo hướng dẫn của màn hình, tiến hành hủy.
                        Truy cập vào http://ekiten.piyo:1080/,  xác nhận xem email đã được gửi đến chưa.
                        Tên：【エキテン】ダブルエリアマッチ解約手続き完了のお知らせ (【ekiten】thông báo hoàn tất thủ tục hủy area match operation)

                        Download tài liệu
                        Truy cập vào https://material.ekiten.piyo/material/dl_manual_photo.php?cat=beautyparlor
                        Xác nhận kết nối：material.*domain</p>
<?php
}
}
/* {/block "content"} */
}
