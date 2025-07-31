@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer"/>
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-blue-200">{{$job->employer->name}}</a href="#">
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-500 transition-colors duration-400 hover:cursor-pointer">
            <a href="{{ $job->url }}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm text-gray-300 mt-auto">{{$job->schedule}} - {{$job->salary}}</p>
    </div>
    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag>Backend</x-tag>
        @endforeach
    </div>
</x-panel>