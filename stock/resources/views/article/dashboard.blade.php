<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @section    
                    <table class="table table-striped table-borderd">
                        <tr>
                            <th>#</th>
                            <th>nom</th>
                            <th>idcat</th>
                            <th>description</th>
                            <th>marque</th>
                        </tr>
                        @foreach ($article as article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->nom}}</td>
                            <td>{{$article->idcat}}</td>
                            <td>{{$article->description}}</td>
                            <td>{{$article->marque}}</td>
                        </tr>
                        @endforeach
                    </table>
                @endsection
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
