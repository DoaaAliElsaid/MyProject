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

      <nav aria-label="Page navigation example" dir="rtl">
        <ul class="pagination justify-content-center mt-4 pe-0">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
@include('footer')
