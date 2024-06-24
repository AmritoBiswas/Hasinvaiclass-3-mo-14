<x-layout>
    <hgroup>
        <h1>Form Validation</h1>
    </hgroup>
    <form action="{{route('form.post')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" placeholder="name">
        
        <label for="email">Email</label>
        <input type="email" placeholder="email">
        <br/>
        <button type="submit">Submit</button>
    </form>
</x-layout>