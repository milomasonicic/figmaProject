<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="h-96 bg-[url('https://plus.unsplash.com/premium_photo-1688045546885-08c5424e1a0d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80')]">
        
        <!--img src="https://static.vecteezy.com/system/resources/previews/002/098/203/original/silver-tabby-cat-sitting-on-green-background-free-photo.jpg" alt="" class='h-14'-->
        <h1 class="text-7xl">Naslov</h1>
    </div>
    
    <div class="container mx-auto">

        <div class="grid gap-2 grid-cols-4 justify-items-center my-20">
            @foreach ($blogs as $blog)
            <div class="flex flex-col max-w-sm">
                <img src="{{$blog->image}}" alt="">
                <p>{{$blog->created_at}}</p>
                <h1 class="font-semibold text-3xl items-center">{{$blog->title}}</h1>
                <p>{{Str::limit($blog->body, 50, "...")}}</p>
            </div>
            @endforeach
    
        </div>

    </div>


</x-app-layout>
