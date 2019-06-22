@extends('layouts.master')
@section('title', '已結標拍賣') <!-- 單行記錄 -->

@section('css')
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" ></script>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">
@endsection

@section('content')       <!-- 多行記錄，後面要加endsection -->
@include('layouts.left_button')

<div class="container fix_content">
    <div class="row">
      <div class="col-lg-12">

        <form role="form" action="{{ route('coin.make') }}" method="post">
        @csrf
            <div class="donate-now row margin-top-100 justify-content-center" style="padding-left:0px;">

                <div class="try-5" id="5ppp">
                    <input type="radio" id="5p" name="coin" value="5" />
                    <label class="label-5" for="5p">5</label>
                </div>
                <div class="try-10">
                    <input type="radio" id="10p" name="coin" value="10" />
                    <label class="label-10"  for="10p">10</label>
                </div>
                <div class="try-30">
                    <input type="radio" id="30p" name="coin" value="30" checked="checked" />
                    <label class="label-30"  for="30p">30</label>
                </div>
                <div class="try-50">
                    <input type="radio" id="50p" name="coin" value="50" />
                    <label class="label-50" for="50p">50</label>
                </div>
                <div class="try-100">
                    <input type="radio" id="100p" name="coin" value="100" />
                    <label class="label-100" for="100p">100</label>
                </div>
                <div class="try-200">
                    <input type="radio" id="200p" name="coin" value="200" />
                    <label class="label-200" for="200p">200</label>
                </div>
                                <div class="try-300">
                    <input type="radio" id="300p" name="coin" value="300" />
                    <label class="label-300" for="300p">300</label>
                </div>
            </div>

            @if (Auth::user()->recommand_code == NULL)
            <div class="row col-lg-8 col-md-8  mx-auto margin-top-200">
              <h5 class="col-lg-2 add-coin-invite line-height-35" style="font-size:18px;">邀請碼：</h5>
               <input type="text" value="" class="col-lg-4  form-control add-coin-input bg-white" name="code" >
            </div>
            @endif
            <div class="row col-lg-8 col-md-8  mx-auto margin-top-50">
              <h5 class="col-lg-6 add-coin-invite line-height-35" style="font-size:18px; min-width:500px!important;">應付金額： <span id="coin_price" style="font-size:20px; ">900000元</span></h5>
            </div>
            <div class="row col-lg-8 col-md-8 mx-auto margin-top-150" style="justify-content:center;">
              <input type="submit" value="提交" class="btn btn-danger padding-05-2 font-size-10" >
              <input type="button" value="取消" onclick="window.location='/account'" class="btn btn-danger padding-05-2 font-size-10" >
            </div>
        </form>
    </div>
</div>
</div>

@endsection

@section ('script')
<script >
$("input[name='coin']").click(function (){
    $("#coin_price").html( $(this).val()*30000 + '元' );
    //console.log($(this).val());
  });
</script>
@endsection
