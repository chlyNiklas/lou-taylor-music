<script lang="ts">
  import Image from "$lib/component/Image.svelte";
  import lou_taylor_home from "$lib/images/lou-taylor-home.jpeg";
  import LouTaylorMusic from "$lib/component/LouTaylorMusic.svelte";
  import Markdown from "$lib/component/Markdown.svelte";
</script>

<div class="content">
  <article class="left ltm" style="margin-top: 5vh">
    <LouTaylorMusic />
  </article>
  <article class="right">
    <Image
      src={lou_taylor_home}
      alt="Lou in der reformierten Kirche Huttwil am Konzert geben."
    />
  </article>
  <article class="left">
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
