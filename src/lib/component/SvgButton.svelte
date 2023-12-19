<script lang="ts">
  import { onMount } from "svelte";
  import { isLight } from "$lib/stores";

  export let src: string;
  export let color: "dark" | "light" | null = null;
  export let ariaLabel: string = "icon";
  export let rotation: number = 0;

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
  style={`transform: rotate(${rotation}deg)`}
  on:click
  class:dark={color === "dark" || (color === null && $isLight)}
  class:light={color === "light" || (color === null && !$isLight)}
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
