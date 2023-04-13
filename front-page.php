<?php get_header(); ?>
<main>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>NEWS</span>お知らせ</h2>
      <div class="outer-container">
        <ul class="post_item_container">
          <?php
            $args = array(
              'posts_per_page' => 3,
              'post_status' => 'publish',
              'post_type' => 'post',
              'orderby' => 'date',
            );
            $my_query = new WP_Query($args);
            if($my_query->have_posts()):
              while($my_query->have_posts()):
              $my_query->the_post();
            ?>
            <li class="post_item">
              <a href="<?php the_permalink(); ?>"><span><?php the_date(); ?></span>　<?php the_title(); ?></a>
            </li>
            <?php
              endwhile;
              endif;
              wp_reset_postdata();
          ?>
        </ul>
      </div>
      <p class="to_news"><a href="<?php echo home_url(); ?>/news">お知らせ一覧へ</a></p>
    </div>
  </section>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>MESSAGE</span>ご挨拶</h2>
      <div class="outer-container">
        <p>Grow株式会社では<span class="bold">「地域の皆様に愛される、１００年続く会社」</span>をモットーに運動を通じて常に学び、実行し、成長し続ける企業を目指しております。<br><br>
      お子様、親御様、祖父祖母の３世代に渡り様々な活躍が出来るよう、努力しております。<br><br>
      私たちの願いは、利用者様、会員様がどれだけ満足していただけるか？を徹底的に考えること。少しでも私たちと時間を共有することで、今をより良い人生にするためのサポートをすることです。<br><br>
      多くの方に今よりも良い人生を送ってもらうために全力でサポートさせて頂きます。<br>
      どうぞ宜しくお願い致します。</p>
      </div>
    </div>
  </section>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>Business</span>事業紹介</h2>
      <div class="outer-container">
        <p class="sp">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mable/mable_logo.png" alt="mable">
        </p>
        <div class="business-left" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="600">
          <h3>MABLE</h3>
          <h4>マーブルスポーツアカデミー</h4>
          <p>運動の苦手な小学生を対象とした運動神経向上スクール<br>医療系国家資格を持つスタッフが教える日本初の小脳トレーニング
          </p>
          <p class="more fl"><a href="<?php echo home_url(); ?>/mable">詳しく見る</a></p>
        </div>
        <div class="business-right pc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mable/mable_logo.png" alt="mable">
        </div>
      </div>
      <!-- <div class="outer-container">
        <div class="business-left">
          <img width="90%" src="<?php echo get_template_directory_uri(); ?>/img/top/locoreha_logo.jpg" alt="locoreha">
        </div>
        <div class="business-right" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="600">
          <h3>LOCO REHA</h3>
          <h4>ロコリハ</h4>
          <p>「健康的で楽しいライフスタイルを！」<br>
              日高市、鶴ヶ島市を日本一の健康寿命を誇る地域にするためのサポートをさせていただきます。
          </p>
          <p class="more fr"><a href="<?php echo home_url(); ?>/locoreha">詳しく見る</a></p>
        </div>
      </div> -->
    </div>
  </section>
  <section>
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
      <h2 class="sectionTitle"><span>CAMPAIGN</span>無料体験実施中</h2>
      <div class="campaign-container">
        <div class="campaign-container__item">
          <p class="tokuten">特典1</p>
          <p>1ヶ月分間<span class="big">通い放題</span></p>
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
          <a href="<?php echo home_url(); ?>/contact" class="btn btn--sub btn-c"><i class="fa fas fa-envelope fa-position-left"></i>WEB申込みはこちら<br>24時間365日受付中</a>
        </div>
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
  <section id="contact">
    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="600">
      <h2 class="sectionTitle"><span>Contact</span>お問い合わせ</h2>
      <?php echo do_shortcode( '[contact-form-7 id="127" title="コンタクトフォーム"]' ); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>