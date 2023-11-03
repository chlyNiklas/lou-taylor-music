<script>
  import Header from "$lib/component/Header.svelte";
  import Footer from "$lib/component/Footer.svelte";
  import "./styles.scss";
</script>

<svelte:head>
  <title>Lou Taylor Music</title>
</svelte:head>

<div class="app">
  <Header />

  <main>
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

  main {
    flex: 1;
    display: flex;
    flex-direction: column;
    padding: 1rem;
    width: 100%;
    max-width: 64rem;
    margin: 0 auto;
    box-sizing: border-box;
    margin-bottom: 10vh;
  }

  @media (min-width: settings.$threshold-desktop) {
    main {
      width: 80vw;
    }
  }
</style>
