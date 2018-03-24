@extends('layouts.gamclicks_template')

@section('title', 'Home')

@section('content')
    <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>

  <!-- Skills Section -->
  <div class="w3-container w3-light-grey w3-padding-64">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>Our Skills.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
        tempor incididunt ut labore et dolore.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
        tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="w3-col m6">
        <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
        <div class="w3-grey">
          <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
        <div class="w3-grey">
          <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
        <div class="w3-grey">
          <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pricing Section -->
  <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
    <h3>PRICING</h3>
    <p class="w3-large">Choose a pricing plan that fits your needs.</p>
    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16"><b>10GB</b> Storage</li>
          <li class="w3-padding-16"><b>10</b> Emails</li>
          <li class="w3-padding-16"><b>10</b> Domains</li>
          <li class="w3-padding-16"><b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$ 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
          </li>
        </ul>
      </div>
      <div class="w3-third">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
          <li class="w3-padding-16"><b>25GB</b> Storage</li>
          <li class="w3-padding-16"><b>25</b> Emails</li>
          <li class="w3-padding-16"><b>25</b> Domains</li>
          <li class="w3-padding-16"><b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$ 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
          </li>
        </ul>
      </div>
      <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
          <li class="w3-padding-16"><b>50GB</b> Storage</li>
          <li class="w3-padding-16"><b>50</b> Emails</li>
          <li class="w3-padding-16"><b>50</b> Domains</li>
          <li class="w3-padding-16"><b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$ 50</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h3 class="w3-center">CONTACT</h3>
    <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-half">
        <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chicago, US</p>
        <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
        <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
        <br>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
          <p>
            <button class="w3-button w3-black" type="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
      </div>
      <div class="w3-half">
        <!-- Add Google Maps -->
        <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
      </div>
    </div>
  </div>    
@endsection
