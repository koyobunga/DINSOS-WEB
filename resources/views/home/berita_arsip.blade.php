<div class="card shadow p-4 mt-4">
    <div class="h4 mb-3">Arsip</div>
    @foreach ($arsip as $a)
        <a href="{{ url('berita/?bulan='.$a->month.'&tahun='.$a->year)}}" class="d-flex" style="font-size:18px">
            <span>
                {{ $a->month.' '.$a->year }}
            </span>
             <span class="ml-auto">({{$a->data}})</span>
        </a>
        <hr class="my-2">
    @endforeach
</div>
