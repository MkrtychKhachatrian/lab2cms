<div class="form-group">
    <input type="text" class="form-control" name="title" value="{{$page->title ?? ''}}" placeholder="Назва">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="path" value="{{$page->path ?? ''}}" placeholder="Шлях">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="main_content" value="{{$page->main_content ?? ''}}" placeholder="Характеристики">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="company" value="{{$page->company ?? ''}}" placeholder="Виробник">
</div>
<div class="form-group">
    <input type="integer" class="form-control" name="categorry_id" value="{{$page->categorry_id ?? ''}}" placeholder="Категорія">
</div>
<div class="form-group">
    <select name="categories[]" multiple="" class="form-control">
        @include('admin.pages._categories')
    </select>
</div>
<hr>

<button type="submit" class="btn btn-dark">Зберегти</button>
