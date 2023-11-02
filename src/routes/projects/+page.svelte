<script>
  import Page from "../+page.svelte";
</script>

<div class="content">
  <article class="left cafewalz">
    <h1>Café Walz</h1>
    <div>
      <iframe
        width="100%"
        height="300"
        scrolling="no"
        frameborder="no"
        allow="autoplay"
        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1485538261&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
      />

      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima modi
        deserunt, perferendis facilis dolore quo quae facere vitae voluptate
        maxime, iste suscipit eveniet hic quod, placeat reiciendis dolorem
        distinctio mollitia.
      </p>
    </div>
  </article>
  <article class="right">
    <h1>Something else</h1>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima modi
      deserunt, perferendis facilis dolore quo quae facere vitae voluptate
      maxime, iste suscipit eveniet hic quod, placeat reiciendis dolorem
      distinctio mollitia.
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
