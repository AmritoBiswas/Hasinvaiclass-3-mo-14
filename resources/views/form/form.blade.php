<x-layout title="Form Page">
    <h1>This is the Normal from page</h1>
    <fieldset>
        <form action={{route('form.post')}} method="POST">
            {{-- @csrf --}}
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email">
            <input type="file" name="profilephoto" id="profilephoto"> 
            <input type="submit" name="submit" id="submit"> 
            <p>{{session("success")}}</p> 
            <p>{{session("name")}}</p> 
            <p>{{session("email")}}</p> 
        </form>
    </fieldset>
</x-layout>