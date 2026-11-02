# dance

Theme files for [dance.sharlai.com](https://dance.sharlai.com/). This repository
is not a full WordPress install.

## Do not git-deploy over live WordPress

The Hostinger `public_html` for dance is a complete WordPress site: core,
`wp-config.php`, the database connection, plugins, uploads, and the active
theme. This repo is only the custom theme (plus this README).

- Do **not** point Hostinger git deploy at this repository until the owner
  confirms a theme-only copy.
- Do **not** overwrite `wp-config.php`, `wp-admin`, `wp-includes`, `wp-content/uploads`,
  or plugins.
- Do **not** wipe `public_html` and clone this repo in its place.

`digital-studio` / digital.sharlai.com is a different site. Do not mix the two.

## Copy the theme into existing WordPress

1. Copy `wp-content/themes/mariia-sharlai/` into the live dance WordPress tree:
   `public_html/wp-content/themes/mariia-sharlai/`.
2. In wp-admin: Appearance → Themes → activate **Mariia Sharlai**.
3. Keep Contact Form 7. The course templates reuse the existing forms:
   Mini `1029`, Kids `687`, K-Pop `1031`.
4. Rank Math titles and the homepage LocalBusiness graph can stay as they are.
5. Drop photos into `wp-content/themes/mariia-sharlai/assets/photos/` using the
   slot names in that folder's README. Until then the pages show placeholders.
6. Optional: set the Mini / Kids / K-Pop pages to the matching page templates
   if the slugs are not `mini-dance`, `commercial-dance-for-kids`, and
   `k-pop-course`.

The English homepage uses `front-page.php`. Finnish `home-suomi` is left on the
generic page template so this theme does not replace it with English copy.

Elementor is not used to build these four pages. FAQ, news, privacy, terms, and
Finnish pages are unchanged in this step.

## Logo

The wordmark is **Mariia Sharlai**. Do not put DanceDaily in the logo.
DanceDaily is the studio name in the address only.
