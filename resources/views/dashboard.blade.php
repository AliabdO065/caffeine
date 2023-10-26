<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<div id="spin-container">
<div id="spinner" class="spin-to-win">
  <img src="https://contentservice.mc.reyrey.net/image_v1.0.0/?id=e61fefdc-85d3-5145-9b3a-821b2ad47040&637115173847423178" />
  <div id="spin-arrow"></div>
  <div id="spin-btn"><p>TRY YOUR<br><span style="font-size:36px;font-weight:900">LUCK</span><p></div>
</div>

<!-- btn -->
<div id="si-btn" class="si-offer-inner">
   <a href="#">SCHEDULE THIS SERVICE NOW</a>
</div>
<!-- btn -->
<!-- OFFERS  -->
<div id="lightestBlue" class="spin-offer">
  <div class="spin-title item">FREE Battery Test</div>
  <div class="spin-price item">+ FREE</div>
  <div class="spin-info item">Installation with the purchase of any replacement battery
</div>
  <div class="spin-disc item">Present upon arrival. Hybrid batteries excluded. One per customer. No cash value. No further discounts apply. See dealer for details. Expires 01/15/2020.
</div>
</div>

<div id="green" class="spin-offer">
<!--   <div class="spin-title item">SERVICE OFFER 2</div> -->
  <div class="spin-price item">$15 OFF</div>
  <div class="spin-info item">Any Service of $100 or more</div>
  <div class="spin-disc item">Present upon arrival. One per customer. No cash value. No further discounts apply. See dealer for details. Expires 01/15/2020.</div>
</div>

<div id="gold" class="spin-offer">
<!--   <div class="spin-title item">SERVICE OFFER 3</div> -->
  <div class="spin-price item">10% OFF</div>
  <div class="spin-info item">Any Scheduled Maintenance</div>
  <div class="spin-disc item">Present upon arrival. One per customer. Excludes tires and oil changes. No cash value. Max value $100. No further discounts apply. See dealer for details. Expires 01/15/2020.
</div>
</div>
  
<div id="orange" class="spin-offer">
<!--   <div class="spin-title item">SERVICE OFFER 2</div> -->
  <div class="spin-price item">$15 OFF</div>
  <div class="spin-info item">Any Service of $100 or more</div>
  <div class="spin-disc item">Present upon arrival. One per customer. No cash value. No further discounts apply. See dealer for details. Expires 01/15/2020.</div>
</div>

<div id="red" class="spin-offer">
  <div class="spin-title item">FREE BRAKE INSPECTION</div>
  <div class="spin-price item">+ 10% OFF</div>
  <div class="spin-info item">Any Recommended Brake Service</div>
  <div class="spin-disc item">Present upon arrival. One per customer. No cash value. Max value $100. No further discounts apply. See dealer for details. Expires 01/15/2020.
</div>
</div>

<div id="maroon" class="spin-offer">
<!--   <div class="spin-title item">SERVICE OFFER 2</div> -->
  <div class="spin-price item">$15 OFF</div>
  <div class="spin-info item">Any Service of $100 or more</div>
  <div class="spin-disc item">Present upon arrival. One per customer. No cash value. No further discounts apply. See dealer for details. Expires 01/15/2020.</div>
</div>
  
<div id="darkblue" class="spin-offer">
<!--   <div class="spin-title item">SERVICE OFFER 1</div> -->
  <div class="spin-price item">FREE</div>
  <div class="spin-info item">Tire Fill, Tire Rotation, Multi-Point Inspection, & Fluid Top-Off<br>
With any oil change purchase
</div>
  <div class="spin-disc item">Present upon arrival. One per customer. No cash value. No further discounts apply. See dealer for details. Expires 01/15/2020.
</div>
</div>

<div id="blue" class="spin-offer">
<!--   <div class="spin-title item">SERVICE OFFER 2</div> -->
  <div class="spin-price item">$15 OFF</div>
  <div class="spin-info item">Any Service of $100 or more</div>
  <div class="spin-disc item">Present upon arrival. One per customer. No cash value. No further discounts apply. See dealer for details. Expires 01/15/2020.</div>
</div>
  
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    #spin-container {
  max-width:600px;
  margin:0 auto;
}
.spin-to-win {
  max-width:600px;
}
.spin-to-win img {
  width:100%;
  height:auto;
}

