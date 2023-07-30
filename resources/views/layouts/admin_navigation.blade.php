<div class="row mx-0 py-4 justify-content-center">
    <h1 class="main_title text-center my-4">{{ $title }}</h1>
    <div class="col-7">
        <a href="{{ route('admin') }}" class="btn btn-light">管理TOP</a>
        <a href="{{ route('category_list') }}" class="btn btn-light">カテゴリー一覧</a>
        <a href="{{ route('category_create') }}" class="btn btn-light">カテゴリー登録</a>
        <a href="{{ route('product_list') }}" class="btn btn-light">商品一覧</a>
        <a href="{{ route('product_create') }}" class="btn btn-light">商品登録</a>
        <a href="{{ route('order_list') }}" class="btn btn-light">注文一覧</a>
    </div>
</div>
