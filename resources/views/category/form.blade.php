
<div class="form-group mb-2">
    <label for="Category_name"><strong>CATEGORY NAME</strong><span class="text-danger">*</span></label>
    <input type="text" name="name" placeholder="Category name" value="{{ (isset($category)) ? $category->name : '' }}" class="form-control" required>
</div>

<div class="form-group mb-2">
    <label for="image"><strong>Image</strong><span class="text-danger">*</span></label>
    <input type="file" name="image" class="form-control " id="image">

</div>

<div class="form-group">
    <label for="status"><strong>STATUS</strong><span class="text-danger">*</span></label>
    <select name="status" id="status" class="form-control" required>
        <option value="1"{{ isset($category) && $category->status == 1 ? 'Active' : ''  }}>Active</option>
        <option value="0"{{ isset($category) && $category->status == 0 ? 'Inactive' : ''  }}>Inactive</option>
    </select>
</div>
