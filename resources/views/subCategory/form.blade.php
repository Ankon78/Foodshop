<div class="form-group mb-3">
    <label for="category">Categroy</label>

    @php
        $category = \App\Models\Category::where('status', 'Active')->get();
    @endphp

    <select class="form-control" name="category_id">
        @foreach($category as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="sub_category">Sub Category Name</label>
    <input type="text" required name="name" value="{{ (isset($sub_category)) ? $sub_category->name : '' }}" class="form-control" id="sub_category">
</div>

<div class="form-group mb-3">
    <label for="status">Status</label>
    <select class="form-control" name="status" id="status" required>
        <option value="Active" {{ ((isset($sub_category)) && $sub_category->status == 'Active') ? 'selected' : '' }}>Active</option>
        <option value="InActive" {{ ((isset($sub_category)) && $sub_category->status == 'InActive') ? 'selected' : '' }}>InActive</option>
    </select>
</div>
