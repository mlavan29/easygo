@extends('admin.template')

@section('main')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{__('messages.admin.manage_admin_page.add_role')}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i>        {{__('messages.admin.home')}}</a></li>
        <li><a href="{{ url(LOGIN_USER_TYPE.'/roles') }}">       {{__('messages.admin.manage_admin_page.roles')}}</a></li>
        <li class="active">       {{__('messages.admin.add')}}</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">       {{__('messages.admin.manage_admin_page.add_role_form')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              {!! Form::open(['url' => 'admin/add_role', 'class' => 'form-horizontal']) !!}
              <div class="box-body">
              <span class="text-danger">(*)        {{__('messages.admin.fields_are_mandatory')}}</span>
                <div class="form-group">
                  <label for="input_name" class="col-sm-3 control-label">       {{__('messages.admin.manage_admin_page.form.name')}}<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    {!! Form::text('name', '', ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => 'Name']) !!}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_display_name" class="col-sm-3 control-label">{{__('messages.admin.manage_admin_page.form.display_name')}}<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    {!! Form::text('display_name', '', ['class' => 'form-control', 'id' => 'input_display_name', 'placeholder' => 'Display Name']) !!}
                    <span class="text-danger">{{ $errors->first('display_name') }}</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_description" class="col-sm-3 control-label">{{__('messages.admin.manage_admin_page.form.description')}}<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    {!! Form::textarea('description', '', ['class' => 'form-control', 'id' => 'input_description', 'placeholder' => 'Description', 'rows' => 3]) !!}
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">{{__('messages.admin.manage_admin_page.form.permissions')}}</label>
                  <div class="col-md-7 col-sm-offset-1">
                  <ul style="display: inline-block;list-style-type: none;padding:0; margin:0;" class="edit_role">
                  @if ($errors->has('permission'))
                        <span class="text-danger">
                            {{ $errors->first('permission') }}
                        </span>
                  @endif
                  @foreach($permissions as $row)
                    <li class="checkbox" style="display: inline-block;">
                      <label>
                        <input type="checkbox" class="permission_check" name="permission[]" value="{{ $row->id }}" style="position: relative !important;"><span>{{ $row->display_name }}</span>
                      </label>
                    </li>
                  @endforeach
                  </ul>
                  </div>
                </div>             
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-info" name="submit" value="submit">{{__('messages.admin.submit')}}</button>
                 <button type="submit" class="btn btn-default" name="cancel" value="cancel">{{__('messages.admin.cancel')}}</button>
              </div>
              <!-- /.box-footer -->
            {!! Form::close() !!}
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop
@push('scripts')
<script type="text/javascript">
function permission_changes()
{
  if(!$('input[value="3"]').is(":checked")  && !$('input[value="4"]').is(":checked") && !$('input[value="5"]').is(":checked")){
    $("input[value='2']").removeAttr("disabled");
  }
  else{
    $("input[value='2']").prop('checked', true).attr("disabled","disabled");
  }
  if(!$('input[value="19"]').is(":checked") && !$('input[value="20"]').is(":checked") && !$('input[value="21"]').is(":checked")){
    $("input[value='18']").removeAttr("disabled");
  }
  else{
    $("input[value='18']").prop('checked', true).attr("disabled","disabled");
  }
  if(!$('input[value="42"]').is(":checked") && !$('input[value="43"]').is(":checked") && !$('input[value="44"]').is(":checked")){
    $("input[value='41']").removeAttr("disabled");
  }
  else{
    $("input[value='41']").prop('checked', true).attr("disabled","disabled");
  }
}
$('.permission_check').click(function(){
  // permission_changes();
});
// permission_changes();
</script>
@endpush