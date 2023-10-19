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
  <article class="right" style="justify-content: flex-end;">
    <img src={lou_taylor_home} alt="Image of lou" />
  </article>

  <h1 class="left">asdf</h1>
  <h1 class="right">asdf</h1>
  <h1>asdf</h1>
  <h1>asdf</h1>
  <h1>asdf</h1>
  <h1>asdf</h1>
</div>

<style lang="scss">
  @import "$lib/settings.scss";

  article {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  img {
    max-width: 30vw;
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
