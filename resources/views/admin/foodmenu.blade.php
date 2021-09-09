<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>

    <div class="container-scroller">

    @include('admin.navbar')
    <div style="position: relative;
    top:60px; right:-150px" >

       <form action="{{url('/foods')}}" method="post"
        enctype="multipart/form-data">

         @csrf

           <div>
            <label>Title</label>
            <input
            style="color: black"
            type="text"
            name="title"
            placeholder="Write a Title"
            required
            />
           </div>
           <div>
            <label>Price</label>
            <input
            style="color: black"
            type="text"
            name="price"
            placeholder="Write a price"
            required
            />
           </div>
           <div>
            <label>Image</label>
            <input
            style="color: black"
            type="file"
            name="image"
            required
            />
           </div>
           <div>
            <label>Description</label>
            <input
            style="color: black"
            type="text"
            name="description"
            placeholder="Write a Description"
            required
            />
           </div>

            <input
            style="color: black"
            type="submit"
            value="save"
            />


       </form>

       <div>
            <table style="background-color: black;">
                <tr>
                   <th style="padding: 30px">Food Name</th>
                   <th style="padding: 30px">Price</th>
                   <th style="padding: 30px">Description</th>
                   <th style="padding: 30px">Image</th>
                   <th style="padding: 30px">Action</th>
                   <th style="padding: 30px">Action2</th>
                </tr>

                @foreach ($data as $data)
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img
                       style="height: 200px;width:200px;"
                        src="/foodimage/{{$data->image}}" alt="" /></td>
                    <td><a
                        href="{{url('/deletemenu',$data->id)}}"
                        >Delete</a>
                    </td>
                    <td><a
                        href="{{url('/updateview',$data->id)}}"
                        >Update</a></td>
                    </tr>
                @endforeach

            </table>
       </div>





      </div>
    </div>

    @include('admin.adminscript')

  </body>
</html>
