# Advanced Customization

Obviously, the SaaS theme isn't going to be a perfect fit for every project. That's why we've made it easy to customize 
the theme to fit your needs. This guide will walk you through some of the more advanced customization options available 
in the SaaS theme.

## Warning

Do not make changes to the Elements that ship with the SaaS theme. Instead, create new Elements or duplicate existing
Elements and make changes to the duplicates. This will ensure that you can update the theme without losing your changes.

## Custom Styles and Scripts

On first install the SaaS theme creates two blank chunks for you to add your own custom header and footer code. You can 
utilize these chunks to add additional JavaScript or CSS to your site.

To edit these, search the chunks for `saas.custom.footer-scripts` and `saas.custom.header-scripts`.

## Customizing Header or Footer

The SaaS theme ships with a header and footer chunk that should not be edited. However, you can create a new chunk within
the same category ("Header" or "Footer") and assign it using the [Layout group](Theme-Settings.md#layout) in the Theme 
Setting panel.

## Customizing the Blog

The SaaS theme includes a Home and Post template for displaying blog posts. The Templates themselves should not be altered.
However, you can customize their appearance by creating a new chunk in the "Layouts" category and assigning it using the 
[Blog group](Theme-Settings.md#blog) in the Theme Setting panel. Select your newly created chunk from the dropdown to
for either the Home or Article layout.

## Customizing the TinyMCE Editor

The SaaS theme includes a custom TinyMCE configuration that can be customized to fit your needs. To edit the TinyMCE
configuration, navigate to the "Fred" -> "RTE Configs" menu in the MODX Manager. Select the "TinyMCE" configuration
assigned to the SaaS theme and make your changes. These changes will persist between updates to the SaaS theme.