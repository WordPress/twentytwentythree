# Design Specification

This is a reference for the design specifications used in Twenty Twenty-Three.

## Typography

Twenty Twenty-Three uses [fluid typography presets](https://github.com/WordPress/gutenberg/pull/39529). This means each font size can adapt to any screen size.

The sizes below that describe a range, e.g. 14px - 16px, will show the smaller sizes at smaller screen resolutions, and the larger sizes at larger screen resolutions. The presets with only one number, e.g. 28px, are static and will not adapt to the screen size.

## Paragraph Sizes

These sizes are defined in theme.json: `settings.typography.fontSizes`.

| Design | Theme | CSS Variable |
| --------- | ----------- | ------------ |
| 16px | 14px - 16px<br />0.875rem - 1rem | var(--wp--preset--font-size--small) |
| 18px | 16px - 18px<br />1rem - 1.125rem | var(--wp--preset--font-size--medium) |
| 28px | 28px<br />1.75rem | var(--wp--preset--font-size--large) |
| 36px | 36px<br />2.25rem | var(--wp--preset--font-size--x-large) |
| 330px | 64px - 320px<br />4rem - 20rem | var(--wp--preset--font-size--xx-large) |

## Heading Sizes

These sizes are defined in theme.json: `styles.elements.{tag}`.

| Tag | Design | Theme | Font Weight |
| --------- | ----------- | ------------ | ------- |
| h1 | 58px | 58px<br />3.625rem | 400 |
| h2 | 42px - 52px | 42px - 52px<br />2.625rem - 3.25rem | 400 |
| h3 | 36px | 36px<br />2.25rem | 400 |
| h4 | 28px - 30px | 28px - 30px<br />1.75rem - 1.875rem | 400 |
| h5 | 18px | 16px - 18px<br />1rem - 1.125rem | 700 |
| h6 | 18px | 16px - 18px<br />1rem - 1.125rem | 400 |

## Font Families

The theme includes the following font families by default:

| Font Family | CSS Variable |
| ----------- | ------------ |
| System Font | var(--wp--preset--font-family--system-font) |
| Source Serif Pro | var(--wp--preset--font-family--source-serif-pro) |
| DM Sans | var(--wp--preset--font-family--dm-sans) |
| IBM Plex Mono | var(--wp--preset--font-family--ibm-plex-mono) |

These are defined in theme.json: `settings.typography.fontFamilies`.

## Spacing

Twenty Twenty-Three uses [fluid spacing presets](https://github.com/WordPress/gutenberg/pull/41527), to help maintain consistency across the theme at all screen sizes. 

These presets are defined in theme.json: `settings.spacing.spacingSizes`.

| Design | Theme | CSS Variable |
| --------- | ----------- | ------------ |
| 24px - 34px | 24px - 32px<br />1.5rem - 2rem | var(--wp--preset--spacing--30) |
| 30px - 50px | 29px - 48px<br />1.8rem - 3rem | var(--wp--preset--spacing--40) |
| 39px - 104px | 40px - 104px<br />2.5rem - 6.5rem | var(--wp--preset--spacing--50) |
| 60px - 114px | 60px - 112px<br />3.75rem - 7rem | var(--wp--preset--spacing--60) |
| 82px - 129px | 80px - 128px<br />5rem - 8rem | var(--wp--preset--spacing--70) |
| 114px - 176px | 112px - 176px<br />7rem - 11rem | var(--wp--preset--spacing--80) |
