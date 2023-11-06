<script>
  import Page from "../+page.svelte";
</script>

<div class="content">
  <h1>Vergangene Projekte:</h1>
  <article class="left cafewaltz">
    <h2>Café Waltz:</h2>
    <div>
      <iframe
        title="song on soundcloud"
        width="100%"
        height="300"
        scrolling="no"
        frameborder="no"
        allow="autoplay"
        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1485538261&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
      />

      <p>
        Release von meiner Single und erstem Song “Café Waltz”.
        <br />
        <a
          href="https://youtu.be/57LBGPl1k9A?si=EVVo0WN9ntsIcOcL"
          target="_blank">YouTube</a
        >
        <a
          href="https://open.spotify.com/track/4NseEH9xheXCQj8aNu25uq?si=220fd17a150142e9"
          target="_blank">Spotify</a
        >
        <a href="https://on.soundcloud.com/zReX5" target="_blank">SoundCloud</a>
        <br />
        <i
          >(Abschlussarbeit der 9. Klasse in der Oberstufen Schule Huttwil in
          Zusammenarbeit mit Landolin Wirz, Martin Jufer, Lias Bangerter,
          Emmanuel Killer und Louis Siegfried.)<i />
        </i>
      </p>
    </div>
  </article>
  <article class="right">
    <h2>Workshop Teilnehmerin mit Auftritt an den Langnauer Jazz Nights:</h2>
    <p>
      Im Jahr 2023 besuchte ich zum ersten Mal die Langnauer Jazz Nights, wo ich
      unteranderem an Workshops teilnahm und kurze “Open Stage” Konzerte mit
      anderen Musikern aufführte.
    </p>
  </article>
  <article class="left">
    <h2>Solo-Sängerin an kirchlichen Anlässen:</h2>
    <p>
      Als Mitglied der katholischen Kirche führte ich als Solistin immer wieder
      einzelne Stücke auf.
    </p>
  </article>

  <article class="right">
    <h2>Kirchenkonzert mit Samuel Jersak:</h2>
    <p>
      Nach dem Konzept von “Musik und Wort” spielte ich zusammen mit dem
      Pianisten Samuel Jersak ein kurzes Jazz Konzert als Begleitung von einem
      Gottesdienst.
    </p>
  </article>
  <article class="left">
    <h2>Kadetten 2022 und 2023:</h2>
    <p>
      Unter der Leitung von André Gygli spiele ich seit 2022 jedes Jahr in der
      Kadetten Musik von Huttwil als Pianistin und Schlagzeugerin mit.
    </p>
  </article>

  <article class="right">
    <h2>Teilnahme an der Gartenoper Langenthal 2022:</h2>
    <p>
      Durch meine vorherigen Gesangslehrerin Amanda Schweri, wurde ich Teil des
      Projektes “Carmen; George Bizet” in der Gartenoper Langenthal. Ich sang
      als Teil des Kinder-/Jungendchor mit.
    </p>
  </article>
  <article class="left">
    <h2>Schülerband Hofmatt:</h2>
    <p>
      Ab er 7. Klasse besuchte ich regelmässig die Schülerband unter der Führung
      von Matthias Boss. In dieser Formation nahm ich an mind. Einem Konzert pro
      Jahr teil.
    </p>
  </article>
  <h1>Zukünftige Projekte:</h1>
  <article class="right">
    <h2>Kadetten Konzerte 2024:</h2>
    <p>
      Ich werde am 13. Und 14. Juni als Gesangssolistin, Pianistin und
      Perkussionistin als Teil der Kadetten Huttwil auftreten. (weitere Infos
      folgen.)
    </p>
  </article>
  <article class="left">
    <h2>Album in Aussicht:</h2>
    <p>
      “Mit meinem ersten Lied hinter mir, erhoffe ich in näherer Zukunft ein
      Album herauszubringen.” Das Album wird verschiedene Genres enthalten und
      ein Surprise Zusatz-Projekt geben.
    </p>
  </article>

  <article class="right">
    <h2>Gartenoper Langenthal “die verkaufte Braut.”:</h2>
    <p>
      Ich werde ab ca. Januar mit der Vorbereitung der Oper “die verkaufte
      Braut” als Mitglied im Erwachsenenchor starten. Die Konzerte sind auf der
      Website der Gartenoper Langenthal zu finden.
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

    h2 {
      font-size: 2em;
    }
  }
  .content {
    @include grid.iregular-thirds;
    margin-top: 2em;
    h1 {
      grid-column: 1 / span 3;
    }
  }
  .left {
    @include grid.left-side;
  }
  .right {
    @include grid.right-side;
  }
  .cafewaltz {
    @media (min-width: settings.$threshold-desktop) {
      div {
        display: grid;
        grid-template-columns: 1fr 1fr;
        p {
          text-align: left;
          flex-shrink: 1;
        }
        iframe {
          flex-grow: 1;
        }
      }
    }
  }
</style>
