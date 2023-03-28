

<div class="min-h-screen bg-gray-100">
    <div class="max-w-6xl px-8 mx-auto ">

        <div class="flex flex-col justify-center h-screen gap-8">
            
            <div class="">
                <h1 class="text-4xl font-base">Welcome to <strong class="font-bold text-gray-900">Code Editor</strong></h1>
                <p class="mt-3">Type in the box below and just click away after done typing.</p>
            </div>

            <div x-data="{ 
                    content: $wire.entangle('text'),
                    
                 }">
                <div class="block min-h-[10rem] w-full p-4 bg-gray-200 border-transparent rounded-md font-sans-serif" 
                    x-on:blur="content = $event.target.innerHTML;" 
                    id="editor"
                    contenteditable="true">{!! $text !!}</div>
            </div>

            <h3 class="font-bold">Variables</h3>

            <div class="bg-gray-200 border rounded-md min-h-[6rem] p-4">
                <ul>
                    @foreach($variables as $var)
                    <li>- {!! $var !!}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    
</div>