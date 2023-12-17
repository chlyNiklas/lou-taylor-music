<script lang="ts">
  import Header from "$lib/component/Header.svelte";
  import Footer from "$lib/component/Footer.svelte";
  import { onMount } from "svelte";
  import { isLight } from "$lib/stores";
  import dark from "$lib/style/themes/dark.css?raw";
  import light from "$lib/style/themes/light.css?raw";
  import "./styles.scss";

  let theme: string = "";

  onMount(() => {
    let saved_isLight = localStorage.getItem("isLight") === "true";
    if (saved_isLight) {
      if (saved_isLight != $isLight) {
        isLight.set(saved_isLight);
      }
    } else {
      isLight.set(!window.matchMedia("(prefers-color-scheme: dark)").matches);
    }
    isLight.subscribe((value) => (localStorage.isLight = value));
  });

  isLight.subscribe((isLight) => {
    if (isLight) {
      theme = light;
    } else {
      theme = dark;
    }
  });
</script>

<svelte:head>
  {@html `<style>${theme}</style>`}
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
