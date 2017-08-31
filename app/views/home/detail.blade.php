@extends ('template')

@section ('content')

 <div class="Slider-Shop"> </div>
      
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
      

      <div class="Detail-content">
        <div class="Detail-galery">
          <div class="Preview-pic tab-content">
            <div class="tab-pane fade show active" id="Pic-1"><img src="{{asset('assets/images/Images/Thumbs/Item1.jpg')}}" alt=""></div>
            <div class="tab-pane fade" id="Pic-2"><img src="{{asset('assets/images/Images/Thumbs/Item2.jpg')}}" alt=""></div>
            <div class="tab-pane fade" id="Pic-3"><img src="{{asset('assets/images/Images/Thumbs/Item3.jpg')}}" alt=""></div>
            <div class="tab-pane fade" id="Pic-4"><img src="{{asset('assets/images/Images/Thumbs/Item4.jpg')}}" alt=""></div>
            <div class="tab-pane fade" id="Pic-5"><img src="{{asset('assets/images/Images/Thumbs/Item5.jpg')}}" alt=""></div>
          </div>
          <ul class="preview-thumbnail nav nav-tabs">
            <li class="active"><a data-target="#Pic-1" data-toggle="tab" href=""><img src="{{asset('assets/images/Images/Thumbs/Item1.jpg')}}" alt=""></a></li>
            <li><a data-target="#Pic-2" data-toggle="tab" href=""><img src="{{asset('assets/images/Images/Thumbs/Item2.jpg')}}" alt=""></a></li>
            <li><a data-target="#Pic-3" data-toggle="tab" href=""><img src="{{asset('assets/images/Images/Thumbs/Item3.jpg')}}" alt=""></a></li>
            <li><a data-target="#Pic-4" data-toggle="tab" href=""><img src="{{asset('assets/images/Images/Thumbs/Item4.jpg')}}" alt=""></a></li>
            <li><a data-target="#Pic-5" data-toggle="tab" href=""><img src="{{asset('assets/images/Images/Thumbs/Item5.jpg')}}" alt=""></a></li>
          </ul>
        </div>
        <div class="Detail-Specs">
          <h2>SOCALBAE™ BANDEAU TOP</h2>
          <h3>$24.00</h3>
          <p>PERFECT FOR THOSE BABES IN SOUTHERN CALIFORNIA THAT LOVE TO DRESS CUTE FOR TAILGATES. MIX & MATCH IT WITH OUR TAILGATE SKIRTS!</p>
          <p>TAG US ON YOUR CUTE PICS AND USE THE HASHTAG #SOCALBAE</p>
          <div class="Specs-box">
            <form action="">
            <div class="form-item">
              <label for="Size">Size</label>
              <select name="" id="Size">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
              </select>
            </div>
            <div class="form-item">
              <label for="Colors">Colors</label>
              <div class="Specs-colors">
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
            <div class="form-item">
              <label for="Count">Count</label>
              <input type="number" step="1" value="1" min="0" max="50">
            </div>
            </form>
            <div class="Specs-Bnt">
              <button type="button" id="Add">ADD TO CART</button>
              <button type="button" id="Share">SHARE</button>
            </div>
          </div>
        </div>
        <div class="Detail-Descrip">
          <h3>About the fabric</h3>
          <p>COTTON SPANDEX IS SMOOTH, OF MEDIUM THICKNESS AND HAS A BIT OF STRETCH TO FIT EVERYONE. INCLUDES ELASTIC BAND TO CREATE A FLATTERING FIT IN ALL BODY TYPES.</p>
          <p>95% SOFT COTTON, 5% SPANDEX</p>
          <p>SIZE + FIT</p>
          <ul>
            <li>MODEL 5'7 WEARING A S/M</li>
            <li>S/M: Bust-12 inches Length- 6.50 inches</li>
            <li>L: Bust- 14 inches Length-6.75</li>
          </ul>
          <p>The fabric is stretchy so the fit is probably going to be right if you stay with your usual size. However, we recommend L for bustier girls.</p>
        </div>
      </div>



    <!-- Main-Wrapper -->
    </div>
    
    <div class="Floating-cart">
        <a href="">
          <p><i>2</i>items</p>
          <p>48$</p>
        </a>
      </div>


@stop