<?php

include_once 'constants.php';
include_once 'translation.php';
include_once 'time.php';

function get_seo_data()
{
    if (is_single()) {
        return get_seo_single_data();
    }

    if (is_category()) {
        return get_seo_category_data();
    }

    return get_seo_index_data();
}

function get_seo_category_data()
{
    global $wp;

    $category = get_queried_object();
    $langData = loadLangInfo();
    $icon = get_template_directory_uri() . '/assets/images/icon.png';
    $socialSrc = get_template_directory_uri() . '/assets/images/social.jpg';
    $actualUrl = home_url(add_query_arg(array(), $wp->request));
    $ampUrl = $actualUrl . '?amp=1';
    $tags = array_map('trim', explode(",", $langData->blog->keywords));

    return [
        'name' => $langData->blog->name,
        'title' => $category->name,
        'description' => substr($category->description, 0, 200),
        'keywords' => $langData->blog->keywords,
        'icon' => $icon,
        'actualUrl' => $actualUrl,
        'ampUrl' => $ampUrl,
        'tags' => $tags,
        'socialSrc' => $socialSrc,
        'updatedTime' => CONST_UPDATED_TIME
    ];
}

function get_seo_single_data()
{
    global $post;
    global $wp;
    $langData = loadLangInfo();
    $icon = get_template_directory_uri() . '/assets/images/icon.png';
    $socialSrc = get_the_post_thumbnail_url(get_the_ID(), "medium");
    $actualUrl = home_url(add_query_arg(array(), $wp->request));
    $ampUrl = $actualUrl . '?amp=1';
    $seo_infos = extract_infos($post->post_excerpt);
    $tags = array_map('trim', explode(",", $seo_infos->keywords));

    return [
        'name' => $langData->blog->name,
        'title' => get_the_title($post->ID),
        'description' => $seo_infos->description,
        'keywords' => $seo_infos->keywords,
        'icon' => $icon,
        'actualUrl' => $actualUrl,
        'ampUrl' => $ampUrl,
        'tags' => $tags,
        'socialSrc' => $socialSrc,
        'updatedTime' => CONST_UPDATED_TIME
    ];
}

function get_seo_index_data()
{
    global $wp;
    $langData = loadLangInfo();
    $icon = get_template_directory_uri() . '/assets/images/icon.png';
    $socialSrc = get_template_directory_uri() . '/assets/images/social.jpg';
    $actualUrl = home_url(add_query_arg(array(), $wp->request));
    $ampUrl = $actualUrl . '?amp=1';
    $tags = array_map('trim', explode(",", $langData->blog->keywords));

    return [
        'name' => $langData->blog->name,
        'title' => $langData->blog->title,
        'description' => $langData->blog->description,
        'keywords' => $langData->blog->keywords,
        'icon' => $icon,
        'actualUrl' => $actualUrl,
        'ampUrl' => $ampUrl,
        'tags' => $tags,
        'socialSrc' => $socialSrc,
        'updatedTime' => CONST_UPDATED_TIME
    ];
}




function seo_generate($post)
{
    global $wp;

    $data = loadLangInfo();
    $seo_infos = extract_infos($post->post_excerpt);

    $title = is_home() ? $data->blog->title : get_the_title($post->ID);
    $default_description = strlen(substr(get_the_excerpt(), 0, 158)) > 0
        ? substr(get_the_excerpt(), 0, 158)
        : $data->blog->description;
    $description = is_home() ?
        $data->blog->description : ($seo_infos->description ?? $default_description);
    $keywords = $seo_infos->keywords ?? $data->blog->keywords;
    $image = get_the_post_thumbnail_url(get_the_ID(), "thumbnail");
    $icon = get_template_directory_uri() . '/assets/images/icon.png';
    $current_url = home_url(add_query_arg(array(), $wp->request));

    if (is_category()) {
        $category = get_queried_object();
        $title = $category->name;
        $description = $category->description;
    }

    return (object)[
        'name' => $data->blog->name,
        'title' => $title,
        'description' => substr($description, 0, 190),
        'keywords' => $keywords,
        'url' => $current_url,
        'amp_url' => $current_url . '?amp=1',
        'image' => $image,
        'updated_at' => get_timestamp($post->post_modified_gmt),
        'icon' => $icon
    ];
}

function seo_basics($seo)
{
    echo <<<EOL
        <title>$seo->title</title>
        <meta name="description" content="$seo->description">
        <meta name="keywords" content="$seo->keywords">
        <link rel="icon" href="$seo->icon">
        <link rel="amphtml" href="$seo->amp_url">        

        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="$seo->title" />
        <meta property="og:description" content="$seo->description" />
        <meta property="og:url" content="$seo->url" />
        <meta property="og:site_name" content="$seo->name" />
        <meta property="og:image" content="$seo->image" />
        <meta property="og:image:secure_url" content="$seo->image" />
        <meta property="og:image:width" content="512">
        <meta property="og:image:height" content="512">
        <meta property="og:updated_time" content="$seo->updated_at" />
        
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="$seo->description" />
        <meta name="twitter:title" content="$seo->title" />
    EOL;
}

function extract_infos($excerpt)
{
    if (empty($excerpt)) {
        return;
    }

    $elements = explode("|", $excerpt);

    $description = isset($elements[0]) ? $elements[0] : null;
    $keywords = isset($elements[1]) ? $elements[1] : null;

    return (object)[
        'description' => $description,
        'keywords' => $keywords
    ];
}
