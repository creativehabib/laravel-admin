@extends('admin.layouts.master')

@section('title')
{{ __('main.Edit Announcement') }}
@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">{{ __('main.Edit Announcement') }}</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('main.Home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.tutor.course.index') }}">{{ __('main.Tutor') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.tutor.announcement.index') }}">{{ __('main.Announcements') }}</a></li>
              <li class="breadcrumb-item active">{{ __('main.Edit Announcement') }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.tutor.announcement.update',$announcement->id) }}" method="post" id="form">
                @method('PUT')
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="course_id">{{ __('main.Courses') }}</label>
                                    <select class="form-control form-control-sm" id="course_id" name="course_id">
                                        <option value="">{{ __('main.Choose') }}</option>
                                        @foreach ($courses as $course)
                                        <option value="{{$course->id}}" @if($course->id==$announcement->course_id) selected @endif>{{$course->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label for="title">{{ __('main.Name') }}</label>
                                    <input type="text" class="form-control form-control-sm" id="title" name="title" value="{{$announcement->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="content">{{ __('main.Description') }}</label>
                                    <textarea class="form-control form-control-sm" rows="3" id="content" name="content">{{$announcement->content}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="save-card">
                        <div class="card-body">
                            <a href="javascript:void(0);" class="btn btn-success btn-sm float-right" id="submit">{{ __('main.Update') }}</a>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
</div>
@endsection

@section('script')

@endsection
