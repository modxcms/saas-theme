# Templates

The SaaS theme ships with four templates:

## SaaS Main

The main template is the default template for the SaaS theme. It includes a header, footer, and main content area.
The main content area is a Fred Dropzone, which allows you to add any number of Fred elements to the page.

## SaaS Blog Post

The blog post template is designed for displaying a single blog post. It includes a header, footer, main content area 
and a sidebar. The main content area is a Fred Dropzone, which allows you to add any number of Fred elements to the page.
The sidebar is an inherited Fred element from the SaaS Blog Home template.

## SaaS Blog Home

The blog home template is designed for displaying a list of blog posts. It includes a header, footer, main content area
and a sidebar. The main content area is a paginated list of blog posts. The sidebar is a Fred element that can be
customized to include any number of Fred elements, and is inherited by the SaaS Blog Post template.

## SaaS Custom Landing

The custom landing template is a blank template that includes a header, footer, and main content area. The main content
area is blank and not controlled by Fred. This template is designed for creating custom landing pages that require 
custom code.

## Template Variables

Template variables can be accessed on Fred Pages in the Settings -> TVs menu. The SaaS theme includes three template variables:

### saas_page_featured_image

_Type:_ Image
_Templates_: SaaS Main, SaaS Blog Post, SaaS Blog Home, SaaS Custom Landing

The saas_page_featured_image template variable is used to set a featured image for a page. The featured image is displayed
in the OG image meta tag and in blog post listings.

### saas_page_featured

_Type:_ Checkbox
_Templates_: SaaS Blog Post

The saas_page_featured template variable is used to mark a page as featured. Featured pages are displayed in the Featured
Blog Posts sidebar element.

### saas_blog_sidebar

_Type:_ Fred Dropzone
_Templates_: SaaS Blog Post, SaaS Blog Home

The saas_blog_sidebar template variable is used to add Fred elements to the sidebar of the SaaS Blog Home and SaaS Blog Post.