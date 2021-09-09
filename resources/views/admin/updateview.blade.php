<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>


   <base href="/public" >
   @include('admin.admincss')

  </head>
  <body>
    <div class="container-scroller">

        @include('admin.navbar')
        <div style="position: relative;
        top:60px; right:-150px" >

           <form action="{{url('/update',$data->id)}}" method="post"
            enctype="multipart/form-data">

             @csrf

               <div>
                <label>Title</label>
                <input
                value="{{$data->title}}"
                style="color: black"
                type="text"
                name="title"
                required
                />
               </div>
               <div>
                <label>Price</label>
                <input
                value="{{$data->price}}"
                style="color: black"
                type="text"
                name="price"
                required
                />
               </div>

               <div>
                <label>Description</label>
                <input
                value="{{$data->description}}"
                style="color: black"
                type="text"
                name="description"
                required
                />
               </div>


               <div>
                <label>Old Image</label>
                 <img
                 style="height: 200px;width:200px;"
                src="/foodimage/{{$data->image}}"
                />
               </div>


               <div>
                <label>Image</label>
                <input
                value="{{$data->image}}"
                style="color: black"
                type="file"
                name="image"
                />
               </div>

                <input
                style="color: black"
                type="submit"
                value="save"
                />

           </form>
        </div>
        </div>

    @include('admin.adminscript')

  </body>
</html>
