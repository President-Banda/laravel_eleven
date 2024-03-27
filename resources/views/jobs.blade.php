<x-layout heading="About Page Prop">
{{--    <x-slot:heading>--}}
{{--        About Page--}}
{{--    </x-slot:heading>--}}
    <h1>Jobs Page</h1>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
