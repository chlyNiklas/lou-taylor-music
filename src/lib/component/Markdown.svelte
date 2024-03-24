<script lang="ts">
  import { Marked, Renderer } from "@ts-stack/markdown";
  import {onMount } from "svelte";
  import Image from "./Image.svelte";

  Marked.setOptions({
    renderer: new Renderer(),
    gfm: true,
    tables: true,
    breaks: false,
    pedantic: false,
    sanitize: false,
    smartLists: true,
    smartypants: false,
  });
  export let src: string = "";
  export let leftRightStyling: boolean = false;


  let content: Element[] = [];

  onMount(async () => {
    const DOM_PARSER = new DOMParser();
    const markdown = await (await fetch(src)).text();
    const parsedMarkdown = DOM_PARSER.parseFromString(
      Marked.parse(markdown ? markdown : "__nothing to see here__"),
      "text/html",
    );
    content = [...parsedMarkdown.body.children];
  });
</script>

<div class="markdown" class:content={leftRightStyling}>
{#if content != null}
    {#each content as element, i}
      <article class:right={i % 2 === 1 && leftRightStyling} class:left={i % 2 === 0 && leftRightStyling}>
      {#if element.firstChild != null && element.firstChild.nodeName == "IMG"}
        <Image src={element.firstChild.src} alt={element.firstChild.alt}/>
      {:else}
        {@html element.outerHTML}
      {/if}
      </article>
    {/each}
  {/if}
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
