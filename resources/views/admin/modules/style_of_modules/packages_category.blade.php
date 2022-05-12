<div class="card">
    @php
        $randNumModule = isset($randomKey) ? $randomKey : \Illuminate\Support\Str::random(10);
    @endphp
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Packages Category
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <div class="form-group row">
            <label class="col-sm-3 control-label">{{ __('Package Category') }}<span class="text-danger">*</span></label>
            <div class="col-sm-9">
                <select class="form-control" name="mod[{{ $randNumModule }}][packages_category][category_id]" >
                    <option value="">Choose Category</option>
                    @foreach($package_categories as $category)
                        <option value="{{$category->id}}" {{(isset( $moduleAttributes['category_id'])&&$moduleAttributes['category_id']==$category->id) ? 'selected' : '' }} >{{$category->name_en}}</option>
                    @endforeach
                </select>
                @if ($errors->has('category_id'))
                    <p class="text-danger"> {{ $errors->first('category_id') }} </p>
                @endif
            </div>
        </div>
    </div>
</div>