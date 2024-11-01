var slogans = [
    "\"Gölgelerimizi aydınlatmadıkça, onları hayatımızın her anında tekrar ederiz.\" Carl Jung",
    "\"Hayatınızın sorusuna karşılık tek cevap sizsiniz. Hayatınızın sorunlarına karşı tek çözüm sizsiniz.\" \n Jo Coudert",
    "\"Düşüncelerimiz, duygularımızı ve davranışlarımızı belirler.\" Albert Ellis",
    "\"Kendinize karşı dürüst olmak, en büyük cesaret göstergesidir.\" Karen Horney",
    "\"Olduğumuz gibi kabul edildiğimizde değişebiliriz.\" Carls Rogers",
    "\"Ruh sağlığı, iç dünyanla barışık olmaktır.\" Sigmund Freud",
    "Güçlü bir zihin, mutlu bir hayat.",
    "\"Gerçek benliğimiz, olabileceğimiz kişidir.\" Karen Horney",
    "\"Cesaret, korkunun yokluğu değil, korkuya rağmen ilerlemektir.\" Rollo May"
];

function randomSlogan() {
    var randomNumber = Math.floor(Math.random() * slogans.length);
    document.getElementById("slogan").innerText = slogans[randomNumber];
}

window.onload = randomSlogan;

/*
document.addEventListener('DOMContentLoaded', function () {
    var popup = document.getElementById('popupwrap');
    var closeBtn = document.getElementById('close-btn');

    closeBtn.addEventListener('click', function () {
        popup.style.display = 'none';
    });
});

const duration = 10 * 1000,
  animationEnd = Date.now() + duration,
  defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

function randomInRange(min, max) {
  return Math.random() * (max - min) + min;
}

const interval = setInterval(function() {
  const timeLeft = animationEnd - Date.now();

  if (timeLeft <= 0) {
    return clearInterval(interval);
  }

  const particleCount = 50 * (timeLeft / duration);

  // since particles fall down, start a bit higher than random
  confetti(
    Object.assign({}, defaults, {
      particleCount,
      origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 },
    })
  );
  confetti(
    Object.assign({}, defaults, {
      particleCount,
      origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 },
    })
  );
}, 250);
*/