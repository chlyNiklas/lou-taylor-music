<div class="content">
  <article class="left">
    <h1>Get in touch with me</h1>
  </article>
</div>
<style lang="scss">
  @import "$lib/settings.scss";

  article {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  img {
    max-width: 100%;
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
