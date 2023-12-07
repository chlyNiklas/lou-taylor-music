<script lang="ts">
  import SvgButton from "./SvgButton.svelte";
  import ti_contrast from "typicons.font/src/svg/adjust-contrast.svg";
  import { isLight } from "$lib/stores";
  import dark from "$lib/style/dark.css?raw";
  import { onMount } from "svelte";
  function toggleDarkmode(): void {
    isLight.set(!$isLight);
  }

  onMount(() => {
    isLight.subscribe((value) => (localStorage.content = value));
    let saved_isLight = localStorage.getItem("isLight") === "true";
    console.log(localStorage.getItem("isLight"));
    if (saved_isLight) {
      if (saved_isLight != $isLight) {
        isLight.set(saved_isLight);
      }
      return;
    }
    isLight.set(!window.matchMedia("(prefers-color-scheme: dark)").matches);
  });
</script>

<svelte:head>
  {#if $isLight}
    {@html `<style>${dark}</style>`}
  {/if}
</svelte:head>

<SvgButton src={ti_contrast} color="light" on:click={toggleDarkmode} />
