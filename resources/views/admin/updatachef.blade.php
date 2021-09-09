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

    <form method="post"
    action="{{url('/updatefoodchef',$data->id)}}"
    enctype="multipart/form-data" >

          @csrf
         <div>
             <label>Chef Name</label>
             <input style="color: blue" type="text"
             name="name"
             value="{{$data->name}}"  />
         </div>
         <div>
             <label>Speciality</label>
             <input style="color: blue" type="text"
             name="speciality"
             value="{{$data->speciality}}"  />
         </div>
         <div>
            <label>Old Imgae</label>
            <img
            height="200px"
            width="200px"
            src="/foodimage/{{$data->image}}"
            name="image"
            />
        </div>

        <div>
            <label>New Imgae</label>
            <input  type="file" name="image"  />
        </div>

         <input  style="color: blue" value="save" type="submit" />

    </form>



    </div>

    @include('admin.adminscript')

  </body>
</html>
