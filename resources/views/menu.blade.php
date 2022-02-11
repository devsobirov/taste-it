@extends('layouts/main')

@section('title')
    Menu
@endsection

@section('main-content')

    <section class="hero-wrap hero-wrap-2" style="background-image:url(images/xbg_5.jpg.pagespeed.ic.k95c5nPtun.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread" id="menu-header">Menu</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Menu <i class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <form class="d-flex">
                    <div class="form-group mr-2">
                        <input type="text" class="form-control"  placeholder="Taom nomi" name="name">
                    </div>
                    <div class="form-group mr-2">
                        <select name="category" id="" class="form-control" >
                            <option value="">Kategoriya tanlang</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>

                <div class="form-group mr-2">
                    <a id="izlash" href="#" class="form-control btn btn-success" style="background: #249460 !important; color: white !important">Izlash</a>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 text-center heading-section ftco-animate"> <span class="subheading">Specialties</span>
                    <h2 class="mb-4">Our Menu</h2> </div>
            </div>
            <div class="row">
                @forelse($categories as $category)
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-wrap">
                                <div class="heading-menu text-center ftco-animate">
                                    <h3>{{ $category->id. ". ".$category->name }}</h3>
                                </div>
                                @forelse($foods->where('category_id', $category->id)->take(5) as $food)
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img img" style="background-image:url({{ $food->image }})"></div>
                                        <div class="text">
                                            <div class="d-flex">
                                                <div class="one-half">
                                                    <h3>{{ $food->name }}</h3> </div>
                                                <div class="one-forth"> <span class="price">$ {{ $food->price }}</span> </div>
                                            </div>
                                            <p><span>{{ $food->recept}}</span></p>
                                        </div>
                                    </div>
                                @empty
                                    <div>Taomlar kiritilmoqda</div>
                                @endforelse
                            </div>
                        </div>
                @empty
                    <div>Menu tayyor emas</div>
                @endforelse
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-wrap-about bg-primary ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                    <form action="menu.html#" class="appointment-form">
                        <h3 class="mb-3">Book your Table</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="name" class="form-control" placeholder="Name"> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email"> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone"> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" class="form-control book_date" placeholder="Check-In"> </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-clock-o"></span></div>
                                        <input type="text" class="form-control book_time" placeholder="Time"> </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Guest</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        let a = 22;
        let b = 88;

        const submitBtn = document.getElementById('izlash');
        let c  = a + b

        submitBtn.addEventListener('click', function (e) {

            fetch("{{ route('food.show', 10) }}")
                .then(response => {
                    console.log(response)
                    return response
                })
                .then(resp => resp.json())
                .then(result => console.log(result))
                .catch(e => console.log(e))
            document.getElementById('menu-header').innerText = "Menu " + c
        })

        //console.log(a+b)
    </script>
@endsection
