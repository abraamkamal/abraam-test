

<div class="portlet box green-meadow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-paper-plane-o"></i>Publish
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
            <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body pub">
        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="draft" class="btn default btn-sm">Save draft</button>
            </div>
            <div class="col-md-6 right"><a href="javascript:;" class="btn default btn-sm"> Preview </a></div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <i class="fa fa-key"></i> Status: <b>{{ isset($post) ? ucfirst($post->post_status) : 'Publish' }}</b>
                <a>Edit</a>
            </div>
            <div class="col-md-12">
                <i class="fa fa-eye"></i> Visibility: <b>Public</b> <a>Edit</a>
            </div>
            <div class="col-md-12">
                <i class="fa fa-calendar"></i> Publish <b>immediately</b> <a>Edit</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="trash" class="trash">Move to trash</button>
            </div>
            <div class="col-md-6 right">
                <button type="submit" name="publish"
                        class="btn blue btn-sm">{{ isset($action) && $action == 'edit' ?  'Update' : 'Publish' }}</button>
                <br>
            </div>
        </div>
    </div>
</div>

@if(\Request::get('post_type') == 'page_test')
    <div class="portlet box green-meadow attributes">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>Page Attributes
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
            </div>
        </div>
        <div class="portlet-body lang">
            <div class="row">
                <div class="col-md-12">Parent</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <select name="" id="" class="form-control">
                        <option value selected="selected">(no parent)</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">Template</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <select name="" id="" class="form-control">
                        <option value selected="selected">Page Template</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">Order</div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="" value="0" autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    Need help? Use the Help tab in the upper right of your screen.
                </div>
            </div>
        </div>
    </div>
@endif
@include('admin::partials.featured_images')
