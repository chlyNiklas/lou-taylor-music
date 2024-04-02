# [Lou Taylor Music](https://lou-taylor.ch/)

## About

This is a website for Lou Taylor a Jazz Sing and Songwriter based in the canton of Bern.

## Features

### "Demnächst"-section 
For ease of use, the upcoming section on the Homepage is loaded through a markdown file so
that they can be changed easily while in production.
The file is located at */etc/upcoming.md*.

### Gallery

The images displayed in the gallery are also configured inside the *etc* (editable text configurations) directory.
Inside the file *gallery.json* path and alt text can be specified.

### Contact Form

Contact form actualy works!
It sends an email to Lou.

``` json
[
  {
    "src": "/assets/caffewalz.jpeg",
    "alt": "Songcover zu meiner Single “Café Waltz“"
  }
]
```

## Developing


```bash
npm run dev
```

## Building

To create a production version of your app:

```bash
npm run build
```

The outputs in the build directory are ready to be put on to a static server.
