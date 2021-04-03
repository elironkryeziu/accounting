<div class="c-sidebar c-sidebar-dark c-sidebar-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
      <p class="font-weight-bold">EMBELTORE LINA</p>

      
    </div>
    <ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/">
           Home
          </a>
          </li>
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/furnitoret">
          Furnitoret
          </a>
          </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/furnizimet">
        Furnizimet
        </a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/shpenzimet">
        Shpenzimet
        </a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/pijet">
        Pijet
        </a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/investimet">
        Investimet
        </a>
        </li>

          <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link font-weight-bold c-sidebar-nav-link-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
           DIL</a></li>
      
    </ul>
  </div>

  
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>