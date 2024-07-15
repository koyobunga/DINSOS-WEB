<div class="card shadow p-4">
    <div class="h4 mb-3">Berita Populer</div>
    @foreach ($populer as $p)
        <div class="row">
            <div class="col-4 pt-2">
                <img class="img-thumbnail" src="{{ url('img/berita/'.$p->berita->image)}}" alt="">
            </div>
            <div class="col-8 pl-0">
                <a href="{{ url('berita/'.$p->berita->slug)}}" class="text-left" style="font-size: 15px">{{ $p->berita->label }}</a>
                <div class="text-muted small d-flex">
                    <span>Read ({{ $p->jlh }})</span>
                    <span class="ml-auto">{{ $p->berita->created_at->diffForHumans()}}</span>
                </div>
            </div>
        </div>
        <hr class="my-1">
    @endforeach
</div>
