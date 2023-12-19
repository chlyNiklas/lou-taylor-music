<script lang="ts">
  import SvgButton from "./SvgButton.svelte";
  import ti_contrast from "typicons.font/src/svg/adjust-contrast.svg";
  import { isLight } from "$lib/stores";


  function toggleDarkmode(): void {
    isLight.set(!$isLight);
  }
</script>

<svelte:head />

<SvgButton src={ti_contrast} color="light" rotation={($isLight ? 0 : 180)} on:click={toggleDarkmode} />
