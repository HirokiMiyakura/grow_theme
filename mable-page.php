<?php
/*
Template Name: MABLE(mable-page.php)
*/
get_header(); ?>
<main>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>マーブル スポーツ アカデミー</span>MABLE</h2>
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
            <th>週2コース</th>
            <th>フリークラス</th>
            <th>年会費</th>
          </tr>
          <tr>
            <td>¥3,300</td>
            <td class="popular">¥6,600</td>
            <td>¥8,800</td>
            <td>¥11,000</td>
            <td>¥15,000</td>
          </tr>
          <tr>
            <td>※ 初回のみ</td>
            <td>1ヶ月4回</td>
            <td>1ヶ月8回</td>
            <td>レッスン参加無制限<br>1日2コマまで参加可</td>
            <td>※ 12月28日に<br>1月分と一緒に請求</td>
          </tr>
          <tr>
            <td></td>
            <td><a href="<?php echo home_url(); ?>/contact-mable">お申し込み</a></td>
            <td><a href="<?php echo home_url(); ?>/contact-mable">お申し込み</a></td>
            <td><a href="<?php echo home_url(); ?>/contact-mable">お申し込み</a></td>
            <td></td>
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
            <td>1ヶ月4回</td>
            <td><a href="<?php echo home_url(); ?>/contact-mable">お申し込み</a></td>
          </tr>
          <tr>
            <th>週2コース</th>
            <td class="popular">¥8,800</td>
            <td>1ヶ月8回</td>
            <td><a href="<?php echo home_url(); ?>/contact-mable">お申し込み</a></td>
          </tr>
          <tr>
            <th>フリークラス</th>
            <td>¥11,000</td>
            <td>レッスン参加無制限<br>1日2コマまで参加可</td>
            <td><a href="<?php echo home_url(); ?>/contact-mable">お申し込み</a></td>
          </tr>
          <tr>
            <th>年会費</th>
            <td>¥15,000</td>
            <td>※ 12月28日に<br>1月分と一緒に請求</td>
          </tr>
        </table>
      </div>
      <h4 class="class_detail detail_first">※ 兄弟割引き(¥1,100) 以降¥1,100円ずつ割引</h4>
      <h4 class="class_detail">※ ビジターは¥2,200で参加が可能です</h4>
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
        <div class="campaign-container__item">
          <p class="tokuten">特典3</p>
          <p>バランスディスクorラダー<br><span>プレゼント</span></p>
        </div>
      </div>

      <div class="btn-outer">
        <div class="btn-wrap">
          <a href="tel:0429805672" class="btn btn--main btn-c"><i class="fas fa-phone-alt fa-position-left"></i>お電話での申込みはこちら<br>042-980-5672<span> 受付時間 9:00~17:00</span></a>
        </div>
        <div class="btn-wrap">
          <a href="<?php echo home_url(); ?>/contact-mable" class="btn btn--sub btn-c"><i class="fa fas fa-envelope fa-position-left"></i>WEB申込みはこちら<br>24時間365日受付中</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>