<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | Psikolog Tuğçe Alkan</title>
    <meta name="description" content="Ergen &amp; Yetişkin Psikoterapisti">
    <link rel="stylesheet" href="./css/styleiletisim.css">
    <script src="https://kit.fontawesome.com/8af256a44f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./images/mainlogo.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="logomobile">
                    <img src="./images/mainlogo.png" alt="tugcealkanlogo" srcset="">
                    <div>
                        <h2>Psikolog</h2>
                        <h1>Tuğçe Alkan</h1>
                    </div>
                </div>
                <div class="menu-items">
                    <li><a href="./index.html">ANA SAYFA</a></li>
                    <li><a href="./hakkimda.html">HAKKIMDA</a></li>
                    <li><a href="./calismalarim.html">ÇALIŞMA ALANLARI</a></li>
                    <li><a href=".https://www.tugcealkan.com/blog">BLOG</a></li>
                    <li><a href="./iletisim.html">RANDEVU &AMP; İLETİŞİM</a></li>
                    <img src="./images/mainlogo.png" alt="tugcealkanlogo" srcset="">
                    <h2>Psikolog</h2>
                    <h1>Tuğçe Alkan</h1>
                </div>
            </div>
        </div>
    </nav>
    <div class="headercontainer">
        <div class="header">
            <div class="logowebpage"><a href="/index.html">
                    <img src="/images/mainlogo.png" alt="tugcealkanlogo" srcset="">
                    <div class="logocaption1">
                        <h2>Psikolog</h2>
                        <h1>Tuğçe Alkan</h1>
                    </div>
                </a>
            </div>

            <div class="navbars">
                <ul class="menulist">
                    <li class="menu"><i class="fa-brands fa-pagelines"></i>&nbsp;<a href="/hakkimda.html">HAKKIMDA</a>
                    </li>
                    <li class="menu"><a href="/calismalarim.html" id="redirectButton">ÇALIŞMA ALANLARI</a></li>
                    <li class="menu"><a href="/iletisim.html">İLETİŞİM</a></li>
                    <li class="menu"><a href="https://www.tugcealkan.com/blog/">BLOG</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="contact-wrap">
        <div class="contact-container">
            <div class="map-container flexcontainers">
                <div class="mapframe">
                    <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.713105411106!2d29.023817976585466!3d40.98776262068704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab90d9964c0e1%3A0x7684536549f3b7c3!2sYakaza%20Psikoloji%202!5e0!3m2!1str!2str!4v1714843656861!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="contact-form-container flexcontainers">
                <div class="formwrap">
                    <form action="iletisim-post.php" method="POST">
                        <?php if (isset($_GET['success'])) : ?>
                            <div style="background-color: #a3b0ae; color:white; border-radius: 4px; padding: 4px 0; text-align:center; margin-left: auto; margin-right: auto;">Mesajınız Başarıyla İletildi</div>
                        <?php endif ?>
                        <div class="contactuscaption">
                            <h1>İletişim</h1>
                        </div>
                        <div class="formrow formrow1">
                            <label>Ad &amp; Soyad</label>
                            <input class="span3" placeholder="Adınız Soyadınız" type="text" name="adi_soyadi" required="">
                        </div>
                        <div class="formrow formrow2">
                            <label>Telefon</label>
                            <input type="text" class="span3" name="telefon" placeholder="5xx-xxx-xxxx" required="">
                        </div>
                        <div class="formrow formrow3">
                            <label>E-mail</label>
                            <input type="email" class="span3" name="email" placeholder="ornek@ornek.com" required="">
                        </div>
                        <div class="formrow formrow4">
                            <textarea class="span34" id="message" name="mesaj" cols="100%" rows="10" placeholder=" Mesajınız..."></textarea>
                        </div>
                        <div class="sendrow">
                            <button class="sendbttn" type="submit">Gönder</button>
                        </div>
                    </form>
                    <div class="attributelinks">
                        <div class="attrlinks link1"><a href="https://wa.me/+905306137411?text=Doğum%20Günüskon%20KUTLU%20OLSUUuUuunn" target="_blank"><i class="attrlogo fa-brands fa-whatsapp"></i></a></div>
                        <div class="attrlinks link2"><a href="mailto:psikolog@tugcealkan?subject=Danışmanlık Hakkında"><i class="attrlogo fa-solid fa-envelope"></i></a></div>
                        <div class="attrlinks link3"><a href="https://www.instagram.com/psikologtugcealkan" target="_blank"><i class="attrlogo fa-brands fa-instagram"></i></a></div>
                        <div class="attrlinks link4"><a href="tel:+905306137411"><i class="attrlogo fa-solid fa-phone"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="navlinkscontainer">
            <div class="footerlogo1">
                <a href="">
                    <img src="/images/mainlogo.png" alt="Psikolog Tuğçe Alkan, Ergen Psikoterapist, Yetişkin Psikoterapist" srcset="">
                    <div class="logocaption2">
                        <h2>Psikolog</h2>
                        <h1>Tuğçe Alkan</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="bookingbutton"></div>

        <div class="footerinfo">
            <span class="footerintro"><a href="https://wa.me/+905306137411?text=Doğum%20Günüskon%20KUTLU%20OLSUUuUuunn" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></span>
            <span class="footerintro"><a href="https://maps.app.goo.gl/uXh8HuBm65SQh7rn7" target="_blank"><i class="fa-solid fa-map-location-dot"></i></a></span>
            <span class="footerintro"><a href="tel:+905306137411"><i class="fa-solid fa-phone"></i></a></span>
            <span class="footerintro"><a href="https://www.instagram.com/psikologtugcealkan" target="_blank"><i class="fa-brands fa-instagram"></i></a></span>
        </div>

        <div class="footernavbar">
            <ul class="footermenulist">
                <li><a href="/index.html">ANA SAYFA</a></li>
                <li><a href="/hakkimda.html">HAKKIMDA</a></li>
                <li><a href="/calismalarim.html">ÇALIŞMA ALANLARI</a></li>
                <li><a href="https://www.tugcealkan.com/blog">BLOG</a></li>
            </ul>
        </div>

        <a href=""><span class="attribute">mg.dev</span></a>
    </div>
</body>

</html>