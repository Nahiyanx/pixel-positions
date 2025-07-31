@props(['employer', 'width' => '92'])

<img src="{{ asset($employer->logo) }}" class="rounded-xl" alt="" width="{{$width}}">