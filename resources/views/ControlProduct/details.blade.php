<x-app-layout>
    <x-slot name="header">
    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-1 lg:px-8">
            <h2 style="font-weight: 900;font-size:30px;color: rgb(0, 0, 0);" class="font-semibold text-xl text-gray-800 leading-tight">
                how the user see <br> <span style="color: rgb(255, 255, 255)" >{{$product->name}}</span>
            </h2>
                    <section class="page-section cntailer-section-productonly" style="">
                            <section class="page-section-productonly">
                                <div class="product-item">
                                    <div class="product-item=title section-heading-productonly"> {{$product->name}} <br> {{$product->category->name}} </div>
                                    <div>   
                                        <img class="product-item-img mx-auto d-flex rounded img-fluid" src="{{asset('images/'.$product->path)}}" alt="drink" style="height: 250px"/>
                                    </div>
                                    <div id="sup-links" class="sup-links">
                                    </div>
                                    <div class="product-item section-heading-productonly">{{$product->price}}</div>
                                    <a href="#" style="background-color: #e6a756;color:black;width:70px;margin-top:12px;padding:10px;
                                        border-radius: 10px;display:block;text-align: center;position: absolute;left: 50%;
                                        transform: translateX(-50%)">details</a>
                                </div>
                            </section>
                    </section>
        </div>
    </div>
    
</x-app-layout>
<style>
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.py-12{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background:#5b3829;
    height:780px;
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
}
.page-section {
    margin-top: 5rem;
    margin-bottom: 5rem;
    }
.page-section-productonly{
    margin-top: 5rem;
    margin-bottom: 5rem;
    border: white solid 10px;
    width: 400px;
    text-align: center;
    color: black;
    border-radius: 50px;
    padding: 20px;margin: 20px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    height: 500px;
    margin-top: -60px;
}
.section-heading-productonly {
  text-transform: uppercase;
  background-color: #f6e1c5;
  font-size: 2rem;
  font-weight: 800;
}
.section-heading {
  text-transform: uppercase;
}
.section-heading .section-heading-upper {
  display: block;
  font-size: 1rem;
  font-weight: 800;
}
.section-heading .section-heading-lower {
  display: block;
  font-size: 3rem;
  font-weight: 100;
}

</style>