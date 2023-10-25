<script lang="ts">
  import Image from "$lib/component/Image.svelte";
  import type { ImageSources } from "$lib/types/common";
  import { onMount } from "svelte";
  let images: ImageSources[] = [];

  onMount(() => {
    getImages();
  });

  async function getImages() {
    let res = await fetch("/gallery/manifest.json");
    images = await res.json();
  }
  $: console.log(images);
</script>

<div class="content">
  {#each images as image, i}
    <article class:left={i % 2 === 0} class:right={i % 2 === 1}>
      <Image src={image.src} alt={image.alt} />
      <article />
    </article>
  {/each}
</div>

<style lang="scss">
  img {
    max-width: 100%;
  }
  article {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  .content {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
  }
  .left {
    grid-column: 1 / span 2;
  }
  .right {
    grid-column: 2 / span 3;
  }
</style>
