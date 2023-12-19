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
    <span> <SvgButton src={ti_close}  on:click={() => dialog.close()} /></span>
    <slot />
  </div>
</dialog>

<style lang="scss">
  @use "$lib/style/settings.scss";
  span {
    position: absolute;

    z-index: 100;
    top: 0.5em;
    right: 0.5em;

    padding: 0;
    border: none;
    border-radius: settings.$margin-small;

    background-color: var(--color-bg-1);
  }
  dialog {
    min-width: 20vw;
    max-width: calc(100vw - 50px);
    max-height: calc(100vh - 50px);

    border: solid 0;
    border-radius: settings.$margin-small;

    background-color: var(--color-bg-1);

    filter: drop-shadow(0px 0px 10px #0009);
  }
</style>
