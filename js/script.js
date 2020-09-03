jQuery(function ($) {
    var $win = jQuery(window),
        $header = jQuery('.menu'),
        headerHeight = $header.outerHeight(),
        startPos = 0;

    $win.on('load scroll', function () {
        var value = jQuery(this).scrollTop();
        if (value > startPos && value > headerHeight) {
            $header.css('top', '-' + headerHeight + 'px');
        } else {
            $header.css('top', '0');
        }
        startPos = value;
    });
});
jQuery(function ($) {
    jQuery(".btn-gnavi").on("click", function () {
        // ハンバーガーメニューの位置を設定
        var rightVal = 0;
        if (jQuery(this).hasClass("open")) {
            // 位置を移動させメニューを開いた状態にする
            rightVal = -300;
            // メニューを開いたら次回クリック時は閉じた状態になるよう設定
            jQuery(this).removeClass("open");
        } else {
            // メニューを開いたら次回クリック時は閉じた状態になるよう設定
            jQuery(this).addClass("open");
        }

        jQuery("#gnav").stop().animate({
            right: rightVal
        }, 200);
    });
});