#spinner {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  vertical-align:middle;
}

#spin-btn {
  cursor:pointer;
  background:white;
/*   background-image:url('https://contentservice.mc.reyrey.net/image_v1.0.0/?id=d08f9524-26eb-53be-a6a1-bc8d8e19cc20&637070095483683129'); */
  background-size:100% 100%;
  box-shadow:0 0 15px rgba(0,0,0,.25);
  animation:spinBtn 2s linear infinite;
  border:5px solid transparent;
  text-align:center;
}
#spin-btn p {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin: 0;
  font-family: 'Montserrat', sans-serif;
}

@keyframes spinBtn {
  0% { border:5px solid black; }
  50% { border:5px solid red; }
  100% { border:5px solid black; }
}

#spin-btn, #spin-arrow {
  max-width:180px;
  width:calc(100vw * .3);
  max-height:180px;
  height:calc(100vw * .3);  
  border-radius:50%;
  display:inline-block;
  position:absolute;
}

#spin-arrow {
  transition-timing-function: ease-in-out;
  transition:3s;
}
#spin-arrow:after {
  content:'';
  position:absolute;
  left:2px;
  top:2px;
  width:calc(100vw * .14167);
  max-width:85px;
  height:calc(100vw * .14167);
  max-height:85px;
  background-color:white; 
  box-shadow:-2px -2px 10px rgba(0,0,0,.25);
}

/* btn styles */
#si-btn {
  max-width: 320px;
  background:white;
  color:black;
  text-align:center;
  font-family:sans-serif;
  border-radius:15px;
  margin:0 auto 25px auto;
  padding:0px;
/*   transition:2s; */
  filter:invert(1);
  opacity:0;
}
/* #si-btn:hover {
  background:#e81238;
} */
#si-btn a {
  color:inherit;
  text-decoration:none;
  display:inline-block;
  padding:20px 35px;
}
/* btn styles */

/* OFFER STYLES */
.spin-offer {
  max-width: 600px;
  padding:20px;
/*   border:10px solid lightgray; */
  border-radius:15px;
  text-align:center;
  font-size:24px;
  font-family:sans-serif;
  position:relative;
  display:none;
  vertical-align:middle;
  animation:spin 2s linear forwards;
  color:white;
  box-shadow:10px 10px 10px rgba(0,0,0,.25);
  margin-bottom:30px;
}
@keyframes spin {
  0% { opacity:0; }
  100% { opacity:1; }
}

.spin-offer .item {
  padding:10px;
}

.spin-title {
  
}
.spin-price {
  font-size:60px;
  line-height:60px;
  padding-bottom:0px !important;
}
.spin-info {
  padding-top:0px !important;
}
.spin-disc {
  font-size:12px;
}
</style>

<script>
    var angles = [22.5,67.5,112.5,157.5,202.5,247.5,292.5,337.5]
var colors = ["#2cc5d2","#38c88e","#fab320","#f97903","#ca2231","#79022c","#0a4366","#0a97d0"]
var spinBtn = document.querySelector('#spin-btn')
var spinArrow = document.querySelector('#spin-arrow')
var offerBtn = document.querySelector('#si-btn')
var spinOffer = document.querySelectorAll('.spin-offer')


var urlSpin = (new URL(document.location)).searchParams
// var urlParams = new URLSearchParams("?editors=0010&nlm=sara")
var spinname = urlSpin.get('nlmlp')
if(spinname == null || spinname == "") {
 var spinname = "z"
}
var num = spinname.length > 7 ? Math.floor(spinname.length/8) - 1 : spinname.length;
// console.log(spinname)
// console.log(num)

function spinToWin() { 
  var offer = Math.floor(Math.random()*spinOffer.length)  
    
  spinBtn.style.pointerEvents = "none"
  spinBtn.style.animation = "none"
     
  spinArrow.style.transform = "rotate("+((360*5)+angles[num])+"deg)"
  
  spinOffer[num].style.background = colors[num];  
  
  setTimeout(function() {
    spinOffer[num].style.display = "inline-block";  
    offerBtn.style.opacity = "1";
    offerBtn.style.transition = "1.5s";
  },3000)  
}

spinBtn.addEventListener('click', function(){   
      spinToWin()   
})
</script>