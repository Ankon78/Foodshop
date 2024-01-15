
<div class="form-group mb-2">
    <label for="Brand_name"><strong>BRAND NAME</strong><span class="text-danger">*</span></label>
    <input type="text" name="name" placeholder="Brand name" value="{{ (isset($brand)) ? $brand->name : '' }}" class="form-control" required>
</div>

<div class="form-group">
    <label for="status"><strong>STATUS</strong><span class="text-danger">*</span></label>
    <select name="status" id="status" class="form-control" required>
        <option value="1"{{ isset($brand) && $brand->status == 1 ? 'Active' : ''  }}>Active</option>
        <option value="0"{{ isset($brand) && $brand->status == 0 ? 'Inactive' : ''  }}>Inactive</option>
    </select>
</div>
