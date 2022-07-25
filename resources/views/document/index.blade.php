{{-- show all document list --}}
{{-- also apply filter by... --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Document') }}
        </h2>
       <x-document-nav/>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-backdrop overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-backdrop border-b border-backdrop">

                    <h2>Km document</h2>
                    <ul>
                        
                        @foreach ($documents as $doc)
                        <!-- {{-- @if ($doc['type']=='Doc') --}} -->
                        <li><a href="/documents/{{$doc['Doc_Name']}}">
                            {{$doc['Doc_Type']}} : {{$doc['Doc_Name']}}</li>
                        </a>
                        <!-- {{-- @endif --}} -->
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
