<script>
  import { page } from "$app/stores";
  const entries = [
    { url: "/", name: "Home" },
    { url: "/gallery", name: "Gallery" },
    { url: "/projects", name: "Projects" },
    { url: "/contact", name: "Contact" },
    { url: "/biographie", name: "Biographie" },
  ];
</script>

<header>
  <div class="corner" />

  <nav>
    <ul>
      {#each entries as entry}
        <li
          aria-current={$page.url.pathname === entry.url ? "page" : undefined}
        >
          <a href={entry.url}>{entry.name}</a>
        </li>
      {/each}
    </ul>
  </nav>

  <div class="corner" />
</header>

<style lang="scss">
  @use "./settings.scss";
  header {
    display: flex;
    background-color: settings.$color-dark-0;
    justify-content: space-between;
  }
  nav {
    display: flex;
    justify-content: center;
  }

  .corner {
    width: 3em;
    height: 3em;
  }

  .corner a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
  }

  .corner img {
    width: 2em;
    height: 2em;
    object-fit: contain;
  }

  svg {
    width: 2em;
    height: 3em;
    display: block;
  }

  path {
    fill: var(--background);
  }

  ul {
    position: relative;
    padding: 0;
    margin: 0;
    height: 3em;
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    background: var(--background);
    background-size: contain;
  }

  li {
    position: relative;
    height: 100%;
  }

  li[aria-current="page"] a {
    font-weight: 1000;
    font-size: 1rem;
  }

  nav a {
    display: flex;
    height: 100%;
    align-items: center;
    padding: 0 0.5rem;
    color: settings.$color-light-0;
    font-size: 0.8rem;
    letter-spacing: 0.1em;
    text-decoration: none;
    transition: color 0.2s linear;
  }

  a:hover {
    color: settings.$color-accent-strong;
  }
</style>
