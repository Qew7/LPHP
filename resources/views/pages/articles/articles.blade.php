@if ( ! $errors->isEmpty() )
    {{ dd($errors) }}
@else
<div class="articles">
    @if ( ! $articles->isEmpty())
    @foreach ($articles as $article)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span>{!! $article->title !!}</span>
                    <span class="pull-right label label-info">{{ $article->created_at }}</span>
                </h3>
            </div>

            <div class="panel-body">
                {!! $article->text !!}<hr/>
                <div class="pull-right">
                    <a href="{{ url('article/' . $article->id)  }}" class="btn btn-info">
                        <i class="glyphicon glyphicon-zoom-in"></i>
                    </a>
                    <a href="{{ url('article/' . $article->id) . '/edit' }}" class="btn btn-warning">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <a href="{{ url('article/' . $article->id) . '/delete' }}" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
        <div class="text-center">
            {!! $articles->render() !!}
        </div>
    @else
        <div class="text-center"><h2>Ничего не происходило</h2></div>
    @endif
</div>
@endif