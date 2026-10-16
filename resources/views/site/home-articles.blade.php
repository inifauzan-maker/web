<div class="cms-article-grid">@forelse($latestArticles as $item)@include('site.article-card',['item'=>$item])@empty<p class="cms-empty">Tulisan dan panduan terbaru segera hadir.</p>@endforelse</div>
