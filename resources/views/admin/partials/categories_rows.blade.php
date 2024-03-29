@forelse ($categories as $category)
<div class="item-menu">
    <span>
        @for ($i = 0; $i < $level; $i++)
            --|
        @endfor
        {{ $category->name }}
    </span>
    <div class="category-fix">
        <a class="btn-category btn-primary" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fa fa-edit"></i></a>
        <a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

    </div>
</div>
@includeWhen($category->sub->count(), 'admin.partials.categories_rows',['categories'=>$category->sub,'level'=>$level +1])
@empty
    khong co du lie
@endforelse