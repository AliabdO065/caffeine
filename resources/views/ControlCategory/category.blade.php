<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-1 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h2>Category Table</h2>
    <a style="background-color:  green" class="add" href="{{route('ControlCategory.create')}}">Add New</a>
                    <div class="table-wrapper">
                        <table  class="fl-table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Drinks</th>
                                <th scope="col" style="width: 50px">Control</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $p)
                                <tr>
                                    <td> {{$p->id}}</td>
                                    <td>{{$p->name}}</td>
                                    <td>
                                        @foreach ($p->products as $i)
                                        {{"{" . $i->name . "}" }}{{ '  ' }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <a style="background-color:  rgb(8, 0, 255)" href="{{route('ControlCategory.edit',$p->id)}}">Edit Name</a>
                                        <form style="background-color:  red"  method="POST" action="{{route('ControlCategory.destroy',$p->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <button  type="submit" onclick="return confirm('are you suer')">Delete </button>
                                        </form>
                                    </td>
                                </tr>    
                            @endforeach
                            <tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgb(128, 71, 227);
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}
td a ,
form{
    margin: 10px;
    padding: 7px;
    color: #E6E4E4;
    font-size: 12px;
    font-weight: bold;
    border-radius: 4px;
    display: inline-block;
    cursor: pointer;
}
/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
.add{
    color: rgb(255, 255, 255);
    margin-bottom: 23px;
    padding:12px; 
    border-radius:20%; 
}
</style>
