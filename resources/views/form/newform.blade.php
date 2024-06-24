<x-layout>
    <form enctype="multipart/form-data" action="{{route('form.post')}}"" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        
        <label for="email">Email</label>
        <input type="email" name="email">
        <br/>
        <button type="submit">Submit</button>
    </form>
</x-layout>