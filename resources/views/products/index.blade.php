@extends("layouts.app")
@section("content")

    {{-- start home section  --}}
    <div class="home">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/profile1.jpg')}}" class="d-block w-100" alt="..." >
                <div class="carousel-caption">
                  <h5>Black Firday</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere obcaecati officiis sit odio, veritatis vel! Voluptatem odio quibusdam nobis aliquam ad sequi. Tempora recusandae veritatis earum! Eveniet vitae iure maiores.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/profile2.jpeg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Black Firday</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere obcaecati officiis sit odio, veritatis vel! Voluptatem odio quibusdam nobis aliquam ad sequi. Tempora recusandae veritatis earum! Eveniet vitae iure maiores.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/profile3.jpeg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Black Firday</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere obcaecati officiis sit odio, veritatis vel! Voluptatem odio quibusdam nobis aliquam ad sequi. Tempora recusandae veritatis earum! Eveniet vitae iure maiores.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
     {{-- end home section  --}}

     {{-- start second section  --}}
     <section class="second" style="background-color: #F7F8F1">
      <div class="container-fluid mt-5">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-4" id="over">
              <div class="overtext">Mac</div>
              <img src="{{asset('img/computer2.jpg')}}" alt="" style="width:350px;" class="mt-2">
            </div>
            <div class="col-md-4" id="over">
              <div class="overtext">Window</div>
              <img src="{{asset('img/computer1.jpg')}}" alt="" style="width: 350px" class="mt-2">
            </div>
            <div class="col-md-4" id="over">
              <div class="overtext">Linux</div>
              <img src="{{asset('img/computer3.jpg')}}" alt="" style="width:350px" class="mt-2">
            </div>
          </div>
        </div>
      </div>
     </section>
     {{-- end second section  --}}

     {{-- start third section  --}}
     <section class="third">
        <div class="container-fluid mt-5">
          <div class="container">
            <div class="row">
              <div class="col-md-5 col-lg-5" id="avif">
                <div class="leno">Accessories</div>
                <img src="{{asset('image/pro.avif')}}" alt="" width="300px" height="550px" class="onei">

              </div>
              <div class="col-md-6 col-lg-6">
                 <div class="mt-5">
                    <ul class="d-flex gap-3 justify-content-center align-items-center p-3">
                      <li><a href="#" class="active text-center" style="font-size: 30px">Accessories</a></li>
                    </ul> 
            {{-- start carousel item  --}}
          <div class="d-flex justify-content-center align-items-center move mt-4">
            <div class="owl-carousel owl-theme">
              @foreach ($product as $product )
                <div class="item text-center img-container">
                 <img src="{{asset('image/pre4.avif')}}" alt="" class="mb-3"> 
                <div class="img-content p-3">
                  <img src="{{asset('image/svg.svg')}}" alt="">
                  <button>View</button>
                  <img src="{{asset('image/loop.svg')}}" alt="">
               </div>
                  <p>{{$product->product_description}}</p>
                  <h4>{{$product->product_name}}</h4>
                  <h6>$ {{$product->price}}</h6>
                </div>
            <div class="item text-center img-container">
                   <img src="{{asset('image/pre8.avif')}}" alt="" class="mb-3"> 
                   <div class="img-content p-3">
                    <img src="{{asset('image/svg.svg')}}" alt="">
                    <button>View</button>
                    <img src="{{asset('image/loop.svg')}}" alt="">
                 </div>
                  <p>{{$product->product_description}}</p>
                  <h4>{{$product->product_name}}</h4>
                  <h6>$ {{$product->price}}</h6>
                </div>
              <div class="item text-center img-container">
                <img src="{{asset('image/pre9.avif')}}" alt="" width="400px" class="mb-3">
                <div class="img-content p-3">
                  <img src="{{asset('image/svg.svg')}}" alt="">
                  <button>View</button>
                  <img src="{{asset('image/loop.svg')}}" alt="">
               </div>
                <p>{{$product->product_description}}</p>
                <h4>{{$product->product_name}}</h4>
                <h6>$ {{$product->price}}</h6>
              </div>  
              @endforeach
            </div>
           </div>
        
            {{-- start carousel item  --}}
                 </div>
              </div>
            </div>
          </div>
        </div>
     </section>
     {{-- end third section  --}}

     {{-- start fourth section  --}}
     <section class="four">
      <div class="container-fluid">
       <div class="container">
          <div class="row">
            <div class="col-md-6  mt-5 text-center mt-5 mb-5">
              <h3>Deal Of The Work</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur, nostrum minima aut laudantium ad voluptatem vero facilis molestias error quisquam!</p>
              <h5>$35.00 <span> / HanBag</span></h5>
              <button>Shop Now</button>
            </div>
            <div class="col-md-6 mt-5 text-center mb-5">
              <img src="{{asset('image/product-4.png')}}" alt="" class="text-center">
            </div>
          </div>
       </div>
      </div>
     </section>
     {{-- end fourth section  --}}

     {{-- start five section  --}}
      <section class="third mb-5">
        <div class="container-fluid mt-5">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-lg-7">
                <div class="mt-5">
                  <ul class="d-flex gap-3 justify-content-center align-items-center p-3">
                    <li><a href="#" class="active text-center" style="font-size: 30px">Accessories</a></li>
                  </ul>

                  {{-- start carousel slide  --}}
                  <div class="d-flex justify-content-center align-items-center move mt-4">
                    <div class="owl-carousel owl-theme">
                      @foreach ($product as $product )
                        <div class="item text-center img-container">
                         <img src="{{asset('image/pre4.avif')}}" alt="" class="mb-3"> 
                        <div class="img-content p-3">
                          <img src="{{asset('image/svg.svg')}}" alt="">
                          <button>View</button>
                          <img src="{{asset('image/loop.svg')}}" alt="">
                       </div>
                          <p>Dark</p>
                          <h4>Dell</h4>
                          <h6>$35.00</h6>
                        </div>
                    <div class="item text-center img-container">
                           <img src="{{asset('image/pre5.avif')}}" alt="" class="mb-3"> 
                           <div class="img-content p-3">
                            <img src="{{asset('image/svg.svg')}}" alt="">
                            <button>View</button>
                            <img src="{{asset('image/loop.svg')}}" alt="">
                         </div>
                         <p>Grey</p>
                         <h4>Lenovo</h4>
                         <h6>$45.00</h6>
                        </div>
                      <div class="item text-center img-container">
                        <img src="{{asset('image/pre6.avif')}}" alt="" width="400px" class="mb-3">
                        <div class="img-content p-3">
                          <img src="{{asset('image/svg.svg')}}" alt="">
                          <button>View</button>
                          <img src="{{asset('image/loop.svg')}}" alt="">
                       </div>
                       <p>Dark</p>
                       <h4>Acer</h4>
                       <h6>$85.00</h6>
                      </div>  
                      @endforeach
                    </div>
                   </div>
                  {{-- start carousel slide  --}}
                </div>
              </div>
              <div class="col-md-4 mx-4 mt-5" id="avif">
                <img src="{{asset('image/mac.avif')}}" alt="" width="300px" height="550px" class="onet">
              </div>
            </div>
          </div>
        </div>
      </section>
     {{-- end five section  --}}

     <section class="six">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-2 col-md-3 col-sm-6 mx-2">
           <img src="{{asset('image/pre5.avif')}}" alt="" width="200px" height="300">
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 mx-2">
            <img src="{{asset('image/pre4.avif')}}" alt="" width="200px" height="300">
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 mx-2">
            <img src="{{asset('image/pre3.avif')}}" alt="" width="200px" height="300">
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 mx-2">
            <img src="{{asset('image/pre2.avif')}}" alt="" width="200px" height="300">
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 mx-2">
            <img src="{{asset('image/pre1.avif')}}" alt="" width="200px" height="300">
          </div>
         
        </div>
      </div>
     </section>

     <section class="seven mb-5">
      <div class="container-fluid">
        <div class="container mt-5">
          <h2 class="text-center">From the Blog</h2>
          <div class="row mt-5">
            <div class="col-md-4">
              <img src="{{asset('image/meet1.jpg')}}" alt="" width="350px">
              <p class="mt-3">May 10, 2024</p>
              <h4>The Best Street Style From London Fashion Weel</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus labore maiores ab aut, in magnam nostrum dolorum pariatur consectetur quo.</p>
            </div>
            <div class="col-md-4">
              <img src="{{asset('image/meet2.jpg')}}" alt="" width="350px">
              <p class="mt-3">March 6, 2023</p>
              <h4>Vogue's Ultimate Guide To Autumn/Winter 2019</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ab fuga laboriosam tempore id animi repudiandae facere dolorem, voluptatem quasi.</p>
            </div>
            <div class="col-md-4">
              <img src="{{asset('image/meet3.jpg')}}" alt="" width="350px">
              <p class="mt-3">April 20, 2022</p>
              <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt id facilis possimus nam recusandae eveniet ducimus perferendis, odio eos!</p>
            </div>
          </div>

          {{-- start border  --}}
          <div class="row mt-5  d-flex justify-content-center">
            <div class="col-md-4 border p-3">
            <div class="d-flex mt-4" id="border">
              <div><img src="{{asset('image/shipp.svg')}}" alt=""></div>
              <div class="mx-3">
                <h5>FREE SHIPPING</h5>
                <P>For all order $45.00</P>
              </div>
             </div>
            </div>
            <div class="col-md-4 border p-3">
              <div class="d-flex mt-4" id="border">
               <div><img src="{{asset('image/clock.svg')}}" alt=""></div>
               <div class="mx-3">
                <h5>DELIVERY ON TIME</h5>
                <p>If good have problems</p>
               </div>
              </div>
            </div>
            <div class="col-md-4 border p-3">
             <div class="d-flex mt-4" id="border">
             <div><img src="{{asset('image/shipp.svg')}}" alt=""></div>
             <div class="mx-3">
              <h5>SECURE PAYMENTS</h5>
              <p>100% secure payment</p>
             </div>
             </div>
            </div>
          </div>
          {{-- start border  --}}
        </div>
      </div>
     </section>

     <footer>
      <div class="container">
        <div class="row text-white mt-5">
          <div class="col-md-3 mt-5 mb-3">
            <h3 class="mb-5">Fashi</h3>
            <p>Address : Road 119, New York</p>
            <p>Phone : +95 9384873587</p>
            <p>Email : email@gmail.com</p>
            <div class="d-flex gap-2">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-viber"></i>
            </div>
          </div>
          <div class="col-md-3 mt-5">
            <h4 class="mb-5">Information</h4>
            <p>About Us</p>
            <p>CheckOut</p>
            <p>Contact</p>
            <p>Serivius</p>
          </div>
          <div class="col-md-3 mt-5">
            <h4 class="mb-5">My Account</h4>
            <p>My Account</p>
            <p>Contact </p>
            <p>Shopping Cart</p>
            <p>Shop</p>
          </div>
          <div class="col-md-3 mt-5 mb-5">
            <h4 class="mb-5">Join Our NewSletter Now</h4>
            <p>Get E-mail updates about our latest shop and special offers.</p>
            <div class="d-flex" id="email">
              <button class="boxone">Enter You Email</button>
              <button class="boxtwo">Subscribe</button>
            </div>
          </div>
          <hr>
          <div class="row mb-5 mt-3" id="copy">
            <div class="col-md-12 text-center">Copyright ©2024 All rights reserved | This template is made with Ahkara</div>
          </div>
          </div>
        </div>
     </div>
    </div>
   </div>
 </div>
     </footer>
     

@endsection