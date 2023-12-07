<script lang="ts">
  import SvgButton from "./SvgButton.svelte";
  import ti_contrast from "typicons.font/src/svg/adjust-contrast.svg";
  import dark from "$lib/style/dark.css?raw";
  import { onMount } from "svelte";

  let darkMode = false;

  function toggleDarkmode(): void {
    darkMode = !darkMode;
  }
</script>

<svelte:head>
  {#if darkMode}
    {@html `<style>${dark}</style>`}
  {/if}
</svelte:head>

<SvgButton src={ti_contrast} color="light" on:click={toggleDarkmode} />
