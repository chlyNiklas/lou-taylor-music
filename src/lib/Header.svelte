<script lang="ts">
  import { page } from "$app/stores";
  import ti_menue from "typicons.font/src/svg/th-menu.svg";
  import ti_close from "typicons.font/src/svg/times.svg";
  import SvgButton from "./component/SvgButton.svelte";
  const entries = [
    { url: "/", name: "Home" },
    { url: "/gallery", name: "Gallery" },
    { url: "/projects", name: "Projects" },
    { url: "/contact", name: "Contact" },
    { url: "/biographie", name: "Biographie" },
  ];
  let menue = {
    open: false,
    src: ti_menue,
  };
  let menue_src: string = ti_menue;

  $: {
    if (menue.open) {
      menue.src = ti_close;
    } else {
      menue.src = ti_menue;
    }
  }
</script>

<header>
  <div class="corner" />

  <nav>
    <ul class="desktop">
      {#each entries as entry}
        <li
          aria-current={$page.url.pathname === entry.url ? "page" : undefined}
        >
          <a href={entry.url}>{entry.name}</a>
        </li>
      {/each}
    </ul>
    <ul class="mobile" style="flex-direction: column; ">
      {#if entries.find((e) => e.url === $page.url.pathname)}
        <li aria-current="page">
          <a href="/"
            >{entries.find((e) => e.url === $page.url.pathname).name}</a
          >
        </li>
      {:else}
        <li aria-current="page">
          <a href="/">{$page.url.pathname}</a>
        </li>
      {/if}
      {#if menue.open}
        {#each entries.filter((e) => e.url !== $page.url.pathname) as entry}
          <li>
            <a href={entry.url}>{entry.name}</a>
          </li>
        {/each}
      {/if}
    </ul>
  </nav>

  <div class="corner">
    <div class="mobile" style="height: 100%;">
      <SvgButton
        src={menue.src}
        color="light"
        on:click={() => (menue.open = !menue.open)}
      />
    </div>
  </div>
</header>

<style lang="scss">
  @use "$lib/settings.scss";
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
    min-height: 3em;
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    background-size: contain;
  }

  li {
    position: relative;
    height: 100%;
    margin: 1em 0.5em;
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

  @media (min-width: settings.$threshold-mobile) {
    .mobile {
      display: none;
    }
  }
  @media (max-width: settings.$threshold-mobile) {
    .desktop {
      display: none;
    }
  }
</style>
