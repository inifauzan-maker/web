@php
    $article = $article ?? null;
    $pageContent = $pageContent ?? null;
    $preview = $preview ?? false;
    $seoTitle = $article ? ($article->meta_title ?: $article->title.' | Villa Merah') : ($pageContent?->meta_title ?? 'Villa Merah — Bimbel Gambar');
    $seoDescription = $article ? ($article->meta_description ?: $article->excerpt) : ($pageContent?->meta_description ?? 'Bimbingan menggambar seni rupa, desain, dan arsitektur di Villa Merah.');
    $canonical = $article ? route('articles.show', $article->slug) : route($pageContent?->key ?? 'home');
    $seoImage = url($article?->image ?? $pageContent?->image ?? '/assets/img/logo.png');
    $indexable = !$preview && ($article ? $article->isPublished() && $article->is_indexable : ($pageContent?->is_indexable ?? true)) && !request()->hasAny(['q', 'category', 'page']);
    $organization = ['@type'=>'EducationalOrganization','@id'=>route('home').'#organization','name'=>'Bimbel Gambar Villa Merah','url'=>route('home'),'logo'=>['@type'=>'ImageObject','url'=>url('/assets/img/logo.png')],'telephone'=>'+6285720070066','address'=>['@type'=>'PostalAddress','streetAddress'=>'Jl. Anggrek No. 49','addressLocality'=>'Bandung','addressRegion'=>'Jawa Barat','addressCountry'=>'ID']];
    $graph = [$organization, ['@type'=>'WebSite','@id'=>route('home').'#website','url'=>route('home'),'name'=>'Villa Merah','inLanguage'=>'id-ID','publisher'=>['@id'=>route('home').'#organization']]];
    if ($article) {
        $posting = ['@type'=>'BlogPosting','@id'=>$canonical.'#article','headline'=>$article->title,'description'=>$seoDescription,'image'=>[$seoImage],'author'=>['@type'=>$article->author_type,'name'=>$article->author_name],'publisher'=>['@id'=>route('home').'#organization'],'dateModified'=>$article->updated_at?->toAtomString(),'mainEntityOfPage'=>['@type'=>'WebPage','@id'=>$canonical],'articleSection'=>$article->category,'inLanguage'=>'id-ID'];
        if ($article->published_at) { $posting['datePublished'] = $article->published_at->toAtomString(); }
        if ($article->sources) { $posting['citation'] = array_column($article->sources, 'url'); }
        $graph[] = $posting;
        $graph[] = ['@type'=>'BreadcrumbList','itemListElement'=>[['@type'=>'ListItem','position'=>1,'name'=>'Beranda','item'=>route('home')],['@type'=>'ListItem','position'=>2,'name'=>'Blog','item'=>route('blog')],['@type'=>'ListItem','position'=>3,'name'=>$article->title,'item'=>$canonical]]];
    } else {
        $graph[] = ['@type'=>'WebPage','@id'=>$canonical.'#webpage','url'=>$canonical,'name'=>$seoTitle,'description'=>$seoDescription,'inLanguage'=>'id-ID','isPartOf'=>['@id'=>route('home').'#website']];
    }
@endphp
<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<link rel="canonical" href="{{ $canonical }}">
<meta name="robots" content="{{ $indexable ? 'index, follow, max-image-preview:large' : 'noindex, follow' }}">
<meta property="og:type" content="{{ $article ? 'article' : 'website' }}"><meta property="og:site_name" content="Villa Merah"><meta property="og:locale" content="id_ID"><meta property="og:url" content="{{ $canonical }}"><meta property="og:title" content="{{ $seoTitle }}"><meta property="og:description" content="{{ $seoDescription }}"><meta property="og:image" content="{{ $seoImage }}"><meta property="og:image:alt" content="{{ $article?->image_alt ?? $seoTitle }}">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="{{ $seoTitle }}"><meta name="twitter:description" content="{{ $seoDescription }}"><meta name="twitter:image" content="{{ $seoImage }}">
@if($article && $article->published_at)<meta property="article:published_time" content="{{ $article->published_at->toAtomString() }}"><meta property="article:modified_time" content="{{ $article->updated_at->toAtomString() }}">@endif
<script type="application/ld+json">{!! json_encode(['@context'=>'https://schema.org','@graph'=>$graph], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>

