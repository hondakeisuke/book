@if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block " >
    @auth
      <div class="d-flex justify-content-between">
        <div class="header-box-l">
          <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Book</a>
          <a class="btn btn-primary" href="{{ url('book/create') }}"  role="button">投稿する</a>
        </div>
        <div class="header-box-r">
          <form method="POST" action="{{ route('logout') }}" class="logout">
            @csrf
              <x-jet-dropdown-link href="{{ route('logout') }}"
              onclick="event.preventDefault();
              this.closest('form').submit();" class="btn btn-primary">
              {{ __('Logout') }}
              </x-jet-dropdown-link>
          </form>
        </div>
      </div>
    @else 
      <div class="d-flex justify-content-end">
        <div class="ms-0 left-0 px-2">
          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline btn btn-primary">ログイン</a>
        </div>
        @if (Route::has('register'))
          <div class="ms-0 left-0 px-2">
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline btn btn-primary">アカウント作成</a>
          </div>
        @endif
      </div>  
    @endif
  </div>
@endif
