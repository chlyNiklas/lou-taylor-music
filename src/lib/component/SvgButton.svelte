<script lang="ts">
  export let src: string;
  export let color: "dark" | "light" = "dark";
  $: isSvg = !!src.endsWith(".svg"); // we use $: because you may dynamically change the src so the component needs to be reactive. if you are sure that it won't be changed it will be great to use instead `const`
  $: svgRoute = isSvg ? src.replace(".svg", ".svg?raw") : null; // you can also do `${src}?raw`
</script>

<button on:click class:dark={color === "dark"} class:light={color === "light"}>
  {#if isSvg && svgRoute != null}
    {#await import(svgRoute)}
      <div>loading...</div>
    {:then value}
      {@html value.default} <!-- the svg code will be inject here -->
    {/await}
  {/if}
</button>

<style lang="scss">
  @use "$lib/settings.scss";
  button {
    display: flex;
    align-items: center;
    justify-content: center;

    height: 100%;

    background-color: #0000;
    border: 0;
    padding: settings.$margin-small;
  }
  .dark {
    fill: settings.$color-dark-0;
  }
  .light {
    fill: settings.$color-light-0;
  }
</style>
