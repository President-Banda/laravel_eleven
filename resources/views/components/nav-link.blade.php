@props(['active'=>false])
<a class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}
block rounded-md px-3 py-2 text-base font-medium" aria-current="{{ request()->is('/') ? "page" : "false"}}" {{ $attributes }}>
    {{ $slot  }}
</a>

{{--@props(['active'=>false, 'type'=>'a'])

@if($type=='a')
    <a class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}
block rounded-md px-3 py-2 text-base font-medium" aria-current="{{ request()->is('/') ? "page" : "false"}}" {{ $attributes }}>
        {{ $slot  }}
    </a>

@else
    <button class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}
block rounded-md px-3 py-2 text-base font-medium" aria-current="{{ request()->is('/') ? "page" : "false"}}" {{ $attributes }}>
        {{ $slot  }}
    </button>
@endif--}}



{{--// TODO : Introduce a new prop called 'type' that should determine whether the nav link should be displayed as an anchor tag or button--}}
