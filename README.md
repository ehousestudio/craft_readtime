# Read Time

An estimated read time [Twig](http://twig.sensiolabs.org/) filter for [Craft CMS](http://buildwithcraft.com/). This can be added to any field (that's data is a string), but it was designed with the rich text (Redactor) field in mind

This plugin counts the words in a rich text field and returns the length of time it will take to read based on 200 words per minute.

## Installation

1. Move `readtime` directory to `craft/plugins` directory
2. Install `Read Time` under **Craft Admin &rsaquo; Settings &rsaquo; Plugins**

## Usage

```
{{ entry.richTextField|readtime }}
```

## To-Do
-  Add support for [longform content](http://alistapart.com/blog/post/longform-content-with-craft-matrix) via Matrix field

## Feedback?

Contact me on Twitter: [@ryanshrum](https://twitter.com/ryanshrum) or [@ehousestudio](https://twitter.com/ehousestudio)

## License

This work is licenced under the MIT license.