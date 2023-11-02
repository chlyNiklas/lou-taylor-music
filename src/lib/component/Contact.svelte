<script lang="ts">
  export const to: string = "contact@lou-taylor.ch";
  type Email = {
    from: string;
    to: string;
    subject: string;
    message: string;
  };

  let errors: string[] = [];
  let isFormSubmitted: boolean = false;

  let form: Email = {
    from: "",
    to: to,
    subject: "",
    message: "",
  };

  const validateForm = (): boolean => {
    errors = [];

    if (!form.from.trim()) {
      errors.push("Email is required");
    }

    if (!form.subject.trim()) {
      errors.push("Subject is required");
    }

    if (!form.message.trim()) {
      errors.push("Message is required");
    }

    return errors.length === 0;
  };

  const handleSubmit = () => {
    if (validateForm()) {
      console.log("Form submitted:", form);

      form = {
        from: "",
        to: "contact@lou-taylor.ch",
        subject: "",
        message: "",
      };
      isFormSubmitted = true;
    }
  };
</script>

{#if !isFormSubmitted}
  <form on:submit|preventDefault={handleSubmit}>
    <label for="from">Your Email:</label>
    <input type="email" id="from" bind:value={form.from} />

    <label for="subject">Subject:</label>
    <input type="text" id="subject" bind:value={form.subject} />

    <label for="message">Message:</label>
    <textarea id="message" bind:value={form.message} />

    {#if errors.length > 0}
      <ul>
        {#each errors as error (error)}
          <li>{error}</li>
        {/each}
      </ul>
    {/if}

    <button type="submit">Submit</button>
  </form>
{:else}
  <p>Form submitted successfully!</p>
{/if}

<style lang="scss">
  @use "$lib/style/settings.scss";
  form {
    display: grid;
    gap: settings.$margin-small;
    margin: settings.$margin-big;

    width: 75%;
    min-width: 200px;
    max-width: 350px;

    input,
    textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid settings.$color-bg-2;
      border-radius: settings.$margin-small;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      color: settings.$color-accent-error;
      font-weight: 500;

      li {
        margin-bottom: 5px;
      }
    }

    button {
      display: block;

      margin: 0 auto;
      padding: settings.$margin-small settings.$margin-big;

      background-color: settings.$color-accent-strong;
      color: white;
      border: none;
      border-radius: settings.$margin-small;
      cursor: pointer;

      &:hover {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }
      &:active,
      &:disabled {
        background-color: settings.$color-accent-weak;
      }
    }
  }

  p {
    color: #4caf50;
    font-weight: bold;
  }
</style>
