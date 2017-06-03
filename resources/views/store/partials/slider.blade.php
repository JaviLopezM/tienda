
<div id="slider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        @foreach($products as $product)
            @if ($product==$products->last() )
                <div class="item active">
                    <img src="{{$product->image}}" alt="slide1">
                </div>
            @endif
                @if ($product->id == ($products->last()->id -1) )
                    <div class="item">
                        <img src="{{$product->image}}" alt="slide2">
                    </div>
                @endif
                @if ($product->id == ($products->last()->id -2) )
                    <div class="item">
                        <img src="{{$product->image}}" alt="slide3">
                    </div>
                @endif
        @endforeach

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<hr>