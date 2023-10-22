<script>
  import Header from "$lib/Header.svelte";
  import "./styles.scss";
</script>

<div class="app">
  <Header />

  <main>
    <slot />
  </main>

  <footer>
    <p>
      visit <a href="https://kit.svelte.dev">kit.svelte.dev</a> to learn SvelteKit
    </p>
  </footer>
</div>

<style lang="scss">
  @use "$lib/settings.scss";
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
  }

  footer {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 12px;
    background-color: settings.$color-dark-0;
    color: settings.$color-light-2;
  }

  footer a {
    font-weight: bold;
  }

  @media (min-width: settings.$threshold-mobile) and (max-width: settings.$threshold-desktop) {
    footer {
      padding: 12px 0;
    }
    main {
      width: 80vw;
    }
  }
  @media (min-width: 600px) {
    main {
      width: 55vw;
    }
  }
</style>
