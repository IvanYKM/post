<x-app-layout>
    <div class="container py-8">
       <div class="grid grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) col-span-2 @endif" style="backgroud-image: url({{Storage::url($post->image->url)}})">
                <div class="w-full h-full px-8 flex flex-col justify-center">

                    <div>
                        @foreach ($post->tags as $tag)
                            <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                        @endforeach
                    </div>

                    <h1 class="text-4xl text-white-200 leading-8 font-bold">
                        <a href="{{$post->name}}">

                        </a>
                    </h1>
                </div>
            </article>
        @endforeach
       </div>
    </div>
</x-app-layout>