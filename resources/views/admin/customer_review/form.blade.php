<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="username" type="text" id="username" value="{{ isset($customer_review->username) ? $customer_review->username : ''}}" >
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('komentar') ? 'has-error' : ''}}">
    <label for="komentar" class="control-label">{{ 'Komentar' }}</label>
    <textarea class="form-control" rows="5" name="komentar" type="textarea" id="komentar" >{{ isset($customer_review->komentar) ? $customer_review->komentar : ''}}</textarea>
    {!! $errors->first('komentar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
