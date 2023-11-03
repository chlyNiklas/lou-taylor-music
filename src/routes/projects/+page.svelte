<script>
  import Page from "../+page.svelte";
</script>

<div class="content">
  <article class="left cafewalz">
    <h1>Café Walz</h1>
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
    <h1>Album in Aussicht.</h1>
    <p>
      “Mit meinem ersten Lied hinter mir, erhoffe ich in näherer Zukunft ein
      Album herauszubringen.” Das Album wird verschiedene Genres enthalten und
      ein Surprise Zusatz-Projekt geben.
    </p>
  </article>
  <article class="left">
    <h1>Gartenoper Langenthal “die verkaufte Braut.”</h1>
    <p>
      Ich werde ab ca. Januar mit der Vorbereitung der Oper “die verkaufte
      Braut” als Mitglied im Frauenchor starten. Die Konzerte sind auf der
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
  }
  .content {
    @include grid.iregular-thirds;
  }
  .left {
    @include grid.left-side;
  }
  .right {
    @include grid.right-side;
  }
  .cafewalz {
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
