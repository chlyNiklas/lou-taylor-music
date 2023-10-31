<script>
  import Contact from "$lib/component/Contact.svelte";
</script>

<div class="content">
  <article class="left">
    <h1>Get in touch with me</h1>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore neque
      porro debitis praesentium saepe, ut et repellendus ea, odio ad laboriosam
      quasi asperiores perspiciatis facere. Deserunt, odio debitis? In, maiores!
    </p>
  </article>
  <article class="right">
    <h1>socialmedia,</h1>
    <p>Instagram, Youtube, Soundcloud</p>
  </article>
  <article class="left">
    <h1>an <a href="mailto:contact@lou-taylor.com">email</a>,</h1>
    <p>Just write me, usualy i'm not that rude.</p>
  </article>

  <article class="right">
    <h1>right here,</h1>
    <Contact />
  </article>
  <article class="right">
    <h1>or even a letter</h1>
    <p>Instagram, Youtube, Soundcloud</p>
    <address>
      Lou Taylor <br />
      Musterstrasse 3 <br />
      6969 Musterort<br />
      Switzerland <br />
    </address>
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
  address {
    text-align: left;
  }
</style>
