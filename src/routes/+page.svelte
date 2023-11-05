<script lang="ts">
  import Image from "$lib/component/Image.svelte";
  import piano from "$lib/images/piano.jpeg";
  import LouTaylorMusic from "$lib/component/LouTaylorMusic.svelte";
  import Markdown from "$lib/component/Markdown.svelte";
</script>

<div class="content">
  <article class="left ltm" style="margin-top: 5vh">
    <LouTaylorMusic />
  </article>
  <article class="right">
    <Image
      src={piano}
      alt="”Song in Progress”, Lou an der Swiss Jazz School an zukünftigen Projekten am Arbeiten."
    />
  </article>
  <p class="left">
    Lou Taylor, offiziell Loana Groux, ist eine 16-jährige Musikerin aus dem
    Kanton Bern. Sie schreibt Songs, performt als Sängerin und Pianistin in
    verschiedensten Formationen und besucht momentan das Talentförderprogramm
    des Gymnasium Hofwil.
  </p>

  <article class="right">
    <h1>demnächst:</h1>
    <Markdown src="/etc/upcoming.md" />
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
  @media (min-width: settings.$threshold-mobile) and (max-width: 800px) {
    .ltm {
      align-items: flex-start;
    }
  }
</style>
