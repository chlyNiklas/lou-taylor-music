<script lang="ts">
  import { createEventDispatcher } from "svelte";
  import SvgButton from "./SvgButton.svelte";
  import ti_close from "typicons.font/src/svg/times.svg";
  export let showModal: boolean = false;
  const dispatch = createEventDispatcher();

  let dialog: HTMLDialogElement; // HTMLDialogElement

  $: if (dialog && showModal) dialog.showModal();
  $: if (dialog && !showModal) dialog.close();
</script>

<!-- svelte-ignore a11y-click-events-have-key-events a11y-no-noninteractive-element-interactions -->
<dialog
  bind:this={dialog}
  on:close={() => {
    showModal = false;
    dispatch("close");
  }}
  on:click|self={() => dialog.close()}
>
  <!-- svelte-ignore a11y-no-static-element-interactions -->
  <div on:click|stopPropagation>
    <span> <SvgButton src={ti_close} on:click={() => dialog.close()} /></span>
    <slot />
  </div>
</dialog>

<style lang="scss">
  @use "$lib/settings.scss";
  span {
    position: absolute;
    top: 0.5em;
    right: 0.5em;

    padding: 0;
    border: none;
    border-radius: settings.$margin-small;

    background-color: settings.$color-bg-1;
  }
  dialog {
    position: relative;
    min-width: 20vw;
    border: solid 1px #272524;
    border-radius: settings.$margin-small;
    background-color: settings.$color-bg-1;
  }
</style>
