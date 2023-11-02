<script>
  import Contact from "$lib/component/Contact.svelte";
</script>

<div class="content">
  <article class="left">
    <h1>Get in touch with me</h1>
    <p>
      If you want to get in touch with me to just say hello, start a project
      with me or if you want to book me you can do so with ...
    </p>
  </article>
  <article class="right">
    <h1>socialmedia,</h1>
    <p>
      <a
        href="https://instagram.com/lou.t_music?igshid=YzAwZjE1ZTI0Zg=="
        target="_blank">Instagram</a
      >,
      <a href="https://on.soundcloud.com/P6kds" target="_blank">Soundcloud</a>
    </p>
  </article>
  <article class="left">
    <h1><a href="mailto:contact@lou-taylor.com">email</a>,</h1>
    <p>Just write me, usualy i'm not that rude.</p>
  </article>

  <article class="right">
    <h1>right here,</h1>
    <Contact />
  </article>
  <article class="left">
    <h1>or even via letter</h1>
    <div>
      <p>
        Yes, really. So if you're that fancy <br />
        and still want to mess around with paper.
      </p>
      <address>
        Lou Taylor <br />
        Musterstrasse 3 <br />
        6969 Musterort<br />
        Switzerland <br />
      </address>
    </div>
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
