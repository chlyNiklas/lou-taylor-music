<script>
  import lou_taylor_home from "$lib/images/lou-taylor-home.jpeg";
  import LouTaylorMusic from "$lib/component/LouTaylorMusic.svelte";
</script>

<svelte:head>
  <title>Home</title>
  <meta name="description" content="Svelte demo app" />
</svelte:head>

<div class="content">
  <article class="left"><LouTaylorMusic /></article>
  <article class="right">
    <img src={lou_taylor_home} alt="Lou Taylor singing" />
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
  @import "$lib/settings.scss";

  article {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  img {
    max-width: 100%;
  }

  .content {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
  }
  .left {
    grid-column: 1 / span 2;
  }
  .right {
    grid-column: 2 / span 3;
  }
</style>
