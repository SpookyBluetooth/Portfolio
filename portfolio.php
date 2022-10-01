<?php
    $hero_title="PORTFOLIO NI KUYA NORMAN AT JC";
    $hero_subtitle="Ang mga taga-Oo kahit hindi.";
    $jc="Jc";
    $norman="Norman";
    $first_para="Si Jc ay kumuha ng kurso Bachelor of Science in Computer Science (BSCS) sa STI Ortigas-Cainta. 
    Dahil mahilig s'ya sa Computer  Games at naimpluwesyahan sya ng mga kuya n'yang programmers. Bukod d'on gusto 
    nya makatapos ng pagaaral at magkaroon ng magandang trabaho at magandang buhay. Naisip nya na 'In-demand' ang 
    programmers sa lumalaking industriya ng teknolohiya kaya n'ya kinuha ang kursong ito.";
    $second_para="Nuong mga unang araw ng pasukan ay hindi s'ya nageexpect ng kahit ano at gusto lamang nya magaral 
    at makatapos.";
    $third_para="Hindi nadalian si Jc sa kursong kanyang kinuha marahil dahil bago s'ya sa programming, pero dahil 
    sa tulong ng kanyang mga napiling kaibigan naging mas interesante sa kanya ang kurso. Sa kasalukuyan, nasa 
    ikaapat na taon na ng kolehiyo si Jc at patuloy na nagsusumikap para makatapos.";
    $forth_para="Si Norman kumuha ng kursong Bachelor of Science in Computer Science (BSCS) sa STI Ortigas-cainta. 
    Matagal na panahon na ng tumigil sa pag aaral at ngayon naisip na magbalik aral at napili ang kursong ito dahil 
    dahil gusto nya matuto at magkaroon ng kaalaman sa paggamit ng makabagong teknolohiya tulad ng computer.";
    $fifth_para="Naging interesante ang una at pangalawang taon nya sa pag aaral ng napili n'yang kurso. Naingganyo 
    s'ya na matuto at nagkaroon ng mas malalim na kagustuhan pang matuto sa larangan ng programming.";
    $sixth_para="Ngayon nasa ika-apat na taon na s'ya ng pag aaral sa kanyang kurso, unti unti na n'yang nalalaman ang 
    hirap at malaking agwat sa kaalaman kumpara sa mga kasabayan n'ya na mag aaral. Sa tulong ni Jc at mga kaibigan 
    nila ay nakakayanan at nagsusumikap pa s'ya na mas matuto.";
    $sept_2019="Ipinagdiwang ng STI ang kanilang ika-36 na anibersaryo sa Enchanted Kingdom at halos buong section
     nila ay kasama.";
    $march_2020="Nagsimula ang pandemic at halos huminto lahat ng bagay sa mundo kasama na dito ang operasyon ng mga 
    paaralan at lahat ng industriya.";
    $may_2022="Medyo lumuwag na ang gobyerno sa mga mamamayan at bumababa na ang kaso ng Covid kaya naimbitahan si 
    Jc at kanilang ibang kaklase para dumalo 
    sa selebrasyon ng kaarawan ni Kuya Norman.";
    $kasalukuyan="Sa ngayon, nasa ika-apat na taon na ng kolehiyo si Kuya Norman at Jc. At kahit marami sa mga kaklase
     nila nuong first year ay hindi na nagpatuloy sa pagaaral
    sinisikap nilang gawin ang lahat para magawa ang mga gawain at makapagtapos sa kolehiyo.";
    $quote="A person who is content to stay in their comfort zone is not a progressive person.";
    $EkPict = "Ek pict.jpg";
    $KNBV="KuyaNormanBday.mp4";
    $CS2022="cs2022.jpg";
?>  


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Magazine</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <main>
      <section class="heading">
        <header class="hero">
          <h1 class="hero-title"><?php echo $hero_title?></h1>
          <p class="hero-subtitle">
            <?php echo $hero_subtitle?>
          </p>
        </header>
        <div class="author">
          <p class="author-name">
            By
            <a href="https://www.facebook.com/jc.sanjuan0" target="_blank" rel="noreferrer"
              ><?php echo $jc?></a>
            and Kuya <a href="https://www.facebook.com/hernandez.norman.9655"><?php echo $norman?></a>
          </p>
          <p class="publish-date">Must Be Submitted By October 6th</p>
        </div>
      </section>
      <section class="text">
        <p class="first-paragraph">
            <?php echo $first_para?>
        </p>
        <p>
            <?php echo $second_para?> 
        </p>
        <p>
            <?php echo $third_para?>
        </p>
        <blockquote>
          <hr />
          <p class="quote">
            History ng Tropa
          </p>
          <hr />
        </blockquote>
        <p><?php echo $forth_para?></p>
        <p>
          <?php echo $fifth_para?>
        </p>
        <p>
          <?php echo $sixth_para?>
        </p>
      </section>
      <section class="text text-with-images">
        <article class="brief-history">
          <h3 class="list-title">Moments</h3>
          <p>Ng Tropa</p>
          <ul class="lists">
            <li>
              <h4 class="list-subtitle">Sept - 2019</h4>
              <p><?php echo $sept_2019?></p>
            </li>
            <li>
              <h4 class="list-subtitle">March - 2020</h4>
              <p><?php echo $march_2020?></p>
            </li>
            <li>
              <h4 class="list-subtitle">May - 2022</h4>
              <p><?php echo $may_2022?></p>
            </li>
            <li>
              <h4 class="list-subtitle">Kasalukuyan</h4>
              <p><?php echo $kasalukuyan?></p>
            </li>
          </ul>
        </article>
        <aside class="image-wrapper">
          <img
            src="<?php echo $EkPict?>"
            alt="EkPict"
            loading="lazy"
            class="image-1"
            width="500"
            height="400"
          />
          <video 
            width="250" height="300" controls>
            <source src="<?php echo $KNBV?>" 
            type="video/mp4">
          </video>
          <blockquote class="image-quote">
            <hr />
            <p class="quote"><?php echo $quote?></p>
            <hr />
          </blockquote>
          <img
            src="<?php echo $CS2022?>"
            alt="section"
            loading="lazy"
            class="image-3"
            width="500"
            height="400"
          />
        </aside>
      </section>
    </main>
  </body>
</html>