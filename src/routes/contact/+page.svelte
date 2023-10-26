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
    <h1>My socials</h1>
    <p>Instagram, Youtube, Soundcloud</p>
  </article>
</div>

<style lang="scss">
  @import "$lib/style/settings.scss";

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
