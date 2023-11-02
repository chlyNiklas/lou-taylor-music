<script>
  import Page from "../+page.svelte";
</script>

<div class="content">
  <article class="left">
    <h1>Caffe Walz</h1>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima modi
      deserunt, perferendis facilis dolore quo quae facere vitae voluptate
      maxime, iste suscipit eveniet hic quod, placeat reiciendis dolorem
      distinctio mollitia.
    </p>
  </article>
  <article class="right">
    <h1>Caffe Walz</h1>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima modi
      deserunt, perferendis facilis dolore quo quae facere vitae voluptate
      maxime, iste suscipit eveniet hic quod, placeat reiciendis dolorem
      distinctio mollitia.
    </p>
  </article>
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
