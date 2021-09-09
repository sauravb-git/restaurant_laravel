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



        <form action="{{url('/uploadchef')}}"
        method="post"
        enctype="multipart/form-data"
        >

              @csrf

               <div>
                   <label>name</label>
                   <input
                   style="color: rgb(46, 46, 114);"
                   type="text"
                   name="name"
                   required
                   placeholder="Enter the name"
                   />
               </div>

               <div>
                <label>Speciality</label>
                <input
                style="color: blue;"
                type="text"
                name="speciality"
                required
                placeholder="Enter the Speciality"
                />
            </div>




               <div>
                <input
                type="file"
                name="image"
                required
                />
            </div>




            <div>
                <label>Speciality</label>
                <input
                style="color: blue;"
                type="submit"
                value="Save"
                />
            </div>


        </form>

         <form   >
             <table bgcolor="black">

                <tr>
                    <th style="padding: 30px">Chef Name</th>
                    <th style="padding: 30px">Speciality</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action2</th>
                </tr>
                  @foreach ($data as $data)
                <tr>
                    <th style="padding: 30px">{{$data->name}}</th>
                    <th style="padding: 30px">{{$data->speciality}}</th>
                    <th><img height="100px" width="100px"
                        src="/foodimage/{{$data->image}}"
                        /></th>
                    <th style="padding: 30px">
                    <a href="{{url('/updatechef',$data->id)}}">
                    Updata
                    </a>
                    </th>

                    <td><a href="{{url('/deletechef',$data->id)}}">
                    Delete
                    </a></td>
                </tr>

                @endforeach

             </table>
         </form>


    </div>

    @include('admin.adminscript')

  </body>
</html>
