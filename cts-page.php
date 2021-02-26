<?php
/*
Template Name: CTS(cts-page.php)
*/
get_header(); ?>
<main>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>セレベレムトレーニングスクール</span>CTS</h2>
      <h3>今しかできない運動能力を<br class="sp">手に入れるために</h3>
      <div class="outer-container">
        <p>現在の子供達は環境の変化、遊び方の変化で１０年前より運動神経が落ちております。<br><br>
    そんな中で当スクールは運動の苦手な小学生を対象とした体の基礎を徹底的のトレーニングする「小脳トレーニング」を行っております。<br><br>
    楽しく、厳しく、自分で考えて行動する事を目標としてトレーニングを行う中で素晴らしい人格」の育成も徹底しております。<br><br>
    運動を通じて身体的にも精神的にも成長して頂くことを願って、日々トレーニングを行って行きます。</p>
      </div>
    </div>
  </section>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>ABOUT</span>対象年齢・開催時間</h2>
      <div class="outer-container">
        <p class="pc"><img src="<?php echo get_template_directory_uri(); ?>/img/Grow_top_PC.png"></p>
        <p class="sp"><img src="<?php echo get_template_directory_uri(); ?>/img/Grow_top_sp.png"></p>
      </div>
    </div>
  </section>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
    <h2 class="sectionTitle"><span>PRICE</span>料金</h2>
      <div class="price-container">
        <table class="price-container__table pc">
          <tr>
            <th>入会金</th>
            <th>週1コース</th>
            <th>フリークラス</th>
            <th>年会費</th>
          </tr>
          <tr>
            <td>¥3,300</td>
            <td class="popular">¥6,600</td>
            <td>¥11,000</td>
            <td>¥15,000</td>
          </tr>
          <tr>
            <td>※ 初回のみ</td>
            <td><a href="<?php echo home_url(); ?>/contact-cts/">申し込み</a></td>
            <td><a href="<?php echo home_url(); ?>/contact-cts/">申し込み</a></td>
            <td>※ 12月28日に1月分と一緒に請求</td>
          </tr>
        </table>
        <table class="sp">
          <tr>
            <th>入会金</th>
            <td>¥3,300</td>
            <td>※ 初回のみ</td>
          </tr>
          <tr>
            <th>週1コース</th>
            <td class="popular">¥6,600</td>
            <td><a href="<?php echo home_url(); ?>/contact-cts/">申し込み</a></td>
          </tr>
          <tr>
            <th>フリークラス</th>
            <td>¥11,000</td>
            <td><a href="<?php echo home_url(); ?>/contact-cts/">申し込み</a></td>
          </tr>
          <tr>
            <th>年会費</th>
            <td>¥15,000</td>
          </tr>
        </table>
      </div>
    </div>
  </section>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>CAMPAIGN</span>無料体験実施中</h2>
      <div class="campaign-container">
        <div class="campaign-container__item">
          <p class="tokuten">特典1</p>
          <p>1ヶ月分<span class="big">無料</span></p>
        </div>
        <div class="campaign-container__item">
          <p class="tokuten">特典2</p>
          <p>セラバンド<span>プレゼント</span></p>
        </div>
      </div>
      <p class="to_contact">
        <a href="<?php echo home_url(); ?>/contact-cts">お申し込み</a>
      </p>
    </div>
  </section>
</main>
<?php get_footer(); ?>