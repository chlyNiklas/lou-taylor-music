<script lang="ts">
  import Image from "$lib/component/Image.svelte";
  import lou_taylor_home from "$lib/images/lou-taylor-home.jpeg";
  let array: number[] = [1, 2, 3, 4, 5];
</script>

<div class="content">
  {#each array as i}
    <article class:left={i % 2 === 0} class:right={i % 2 === 1}>
      <Image src={lou_taylor_home} alt="Lou" />
      <article />
    </article>
  {/each}
  <button
    on:click={async () => {
      console.log(await fetch("/gallery/declarations.csv").body);
    }}>asdf</button
  >
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
