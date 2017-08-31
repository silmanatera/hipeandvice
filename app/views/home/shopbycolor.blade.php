@extends ('template')

@section ('content')

  <div class="Slider-Shop"> </div>
      
      <div class="Information-title">
        <h3>SHOP ALL</h3>
      </div>
      <div class="Shop-filter">
        <ul>
          <li><a href="">All</a></li>
          <li><a href="">Arizona</a></li>
          <li><a href="">Berkeley</a></li>
          <li><a href="">Tulane</a></li>
          <li><a href="">Hype & Vice</a></li>
          <li><a href="">Accesories</a></li>
          <li class="active"><a href="">Shop by Color</a></li>
        </ul>
      </div>
      <div class="dropdown Shop-filter-res">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              All
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Arizona</a>
              <a class="dropdown-item" href="#">Berkeley</a>
              <a class="dropdown-item" href="#">Tulane</a>
              <a class="dropdown-item" href="#">Hype & Vice</a>
              <a class="dropdown-item" href="#">Accesories</a>
              <a class="dropdown-item" href="#">Shop by Color</a>
            </div>
        </div>
        <div class="Shop-filter-2">
          <ul>
            <li class="active"><a href="">SKIRTS</a></li>
            <li><a href="">KNIT TOPS</a></li>
            <li><a href="">TUBE TOPS</a></li>
            <li><a href="">BODYSUITS</a></li>
          </ul>
        </div>



      <div class="Shop-content Shop-Color">
          <div class="Shop-items">
            <a href="">
              <figure><img src="{{asset('assets/images/Images/Item1.jpg')}}" alt="">
              <span class="Shop-item-new">NEW</span></figure>
              <p class="Product-Name">CUTOUT CALIFORNIA</p>
              <p class="Product-Qty">30$</p>
            </a>
          </div>

        <div class="Color-filter">
        <ul>
          <li class="active"><a href="">
            <div class="Color-pick">
              <div class="C-Color"></div>
            </div>
          </a></li>
          <li><a href="">
            <div class="Color-pick">
              <div class="C-Color"></div>
            </div>
          </a></li>
          <li><a href="">
            <div class="Color-pick">
              <div class="C-Color"></div>
            </div>
          </a></li>
          <li><a href="">
            <div class="Color-pick">
              <div class="C-Color"></div>
            </div>
          </a></li>
          <li><a href="">
            <div class="Color-pick">
              <div class="C-Color"></div>
            </div>
          </a></li>
        </ul>
      </div>
      </div>
      

      <nav class="footer2 navbar">
        <h3>STAY IN TOUCH</h3>
        <p>Get the inside scoop on new gear, discounts and more.</p>
        <div class="footer2-list">
          <div class="Foot2-Sect1">
            <form action="">
              <label for="Footemail">Email</label>
                <input type="email" placeholder="Leave your email here" id="Footemail">
                <button type="submit">
                  <i class="icon-submit"></i>
                </button>
            </form>
          </div>
          <div class="Foot2-Sect2">
            <h5>About Us</h5>
            <ul>
              <li><a href="">Our story</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Big / Little perfect combo</a></li>
              <li><a href="">Jobs</a></li>
            </ul>
          </div>
          <div class="Foot2-Sect3">
            <h5>Need help?</h5>
            <ul>
              <li><a href="">FAQ</a></li>
              <li><a href="">Phone</a></li>
              <li><a href="">Email</a></li>
              <li><a href="">Chat</a></li>
            </ul>
          </div>
        </div>
      </nav>


@stop