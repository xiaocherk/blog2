<div x-data="{ show:false }" @click-away="show-false">
    {{-- Trigger --}}
   <div @click="show = ! show">
       {{ $trigger }}
   </div>

    {{--Links --}}

    <div x-show="show" class="'py-2 absolute bg-gray-100 mt-2 rouded-xl w-full z-50 overflow-auto max-h-52" style="right: 12px;" width="22"
         height="22" viewBox="0 0 22 22">
      {{$slot}}
    </div>
</div>

{{--   <div x-show="open"--}}
{{--    {{ $trigger }}--}}
{{--    </div>--}}
{{--       --}}
{{--    <div @click="open = ! open">--}}
{{--<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">--}}

{{--@endphp--}}
{{--}--}}
{{--        break;--}}
{{--        $width = 'w-48';--}}
{{--    case '48':--}}
{{--switch ($width) {--}}

{{--}--}}
{{--        break;--}}
{{--        $alignmentClasses = 'origin-top-right right-0';--}}
{{--    default:--}}
{{--    case 'right':--}}
{{--        break;--}}
{{--        $alignmentClasses = 'origin-top';--}}
{{--    case 'top':--}}
{{--        break;--}}
{{--        $alignmentClasses = 'origin-top-left left-0';--}}
{{--    case 'left':--}}
{{--switch ($align) {--}}
{{--@php--}}

{{--@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])--}}
