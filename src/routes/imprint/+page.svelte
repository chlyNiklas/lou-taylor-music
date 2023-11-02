<script>
  import Contact from "$lib/component/Contact.svelte";
</script>

<div class="content">
  <article class="left">
    <address>
      Lou Taylor <br />
      Musterstrasse 3 <br />
      6969 Musterort<br />
      Switzerland <br />
    </address>
  </article>
  <article class="right">
    <Contact />
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

    div {
      text-align: left;

      address {
        margin: settings.$margin-small;
      }
    }
  }

  .content {
    @include grid.iregular-thirds;
    margin-top: 5vh;
  }
  .left {
    @include grid.left-side;
  }
  .right {
    @include grid.right-side;
  }
  address {
    text-align: left;
  }
</style>
