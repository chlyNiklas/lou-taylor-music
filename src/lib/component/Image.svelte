<script lang="ts">
  import Modal from "./Modal.svelte";

  export let src: string;
  export let alt: string;
  export let style: string = "";

  let details: boolean = false;
</script>

<button {style} on:click={() => (details = true)}>
  <img {src} {alt} />
  <p class="ontop">{alt}</p>

  <Modal bind:showModal={details}>
    <div>
      <img {src} {alt} />
      <p>{alt}</p>
    </div>
  </Modal>
</button>

<style lang="scss">
  @use "$lib/style/settings.scss";

  button {
    display: flex;
    position: relative;
    align-items: center;
    justify-content: center;

    background-color: #0000;
    border: 0;
    margin: settings.$margin-small;

    transition-duration: settings.$transition-duration-short;

    max-height: 100%;
    max-width: 100%;
  }

  @media (min-width: settings.$threshold-mobile) {
    button:hover > img {
      filter: blur(5px) brightness(50%);
      transition-duration: settings.$transition-duration-short;
    }
    button:hover > p {
      opacity: 1;
      transition-duration: settings.$transition-duration-short;
    }
  }
  p.ontop {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    color: var(--color-light-0);
    text-align: center;

    opacity: 0;
    transition-duration: settings.$transition-duration-short;
  }
  div {
    max-height: 100%;
    max-width: 100%;

    img {
      max-width: 80vw;
      max-height: 80vh;
    }
  }

  img {
    max-width: 100%;
    max-height: 100%;
  }
</style>
