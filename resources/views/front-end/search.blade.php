@extends('front-end.layouts.master')

@section('title')
    Tìm kiếm
@endsection

@section('content')
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Tìm Kiếm</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm Thấy {{count($product)}} Sản Phẩm</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach($product as $new)
                                    <div class="col-sm-3" style="margin-top:50px">
                                        <div class="single-item">
                                            @if($new->promotion_price!=0)
                                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                            @endif
                                            <div class="single-item-header">
                                                <a href=""><img src="images/front-end/product/{{$new->avatar}}" height="250px" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title" style="font-size:13px;font-weight:bold">{{$new->name}}</p>
                                                <p class="single-item-price" style="font-size:16px" >
                                                    @if($new->promotion_price==0)
                                                        <span class="flash-sale">{{number_format($new->unit_price)}} đồng</span>
                                                    @else
                                                        <span class="flash-del">{{number_format($new->unit_price)}} đồng</span>
                                                        <span class="flash-sale">{{number_format($new->promotion_price)}} đồng</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('AddToCart',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('DetailProduct',$new->id)}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div style="text-align: center;">{{ $product->links() }}</div>
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
@endsection