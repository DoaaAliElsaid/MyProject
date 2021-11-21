@include('header')
  <!-- Section Result -->
  <div class="resultSearch py-4">
    <div class="container" dir="rtl">
      <div class="row">
        <div class="col-md-7">
          <h5 class="text-end pb-2"> عقارات للبيع في مصر</h5>
          <p class="text-end">{{$count}} عقار </p>
        </div>
{{--        <div class="col-md-5">--}}
{{--          <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--              <select class="form-select mb-2">--}}
{{--                <option selected>10</option>--}}
{{--                <option value="1">25</option>--}}
{{--                <option value="2">50</option>--}}
{{--                <option value="3">100</option>--}}
{{--              </select>--}}
{{--            </div>--}}
{{--            <div class="col-lg-8 col-md-6">--}}
{{--              <select class="form-select mb-3">--}}
{{--                <option selected>الأكثر شهرة</option>--}}
{{--                <option value="1">الأقدم</option>--}}
{{--                <option value="2">الأحدث</option>--}}
{{--                <option value="3">السعر المنخفض</option>--}}
{{--                <option value="3">السعر المرتفع</option>--}}
{{--              </select>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
      </div>
        @include('data_table')


    </div>
  </div>

@include('footer')
