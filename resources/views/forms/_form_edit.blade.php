    <div class="content">
        <form action="{{ url('article/' . $article->id)}}" id="id-form_messages" method="POST">
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $article->title }}">
            </div>
            <div class="form-group">
                <label for="text">Что произошло</label>
                <textarea class="form-control" name="text" id="text" rows="5" cols="50">{{ $article->text }}</textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Создать">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
            </div>
        </form>
    </div>
