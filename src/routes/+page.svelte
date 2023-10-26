<script>
  import Image from "$lib/component/Image.svelte";
  import lou_taylor_home from "$lib/images/lou-taylor-home.jpeg";
  import LouTaylorMusic from "$lib/component/LouTaylorMusic.svelte";
</script>

<svelte:head>
  <title>Home</title>
  <meta name="description" content="Svelte demo app" />
</svelte:head>

<div class="content">
  <article class="left ltm">
    <LouTaylorMusic />
  </article>
  <article class="right">
    <Image src={lou_taylor_home} alt="Lou Taylor singing" />
  </article>
  <article class="left">
    <h1>Uppcomming:</h1>
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus
      possimus quos necessitatibus odio culpa alias illum animi deleniti
      reiciendis minus, id doloribus nemo aliquid debitis excepturi totam eum
      praesentium eaque!
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
  @media (min-with: settings.$threshold-mobile) {
    article.ltm {
      align-items: flex-start;
    }
  }
</style>
