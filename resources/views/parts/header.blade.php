@if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth    
      <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Book</a>
      <a class="btn btn-primary" href="{{ url('book/create') }}"  role="button">投稿する</a>
    @else 
          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">ログイン</a>
      @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">アカウント作成</a>
      @endif
    @endif
  </div>
@endif
