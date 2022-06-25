<?php
/*
Template Name: COMPANY(company-page.php)
*/
get_header(); ?>
<main>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>会社情報</span>COMPANY INFO</h2>
      <div class="company-container">
        <table>
          <tr>
            <th>会社名</th>
            <td>Grow株式会社</td>
          </tr>
          <tr>
            <th>代表者氏名</th>
            <td>小林未来</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td><a href="tel:0429805672">042-980-5672</a></td>
          </tr>
          <tr>
            <th>住所</th>
            <td>埼玉県日高市駒寺野新田44-61</td>
          </tr>
          <tr>
            <th>設立年月日</th>
            <td>2020年1月14日</td>
          </tr>
          <tr>
            <th>従業員数</th>
            <td>3人</td>
          </tr>
        </table>
      </div>
    </div>
  </section>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>アクセス</span>ACCESS</h2>
      <div class="outer-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.0193411990404!2d139.36854246317472!3d35.922026606752155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018d7003d217a81%3A0x9c487c4ed7d7d454!2zR3Jvd-agquW8j-S8muekvg!5e0!3m2!1sja!2sjp!4v1648101309202!5m2!1sja!2sjp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
  </section>
  <section id="staff">
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="600">
      <h2 class="sectionTitle"><span>Staff</span>スタッフ</h2>
      <div class="staff-container">
        <div class="staff-item">
          <h4>小林未来</h4>
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/kobayashi.jpg" alt="小林未来">
          <ul>
            <li>流通経済大学附属柏高等学校　サッカー部　全国ベスト8</li>
            <li>流通経済大学　サッカー部 全国優勝</li>
          </ul>
          <ul>
            <li>柔道整復師</li>
            <li>運動器セラピスト</li>
            <li>浦和レッズ武藤雄樹　パーソナルトレーナー</li>
            <li>ツェーゲン金沢　白井裕人　パーソナルトレーナー</li>
          </ul>
          <p>運動を通じて人生がより良い方向に変わるきっかけとなればと思います。
          高齢者、お子様達が満足出来るよう全力でサポートさせて頂きます。</p>
        </div>
        <div class="staff-item">
          <h4>山田紀晶</h4>
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/yamada.jpg" alt="小林未来">
          <ul>
            <li>大宮武蔵野高校卒</li>
          </ul>
          <ul>
            <li>さいたま柔道整復専門学校卒</li>
          </ul>
          <p>日々、カラダを鍛えて体調管理をしています！
          少しでも子ども達が運動を好きになってくれるように熱い指導を行って行きます！</p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>