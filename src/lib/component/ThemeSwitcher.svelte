<script lang="ts">
  import SvgButton from "./SvgButton.svelte";
  import ti_contrast from "typicons.font/src/svg/adjust-contrast.svg";
  import { isLight } from "$lib/stores";

  function toggleDarkmode(): void {
    isLight.set(!$isLight);
  }
</script>

<svelte:head />

<SvgButton src={ti_contrast} color="light" on:click={toggleDarkmode} />
