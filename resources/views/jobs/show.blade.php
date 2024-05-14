<x-layout heading="About Page Prop">
{{--    <x-slot:heading>--}}
{{--        About Page--}}
{{--    </x-slot:heading>--}}
    <h1>Job</h1>

    <h2 class="text-xl font-bold">
        {{ $job['title'] }}
        {{ $job['salary'] }}
    </h2>

    <p class="font-light text-lg">
        {{ $job['description'] }}
    </p>
</x-layout>
