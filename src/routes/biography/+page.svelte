<script>
  import Contact from "$lib/component/Contact.svelte";
  import Image from "$lib/component/Image.svelte";
  import kiss from "$lib/images/kiss.jpeg";
</script>

<div class="content">
  <article class="all">
    <p>
      Loana Iva Tiziana Groux, geboren am 07.07.2007, zeigte schon mit jungem
      Alter Freude an der Musik. Ihre kleinen Beine zappelten herum, als ihr
      Vater ihr das Musik Video zu Kiss’s “I was made for loving you” zeigte,
      während ihr schriller Gesang durch das ganze Haus zu hören war. Während
      andere Mädchen in ihrem Alter sich für die Fasnacht als Prinzessinnen und
      Feen verkleideten, stach Loana in der Montur von Kiss aus der Menge heraus
    </p>
    <Image src={kiss} alt="Lou in ihrem Kisskostüm." />
  </article>

  <article class="right">
    <p>
      Mit sieben Jahren wurde das quirlige Kind eingeschult und um übrige
      Energie loszuwerden, meldeten Loana’s Eltern sie für Karate und Schlagzeug
      Unterricht an. Ihr Schlagzeuglehrer Martin Silverberg begleitete sie bis
      zu seiner Pensionierung. Mit ihm machte sie ihre ersten Schritte in
      Richtung Blues und Jazz. Weil Loana beim Schlagzeugunterricht aber auch
      noch selbstgeschriebene Songs sang, empfahl ihr der Drummer
      Gesangsunterricht zu nehmen.
    </p>
  </article>
  <article class="left">
    <p>
      Die Gesangslehrerin der Musikschule Huttwil Amanda Schweri weckte ihre
      Leidenschaft für den Gesang. Der Einstieg in den klassischen Gesang fiel
      Loana zwar schwer, aber ihre Entwicklung führte letzten Endes zur
      Mitwirkung in der Gartenoper Langenthal. Durch Amanda lernte Loana die
      Grundlagen des Gesangs und ihre Bühnenpräsenz. Damit Loana sich selbst
      beim Singen auf dem Klavier begleiten konnte, nahm sie zusätzlich
      Klavierunterricht bei Martin Jufer. Der Klavierunterricht füllte die
      Lücke, die durch das Ende des Schlagzeugunterrichts entstanden war.
    </p>
  </article>
  <article class="right">
    <p>
      Mit der Unterstützung von Amanda Schweri und Martin Jufer wurde Loana ins
      Talentförderprogramm Emmental-Oberaargau aufgenommen. Für die Schulen in
      Huttwil war Loana die erste Sängerin/Jazzerin und zweite Musikerin seit
      Beginn des Förderprogrammes. Da die Schule Huttwil bisher vor allem
      Erfahrungen mit Sportlern (Eishockey, Fussball etc.) hatte, mussten sich
      alle zuerst zurechtfinden. Von dieser Pionierarbeit profitieren nun
      weitere Musiktalente an der Schule.
    </p>
  </article>
  <article class="left">
    <p>
      Dank des Förderprogrammes konnte Loana während der Schulzeit zusätzlich
      bei Martin Jufer Klavierunterricht, Musiktheorie und Geschichte sowie TSP
      (Technik-Songwriting-Producing) besuchen. Martin, welcher selbst Jazzer
      ist, entdeckte in Loana ein gewisses “Feeling” für Jazz, welches sie noch
      nicht sah. Somit entschied er sich Loana in Richtung Jazz zu fördern und
      schickte sie an den Besuchstag der Swiss Jazz School Bern. Loana war so
      begeistert, dass sie sich an die Aufnahmeprüfung für das TFM-Ensemble
      (Talentförderung Musik) der Jazz Schule anmeldete. Ab dem
      Frühlingssemester wurde sie Mitglied des Ensembles.
    </p>
  </article>
  <article class="right">
    <p>
      Neue Menschen traten in ihr Leben. Hervorzuheben sind insbesondere Stewy
      von Wattenwyl und Lias Bangerter. Stewy ist für Loana mehr als nur der
      Lehrer des TFM-Ensembles. Der Schulleiter der Swiss Jazz School coachte
      sie zwei Jahre lang und ermutigte sie, sich für die Prüfung für das
      Talentförderprogramm am Gymnasium Hofwil anzumelden.
    </p>
  </article>
  <article class="left">
    <p>
      Im TFM-Ensemble lernte sie auch den jungen Pianisten Lias Bangerter
      kennen. Mit ihm gründete sie ihre erste eigene Band “Smokey Tea”. Anfangs
      2023 entfernte sie sich aber von dieser Formation und Smokey Tea wurde zum
      Sean Martin Trio. Bis heute folgten weitere gemeinsame Projekte und
      Auftritte mit dem jungen Musiker. Wie Mitglieder ihrer zweiten Band
      “Barcode Zebra”, war Lias bei Loanas ersten veröffentlichten Lied
      involviert, “Café Waltz”. Die Veröffentlichung dieses Liedes war
      gleichzeitig ihre Abschlussarbeit der 9. Klasse.
    </p>
  </article>
  <article class="right">
    <p>
      BarcodeZebra-Mitglied Landolin Wirz spielte als Producer und Pianist beim
      Projekt “Café Waltz” eine zentrale Rolle. Die ersten Erfolge mit Café
      Waltz bewogen Loana dazu, ihren Fokus auf Songwriting und einer
      Solo-Karriere zu legen. Mit der Aufnahme in der TaF-Klasse des Gymnasium
      Hofwils kann sie ihre musikalische und schulische Ausbildung parallel
      führen.
    </p>
  </article>
</div>

<style lang="scss">
  @use "$lib/style/settings.scss";
  @use "$lib/style/grid.scss";

  article {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .content {
    @include grid.iregular-thirds;
  }
  .left {
    @include grid.left-side;
  }
  .all {
    grid-column: 1 / span 3;

    @media (min-width: settings.$threshold-desktop) {
      display: grid;
      grid-template-columns: 1fr 1fr;

      p {
        text-align: right;
        flex-shrink: 1;
      }
    }
  }
  .right {
    @include grid.right-side;
  }
  address {
    text-align: left;
  }
</style>
