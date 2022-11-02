<div class="form-group {{ $errors->has('course_title') ? 'has-error' : ''}}">
    <label for="course_title" class="control-label">{{ 'Course Title' }}</label>
    <input class="form-control" name="course_title" type="text" id="course_title" value="{{ isset($post->course_title) ? $post->course_title : ''}}" >
    {!! $errors->first('course_title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('course_detail') ? 'has-error' : ''}}">
    <label for="course_detail" class="control-label">{{ 'Course Detail' }}</label>
    <textarea class="form-control" rows="5" name="course_detail" type="textarea" id="course_detail" >{{ isset($post->course_detail) ? $post->course_detail : ''}}</textarea>
    {!! $errors->first('course_detail', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
