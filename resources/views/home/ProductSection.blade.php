<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{ route('product_details', ['id' => $product->id]) }}" class="option1">
                                    Show details
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img style="width:100%;height:100% ;border-radius: 12px "
                                src="/product/{{ $product->image }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{ $product->title }}
                            </h5>
                            @if ($product->descount_price != null)
                                <h6 style="text-decoration: line-through">
                                    {{ $product->price }}
                                </h6>
                            @elseif ($product->descount_price == null)
                                <h6 style="color: red">
                                    {{ $product->price }}
                                </h6>
                            @endif

                            @if ($product->descount_price != null)
                                <h6 style="color: red">
                                    {{ $product->descount_price }}
                                </h6>
                            @endif


                        </div>

                    </div>
                </div>
            @endforeach

            {{-- {!! $products->withQueryString()->links('pagination::bootstrap-5') !!} --}}
            {{-- {!! $products->appends(Request::all())->links() !!} --}}
            <div style="margin: auto;padding-top:30px;font-size:24px ">
                {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
            </div>


        </div>

        <div class="btn-box">
            <a href="">
                View All products
            </a>
        </div>
    </div>
</section>
