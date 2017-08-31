@extends ('template')

@section ('content')

  <div class="Information-title">
        <h3>SHOPING CART</h3>
      </div>

      <div class="Free-ship">
        <h2>You are <strong>$15</strong> away from free standard shipping.</h2>
        <div class="Shipping-block">
          <div class="Full-meter"></div>
        </div>
      </div>

      <div class="Cart-content">
        <div class="Cart-display">
          <div class="Cart-head">
            <div class="Descript-cart-head">ITEM</div>
            <div class="Quantity-cart-head">QTY</div>
            <div class="Price-cart-head">PRICE</div>
          </div>
          <!-- CART ITEMS -->
          <div class="Cart-item">
            <div class="Closing-cart-item"><a href="">x</a></div>
            <div class="Description-cart-item">
              <figure>
                <img src="{{asset('assets/images/Images/Thumbs/Item1.jpg')}}" alt="">
              </figure>
              <div class="Description-cart-box">
                <h2 class="DCart-name">SOCALBAE™ BANDEAU TOP</h2>
                <p class="DCart-size"> Size: <span>S/M</span></p>
              </div>
            </div>
            <div class="Quantity-cart-item">
              <input type="number" step="1" value="1" min="0" max="50">
              <select name="" id="Size">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
              </select>
            </div>
            <div class="Price-cart-item">
              <strong>$48.00</strong>
            </div>
          </div>
          <div class="Cart-item">
            <div class="Closing-cart-item"><a href="">x</a></div>
            <div class="Description-cart-item">
              <figure>
                <img src="{{asset('assets/images/Images/Thumbs/Item1.jpg')}}" alt="">
              </figure>
              <div class="Description-cart-box">
                <h2 class="DCart-name">SOCALBAE™ BANDEAU TOP</h2>
                <p class="DCart-size"> Size: <span>S/M</span></p>
              </div>
            </div>
            <div class="Quantity-cart-item">
              <input type="number" step="1" value="1" min="0" max="50">
              <select name="" id="Size">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
              </select>
            </div>
            <div class="Price-cart-item">
              <strong>$48.00</strong>
            </div>
          </div>
          <div class="Cart-item">
            <div class="Closing-cart-item"><a href="">x</a></div>
            <div class="Description-cart-item">
              <figure>
                <img src="{{asset('assets/images/Images/Thumbs/Item1.jpg')}}" alt="">
              </figure>
              <div class="Description-cart-box">
                <h2 class="DCart-name">SOCALBAE™ BANDEAU TOP</h2>
                <p class="DCart-size"> Size: <span>S/M</span></p>
              </div>
            </div>
            <div class="Quantity-cart-item">
              <input type="number" step="1" value="1" min="0" max="50">
              <select name="" id="Size">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
              </select>
            </div>
            <div class="Price-cart-item">
              <strong>$48.00</strong>
            </div>
          </div>

          <div class="Cart-total">
            <p>Subtotal<strong>$96.00</strong></p>
            <button type="button" id="Check">CHECKOUT</button>
            <p>Shipping and promotions calculated at the last step of the checkout.</p>
          </div>
        </div>
      </div>


@stop