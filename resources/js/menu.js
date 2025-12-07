// resources/js/menu.js
import './bootstrap';

// -----------------------------
// 画面全体のフェードイン
// -----------------------------
window.addEventListener('load', () => {
  // bodyフェードイン
  document.body.classList.add('visible');
});


// -----------------------------
// ハンバーガーメニュー操作
// -----------------------------
$(function() {
  // メニューを開く
  $('.open-icon').on('click', function(e) {
    e.stopPropagation();
    $('.mobile-nav').fadeIn(300);
    $('.open-icon').hide();
    $('.close-icon').show();
  });

  // メニューを閉じる
  $('.close-icon').on('click', function(e) {
    e.stopPropagation();
    $('.mobile-nav').fadeOut(300);
    $('.open-icon').show();
    $('.close-icon').hide();
  });

  // メニュー内リンククリック
  $('.mobile-nav a').on('click', function() {
    $('.mobile-nav').fadeOut(300);
    $('.open-icon').show();
    $('.close-icon').hide();
  });
});

// -----------------------------
// セクションごとのフェードイン
// -----------------------------
document.addEventListener('DOMContentLoaded', function () {
  const targets = document.querySelectorAll('.fade-section');

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-in');
        obs.unobserve(entry.target); // 一度だけアニメーション
      }
    });
  }, {
    threshold: 0.3 // 10%見えたら発火
  });

  targets.forEach(target => observer.observe(target));
});

// -----------------------------
// 背景サイドの高さ調整
// -----------------------------
function adjustSideBgHeight() {
  const pageHeight = document.documentElement.scrollHeight;
  $(".side-bg").css("height", pageHeight + "px");
}

$(window).on("load resize", adjustSideBgHeight);
