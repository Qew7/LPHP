@if ( ! $errors->isEmpty() )
    {{ dd($errors) }}
@else
    <table>
{{--        @if ( ! $projects->isEmpty())--}}
            @foreach ($projects as $project)
                <tr>
                    {{ $i = 1 }}
                    @if ( ! $i = 3 )
                            <td>
                                <a href = "#" class = "thumbnail">
                                    <img  src="http://dqbgk6hf2uifn.cloudfront.net/_img/cbc43d22-4e47-816d-05af-512f8e7452b1_0">
                                </a>
                            </td>
                        {{ $i = $i + 1 }}
                    @else
                </tr>

                @endif
            @endforeach
        {{--@else--}}
            {{--<div class="text-center"><h2>No projects :(</h2></div>--}}
        {{--@endif--}}
    </table>
@endif




