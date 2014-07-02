#Estimated Read Time

An "estimated read time" [Twig](http://twig.sensiolabs.org/) filter for [Craft CMS](http://buildwithcraft.com/). This can be added to any field, but it was designed with the rich text (Redactor) field in mind

This plugin counts the words in a rich text field and returns the length of time it will take to read based on 200 words per minute.

## Installation

1. Move `readtime` directory to `craft/plugins` directory
2. Install the plugin under **Craft Admin &rsaquo; Settings &rsaquo; Plugins**

## Params

<table>
<thead>
<tr>
<th>Param</th>
<th>Default</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>suffix (string)</td>
<td>minute read</td>
<td>Appended to returned number of minutes</td>
</tr>
</tbody>
</table>

## Usage

```
{{ entry.richTextField|readtime }}
```
Use without the suffix paramter will return "**X minute read**"

```
{{ entry.richTextField|readtime(suffix='minutes to read') }}
```
Use with the suffix parameter will return "**X minutes to read**"


## Feedback?

Contact me on Twitter: [@ryanshrum](https://twitter.com/ryanshrum) or [@ehousestudio](https://twitter.com/ehousestudio)


## License

This work is licenced under the MIT license.