<x-layout title="Form Page">
    <h1>This is the  from page</h1>
    <fieldset>
        <form action="{{route('form.post')}}" method="POST">
            {{-- @csrf --}}
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="name" value='{{old('name')}}'>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="email" value='{{old('email')}}'>
            <input type="number" name="price" id="price" placeholder="price" value='{{old('price')}}'>
            <input type="submit" name="submit" id="submit"> 
            

            @if (session('success'))
                <p>{{session('success')}}</p>
                
            @endif

            @if($errors->any())
                {{-- <p>{{$errors->first()}}</p> --}}
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach

            @endif



        </form>
    </fieldset>
</x-layout>