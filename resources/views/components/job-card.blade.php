@props(['job'])

<x-panel class="p-4 flex flex-col text-center">
            <div class="self-start text-sm text-blue-200">{{$job->employer->name}}</div>
            <div class="py-8">
                <h3 class="group-hover:text-blue-500 text-xl font-bold transition-colors duration-400">{{$job->title}}</h3>
                <p class="text-sm mt-4 text-gray-300">{{ $job->schedule }} - {{$job->salary}}</p>
            </div>
            <div class="flex justify-between items-center mt-auto">
                <div>
                    @foreach($job->tags as $tag)
                        <x-tag :$tag size="small"></x-tag>
                    @endforeach
                </div>
                <x-employer-logo :width="42"/>
            </div>
</x-panel>