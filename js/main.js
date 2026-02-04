jQuery(function ($) {
  $(".hamburger").click(function () {
    $(this).toggleClass("active");
    $(".navi").toggleClass("active");
  });
});

/* nai内のaタグをクリックした際にactiveクラスを削除してメニューを非表示にするコマンドが必要。※あとで入れる */
