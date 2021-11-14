@props(['trigger'])
<div x-data="{ show: false}" @click.away="show=false">

    {{--Trigger--}}
  <div @click="show = ! show">
      {{ $trigger }}
  </div>

    {{--Links--}}
    <div x-show="show" class="py-2 absolute bg-gray-100  mt-2 rounded-xl w-full display:none overflow-auto max-h-52">
        {{ $slot }}
    </div>
</div>
