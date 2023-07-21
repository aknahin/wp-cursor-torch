# WP-Cursor-Torch

## Description

WP-Cursor-Torch is a straightforward WordPress code snippet that adds an engaging "torchlight" effect to your WordPress website. This effect crafts a spotlight-like gradient circle around the user's cursor when it hovers over a designated area, enhancing the user interactivity and aesthetic appeal of your site.

The effect is achieved using a blend of CSS for styling and jQuery for capturing the mouse's movement and position.

## Installation

To apply this code to your website, you need to add it to your `functions.php` file or use any PHP snippet plugin. Here's how you can do it:

1. Copy the code from the repository.
2. Open your WordPress dashboard and navigate to Appearance > Theme Editor.
3. On the right side of the page, click on the `functions.php` file to open it.
4. Paste the copied code at the bottom of your `functions.php` file and click Update File to save the changes.

Alternatively, you can use a PHP snippets plugin like "Code Snippets". Just paste the copied code into a new snippet and activate it.

## Usage

To apply the torchlight effect, add the class `torch` to the HTML element(s) where you desire the effect to appear. This could be a section, a div, or any other container element.

Example:

```html
<div class="torch">
    <!-- Your content here -->
</div>
```

## Customization

The color, size, and fade of the torchlight effect can be modified in the CSS. For instance:

```css
.torch::after {
    ...
    background: radial-gradient(circle 150px at var(--x, 0) var(--y, 0), transparent 0%, #3F0000 100%);
    ...
}
```

In this line, `150px` defines the size of the torchlight, `transparent` defines the color at the center of the torchlight, and `#3F0000` defines the color at the edges of the torchlight. 

Feel free to tweak these values to match your preferred design.

## Troubleshooting

If you encounter any issues, ensure:

1. The code has been correctly added to your `functions.php` file or your PHP snippets plugin.
2. The `torch` class is correctly added to the desired elements.

## Contributions

Contributions are always welcome! Feel free to submit a pull request with any changes or improvements.

## License

WP-Cursor-Torch is open-source and available under the MIT license.
