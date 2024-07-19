<div class="text-center h3">Berita</div>
    <div class="row mt-3">
        <div class="col-lg-7 col-11 mx-auto">
            <form action="{{ url('berita/')}}"  method="get">
                <div class="d-flex">
                    <input type="text" value="{{ request('search')}}" name="search" class="form-control" style="border-radius: 100px; padding: 20px" placeholder="Ketik kata ..">
                    <button type="submit" class="btn btn-custom px-4" style="border-radius: 100px; margin-left: -30px">Cari</button>
                </div>
            </form>

        </div>
    </div>
