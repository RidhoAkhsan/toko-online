<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    @if(Auth::user()->roles == 'ADMIN')
    <li class="nav-item">
      <a class="nav-link " href="{{ route('home') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('dashboard.category.index') }}">
        <i class="bi bi-handbag-fill"></i>
        <span>Category</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('dashboard.product.index') }}">
        <i class="bi bi-newspaper"></i>
        <span>Product</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('dashboard.transaction.index') }}">
        <i class="bi bi-currency-dollar"></i>
        <span>Transaction</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('dashboard.user.index') }}">
        <i class="bi bi-people"></i>
        <span>Users</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('dashboard.my-transaction.index') }}">
        <i class="bi bi-cart"></i>
        <span>My Transaction</span>
      </a>
    </li>

    @else

    <li class="nav-item">
      <a class="nav-link " href="{{ route('home') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('dashboard.my-transaction.index') }}">
        <i class="bi bi-cart"></i>
        <span>My Transaction</span>
      </a>
    </li>

    @endif

  </ul>

</aside>