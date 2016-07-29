    <div class="content">
        <form action="{{ url('article/create')}}" id="id-form_messages" method="POST">
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" class="form-control" placeholder="В двух словах" name="title" id="title">
                {!! $errors->first('title', '<span id="helpBlock" class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="text">Что произошло</label>
                <textarea class="form-control" placeholder="Сюда плакать в плечо" name="text" id="text" rows="5" cols="50"></textarea>
                {!! $errors->first('text', '<span id="helpBlock" class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Создать">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
            </div>
        </form>
    </div>