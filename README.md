#Estimated Read Time

An "estimated read time" [Twig](http://twig.sensiolabs.org/) filter for [Craft CMS](http://buildwithcraft.com/). This can be added to any field, but it was designed with the rich text (Redactor) field in mind

This plugin counts the words in a rich text field and returns the length of time it will take to read based on 200 words per minute.

## Installation

1. Upload this directory to `craft/plugins/readtime`
2. Enable the plugin under Craft Admin > Settings > Plugins

## Params

- Suffix (string): Applied to returned number of minutes (**Default:** 'minute read')

## Usage

```
{{ entry.richTextField|readtime }}

{{ entry.richTextField|readtime(suffix='minutes to read') }}
```

## License

This work is licenced under the MIT license.

## Feedback?

Contact me on Twitter: [@ryanshrum](https://twitter.com/ryanshrum) or [@ehousestudio](https://twitter.com/ehousestudio)

All questions, comments, and suggestions are welcome!