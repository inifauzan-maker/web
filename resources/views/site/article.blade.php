@extends('site.editorial-layout')
@section('content')
@if($preview)<div class="cms-preview" role="status">Pratinjau admin · Halaman ini tidak diindeks.<a href="{{ route('admin.articles.edit',$article) }}">Kembali ke editor →</a></div>@endif
<article class="cms-article"><header class="cms-container cms-article-heading"><nav class="cms-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('home') }}">Beranda</a> / <a href="{{ route('blog') }}">Blog</a> / <span>{{ $article->category }}</span></nav><p class="eyebrow">{{ $article->category }}</p><h1>{{ $article->title }}</h1><p class="cms-lead">{{ $article->excerpt }}</p><div class="cms-byline"><img src="/assets/img/logo.png" width="36" height="36" alt=""><span>Oleh <strong>{{ $article->author_name }}</strong></span>@if($article->published_at)<time datetime="{{ $article->published_at->toAtomString() }}">{{ $article->published_at->timezone('Asia/Jakarta')->format('d M Y') }}</time>@endif<span>{{ $article->readingMinutes() }} menit baca</span><span>Diperbarui {{ $article->updated_at->timezone('Asia/Jakarta')->format('d M Y') }}</span></div></header>
<figure class="cms-container cms-cover"><img src="{{ $article->image }}" alt="{{ $article->image_alt }}" width="1200" height="675" fetchpriority="high"></figure>
<div class="cms-article-body"><div class="cms-prose">
@if($article->summary)<section class="cms-answer" aria-labelledby="summary-heading"><p class="eyebrow">JAWABAN SINGKAT</p><h2 id="summary-heading">Ringkasan</h2><p>{{ $article->summary }}</p></section>@endif
@if($article->key_points)<section class="cms-takeaways"><h2>Poin penting</h2><ul>@foreach(preg_split('/\R/u',$article->key_points,-1,PREG_SPLIT_NO_EMPTY) as $point)<li>{{ $point }}</li>@endforeach</ul></section>@endif
<div>{{ $article->renderedBody() }}</div>
@if($article->faqs)<section class="cms-faq"><h2>Pertanyaan yang sering diajukan</h2>@foreach($article->faqs as $faq)<details><summary>{{ $faq['question'] }}</summary><p>{{ $faq['answer'] }}</p></details>@endforeach</section>@endif
@if($article->sources)<section class="cms-sources"><h2>Sumber & referensi</h2><ul>@foreach($article->sources as $source)<li><a href="{{ $source['url'] }}" rel="noopener noreferrer" target="_blank">{{ $source['label'] }} ↗</a></li>@endforeach</ul></section>@endif
<div class="cms-article-end"><p>Siap memulai perjalanan kreatifmu?</p><a class="btn-primary" href="{{ route('daftar') }}">Temukan program yang tepat →</a></div></div></div></article>
@endsection
