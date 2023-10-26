<script lang="ts">
  import Image from "$lib/component/Image.svelte";
  import type { ImageSources } from "$lib/types/common";
  import { onMount } from "svelte";
  let images: ImageSources[] = [];

  onMount(() => {
    getImages();
  });

  async function getImages() {
    let res = await fetch("/assets/manifest.json");
    images = await res.json();
  }
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
  @use "$lib/style/settings.scss";
  @use "$lib/style/grid.scss";
  article {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  .content {
    @include grid.iregular-thirds;
  }
  .left {
    @include grid.left-side;
  }
  .right {
    @include grid.right-side;
  }
</style>
