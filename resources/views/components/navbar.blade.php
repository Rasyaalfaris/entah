<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
<nav class="bg-gradient-to-r from-indigo-700 via-purple-600 to-blue-500 p-4 shadow-lg">
  <div class="container mx-auto flex items-center justify-between">
    <a href="/" class="text-white text-2xl font-extrabold tracking-wide hover:scale-105 transition-transform duration-200">Lazuli</a>
    <div class="hidden md:flex space-x-2">
      <a href="/" class="nav-link">Beranda</a>
      <a href="/tentang" class="nav-link">Tentang Kami</a>
      <a href="/posts" class="nav-link">Blog</a>
      <a href="/kontak" class="nav-link">Kontak</a>
      @auth
      <form action="{{ route('logout') }}" method="post">
        @csrf
      <button type="submit" class="nav-link">Logout</button>
      </form>
      @else
          <a href="/login" class="nav-link">Login</a>
      @endauth
    
    </div>
    <div class="md:hidden">
      <button id="mobile-menu-button" class="text-white focus:outline-none">
        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
  </div>
  <div class="md:hidden mt-2 transition-all duration-300 ease-in-out origin-top scale-y-0 opacity-0" id="mobile-menu">
    <a href="/" class="mobile-nav-link">Beranda</a>
    <a href="/tentang" class="mobile-nav-link">Tentang Kami</a>
    <a href="/posts" class="mobile-nav-link">Blog</a>
    <a href="/kontak" class="mobile-nav-link">Kontak</a>
    @guest
      <a href="/login" class="mobile-nav-link">login</a>
    @endguest
    @auth
      <a href="/login" class="mobile-nav-link">logout</a>
    @endauth
  </div>
</nav>
<style>
  .nav-link {
    @apply text-gray-100 hover:bg-white/10 hover:text-yellow-300 px-4 py-2 rounded-lg text-base font-semibold transition-colors duration-200;
  }
  .nav-link.active {
    @apply bg-white/20 text-yellow-300;
  }
  .mobile-nav-link {
    @apply block text-gray-100 hover:bg-white/10 hover:text-yellow-300 px-4 py-2 rounded-lg text-lg font-semibold transition-colors duration-200;
  }
</style>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', function() {
      menu.classList.toggle('scale-y-0');
      menu.classList.toggle('opacity-0');
      menu.classList.toggle('scale-y-100');
      menu.classList.toggle('opacity-100');
    });

    // Highlight active link (simple client-side, for demo)
    const links = document.querySelectorAll('.nav-link, .mobile-nav-link');
    links.forEach(link => {
      if (link.href === window.location.href) {
        link.classList.add('active');
      }
    });
  });
</script>