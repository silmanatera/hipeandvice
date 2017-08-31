@extends ('template')

@section ('content')

  <div class="Slider-Shop"> </div>
      
      <div class="Information-title">
        <h3>SHOP ALL</h3>
      </div>
      <div class="Shop-filter">
        <ul>
          <li class="active"><a href="">All</a></li>
          <li><a href="">Arizona</a></li>
          <li><a href="">Berkeley</a></li>
          <li><a href="">Tulane</a></li>
          <li><a href="">Hype & Vice</a></li>
          <li><a href="">Accesories</a></li>
          <li><a href="">Shop by Color</a></li>
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
      <div class="Shop-content">
        <div class="Shop-items">
          <a href="">
            <figure><img src="{{asset('assets/images/Images/Item1.jpg')}}" alt="">
            <span class="Shop-item-new">NEW</span></figure>
            <p class="Product-Name">CUTOUT CALIFORNIA</p>
            <p class="Product-Qty">30$</p>
          </a>
          <!-- POP UP ITEM DETAILS -->
          <div class="Shop-pop">
            <h5 class="Item-name">CUTOUT CALIFORNIA <i class="Item-price">30$</i></h5>
            <p class="Item-detail">The essential bodysuit for tailgate Szn. Match it with any of your Gameday Skirts.</p>
            <div class="Pop-content">
              <h5>QUANTITY</h5>
              <div class="Pop-qty">
                <button type="button" class="mas">-</button>
                <input class="Qty-input" type="number" step="1" value="1" min="0" max="50">
                <button type="button" class="menos">+</button>
              </div>
              <div class="Pop-Sze">
                <button type="button" class="Sze-btn">S</button>
                <button type="button" class="Sze-btn">M</button>
                <button type="button" class="Sze-btn">L</button>
              </div>
            </div>
            <div class="Pop-foot">
              <h5 class="Available">PRODUCT AVAILABLE</h5>
              <button class="Pop-add-btn" type="button">ADD TO GAMEGEAR</button>
            </div>
          </div>
          <!-- POP UP ITEM DETAILS -->
        </div>
        <div class="Shop-items">
          <a href="">
            <figure><img src="{{asset('assets/images/Images/Item1.jpg')}}" alt="">
            <span class="Shop-item-new">NEW</span></figure>
            <p class="Product-Name">CUTOUT CALIFORNIA</p>
            <p class="Product-Qty">30$</p>
          </a>
          <!-- POP UP ITEM DETAILS -->
          <div class="Shop-pop">
            <h5 class="Item-name">CUTOUT CALIFORNIA <i class="Item-price">30$</i></h5>
            <p class="Item-detail">The essential bodysuit for tailgate Szn. Match it with any of your Gameday Skirts.</p>
            <div class="Pop-content">
              <h5>QUANTITY</h5>
              <div class="Pop-qty">
                <button type="button" class="mas">-</button>
                <input class="Qty-input" type="number" step="1" value="1" min="0" max="50">
                <button type="button" class="menos">+</button>
              </div>
              <div class="Pop-Sze">
                <button type="button" class="Sze-btn">S</button>
                <button type="button" class="Sze-btn">M</button>
                <button type="button" class="Sze-btn">L</button>
              </div>
            </div>
            <div class="Pop-foot">
              <h5 class="Available">PRODUCT AVAILABLE</h5>
              <button class="Pop-add-btn" type="button">ADD TO GAMEGEAR</button>
            </div>
          </div>
          <!-- POP UP ITEM DETAILS -->
        </div>
        <div class="Shop-items">
          <a href="">
            <figure><img src="{{asset('assets/images/Images/Item1.jpg')}}" alt="">
            <span class="Shop-item-out">OUT</span></figure>
            <p class="Product-Name">CUTOUT CALIFORNIA</p>
            <p class="Product-Qty">30$</p>
          </a>
          <!-- POP UP ITEM DETAILS -->
          <div class="Shop-pop">
            <h5 class="Item-name">CUTOUT CALIFORNIA <i class="Item-price">30$</i></h5>
            <p class="Item-detail">The essential bodysuit for tailgate Szn. Match it with any of your Gameday Skirts.</p>
            <div class="Pop-content">
              <h5>QUANTITY</h5>
              <div class="Pop-qty">
                <button type="button" class="mas">-</button>
                <input class="Qty-input" type="number" step="1" value="1" min="0" max="50">
                <button type="button" class="menos">+</button>
              </div>
              <div class="Pop-Sze">
                <button type="button" class="Sze-btn">S</button>
                <button type="button" class="Sze-btn">M</button>
                <button type="button" class="Sze-btn">L</button>
              </div>
            </div>
            <div class="Pop-foot">
              <h5 class="Available">PRODUCT AVAILABLE</h5>
              <button class="Pop-add-btn" type="button">ADD TO GAMEGEAR</button>
            </div>
          </div>
          <!-- POP UP ITEM DETAILS -->
        </div>
        <div class="Shop-items">
          <a href="">
            <figure><img src="{{asset('assets/images/Images/Item1.jpg')}}" alt="">
            <span class="Shop-item-out">OUT</span></figure>
            <p class="Product-Name">CUTOUT CALIFORNIA</p>
            <p class="Product-Qty">30$</p>
          </a>
          <!-- POP UP ITEM DETAILS -->
          <div class="Shop-pop">
            <h5 class="Item-name">CUTOUT CALIFORNIA <i class="Item-price">30$</i></h5>
            <p class="Item-detail">The essential bodysuit for tailgate Szn. Match it with any of your Gameday Skirts.</p>
            <div class="Pop-content">
              <h5>QUANTITY</h5>
              <div class="Pop-qty">
                <button type="button" class="mas">-</button>
                <input class="Qty-input" type="number" step="1" value="1" min="0" max="50">
                <button type="button" class="menos">+</button>
              </div>
              <div class="Pop-Sze">
                <button type="button" class="Sze-btn">S</button>
                <button type="button" class="Sze-btn">M</button>
                <button type="button" class="Sze-btn">L</button>
              </div>
            </div>
            <div class="Pop-foot">
              <h5 class="Available">PRODUCT AVAILABLE</h5>
              <button class="Pop-add-btn" type="button">ADD TO GAMEGEAR</button>
            </div>
          </div>
          <!-- POP UP ITEM DETAILS -->
        </div>
      </div>

@stop