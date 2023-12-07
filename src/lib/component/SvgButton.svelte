<script lang="ts">
  import { onMount } from "svelte";

  export let src: string;
  export let color: "dark" | "light" = "dark";
  export let ariaLabel: string = "icon";

  let svg: string | null = null;
  let mounted: boolean = false;
  onMount(async () => {
    mounted = true;
  });
  async function loadSvg() {
    svg = await (await fetch(src)).text();
  }
  $: if (mounted && src) loadSvg();
</script>

<button
  on:click
  class:dark={color === "dark"}
  class:light={color === "light"}
  id={ariaLabel}
  aria-label={ariaLabel}
>
  {#if svg}
    {@html svg}
  {:else}
    <p>load..</p>
  {/if}
</button>

<style lang="scss">
  @use "$lib/style/settings.scss";
  button {
    display: flex;
    align-items: center;
    justify-content: center;

    height: 100%;

    background-color: #0000;
    border: 0;
    padding: settings.$margin-small;
  }
  .dark {
    fill: var(--color-dark-0);
  }
  .light {
    fill: var(--color-light-0);
  }
</style>
