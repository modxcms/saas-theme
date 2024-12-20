<!doctype html>
<html lang="[[++cultureKey]]">
<head>
    [[SeoSuiteMeta]]
    <base href="[[!++site_url]]" />
    <meta charset="[[++modx_charset]]" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="[[*description]]" />
    <link rel="stylesheet" href="[[++saas.theme_dir]]web/saas.css?lit=[[++saas.lit]]" />
    <link rel="stylesheet" href="[[++fredfaeditor.link]]" />
    <style>
        :root {
            --bs-primary: [[++saas.setting.color_primary]];
            --bs-primary-dark: [[++saas.setting.color_primary:saasDarken]];
            --bs-secondary: [[++saas.setting.color_secondary]];
            --bs-secondary-dark: [[++saas.setting.color_secondary:saasDarken]];
            --bs-success: [[++saas.setting.color_success]];
            --bs-success-dark: [[++saas.setting.color_success:saasDarken]];
            --bs-info: [[++saas.setting.color_info]];
            --bs-info-dark: [[++saas.setting.color_info:saasDarken:saasDarken=`0.1`]];
            --bs-warning: [[++saas.setting.color_warning]];
            --bs-warning-dark: [[++saas.setting.color_warning:saasDarken:saasDarken=`0.1`]];
            --bs-danger: [[++saas.setting.color_danger]];
            --bs-danger-dark: [[++saas.setting.color_danger:saasDarken]];
            --bs-light: [[++saas.setting.color_light]];
            --bs-light-dark: [[++saas.setting.color_light:saasDarken:saasDarken=`0.1`]];
            --bs-dark: [[++saas.setting.color_dark]];
            --bs-dark-dark: [[++saas.setting.color_dark]];
            --bs-primary-rgb: [[++saas.setting.color_primary:saasToRGB]];
            --bs-secondary-rgb: [[++saas.setting.color_secondary:saasToRGB]];
            --bs-success-rgb: [[++saas.setting.color_success:saasToRGB]];
            --bs-info-rgb: [[++saas.setting.color_info:saasToRGB]];
            --bs-warning-rgb: [[++saas.setting.color_warning:saasToRGB]];
            --bs-danger-rgb: [[++saas.setting.color_danger:saasToRGB]];
            --bs-light-rgb: [[++saas.setting.color_light:saasToRGB]];
            --bs-dark-rgb: [[++saas.setting.color_dark:saasToRGB]];
            --bs-body-color: [[++saas.setting.color_body_text]];
            --bs-body-color-rgb: [[++saas.setting.color_body_text:saasToRGB]];
            --bs-body-bg: [[++saas.setting.color_body_bg]];
            --bs-body-bg-rgb: [[++saas.setting.color_body_bg:saasToRGB]];
            --bs-heading-color: [[++saas.setting.color_heading]];
            --bs-link-color: [[++saas.setting.color_link]];
            --bs-link-color-rgb: [[++saas.setting.color_link:saasToRGB]];
            --bs-link-hover-color: [[++saas.setting.color_link_hover]];
            --bs-link-hover-color-rgb: [[++saas.setting.color_link_hover:saasToRGB]];
            --bs-font-sans-serif: [[++saas.setting.font_sans]];
            --bs-font-serif: [[++saas.setting.font_serif]];
            --bs-font-monospace: [[++saas.setting.font_monospace]];
            --bs-border-radius: [[++saas.setting.border_radius]];
            --bs-border-radius-lg: [[++saas.setting.border_radius]];
        }
        .pagination {
            --bs-pagination-active-bg: var(--bs-primary);
            --bs-pagination-active-border-color: var(--bs-primary);
        }
    </style>
    [[$saas.custom.header-scripts]]
</head>
<body>