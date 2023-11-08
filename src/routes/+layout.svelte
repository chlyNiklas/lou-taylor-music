<script>
  import Header from "$lib/component/Header.svelte";
  import Footer from "$lib/component/Footer.svelte";
  import "./styles.scss";
  import "../app.css";
</script>

<svelte:head>
  <title>Lou Taylor Music</title>
</svelte:head>

<div class="app">
  <Header />

  <main class="flex-col flex-1 max-w-5xl p-6 my-24 mx-auto">
    <slot />
  </main>
  <Footer />
</div>

<style lang="scss">
  @use "$lib/style/settings.scss";
  .app {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  @media (min-width: settings.$threshold-desktop) {
    main {
      width: 80vw;
    }
  }
</style>
