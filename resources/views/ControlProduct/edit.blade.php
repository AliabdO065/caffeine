    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Poduct') }}
            </h2>
        </x-slot>
        <form class="form-style-9" method="POST" action="{{route('ControlProduct.update',$product->id)}}" enctype="multipart/form-data">
            <ul>
            <li>
                @method('PUT')
                @csrf
                <input type="text" name="name" class="field-style field-full align-left" placeholder="Name" 
                value="{{$product->name}}"/>            
            </li>
            <li>
                <select name="category_id" class="field-style field-full align-left" placeholder="Category id="">
                    @foreach($cat as $c){
                        <option value="{{$c->id}}" @selected($c->id==$product->category_id)>{{$c->name}}</option>
                    }
                    @endforeach
                </select>
            </li>
            <li>
                <input type="text" name="price" class="field-style field-split align-left" placeholder="Price" 
                value="{{$product->price}}"/>
            </li>
            <li>
                <input type="file" name="path" id = "ImagePath" onchange="Image()" name="field4" class="field-style field-full align-none" placeholder="Subject">
            </li>
            <li>
            <input type="submit" value="Uptate" />
            <a href="{{route('ControlProduct.index')}}">return to list</a>
            </li>
            </ul>
            </form>    
            <div class="imgdiv">
            <img class="field-style" id="ImageId" src="{{asset('images/'.$product->path)}}" alt="">
            </div>
    </x-app-layout>

<style type="text/css">
.form-style-9{
	max-width: 450px;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
.imgdiv{
    border: #17445E solid 3px;
    width: 255px;
    height: 304px;
    position: absolute;
    top: 16%;
    right: 10%;
}
.imgdiv img{
    width: 255px;
    height: 304px;
}
@media (max-width: 1200px) {
    .imgdiv{
    position: absolute;
        top: 56%;
        right: 35%;
}
}
</style>

    <script>
        function Image() {
            document.getElementById("ImageId").src = window.URL.createObjectURL(document.getElementById("ImagePath").files[0]);
        }
    </script>
