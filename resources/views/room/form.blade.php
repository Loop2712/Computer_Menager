<div class="form-group {{ $errors->has('Room_id') ? 'has-error' : ''}}">
    <label for="Room_id" class="control-label">{{ 'Room Id' }}</label>
    <input class="form-control" name="Room_id" type="text" id="Room_id" value="{{ isset($room->Room_id) ? $room->Room_id : ''}}" >
    {!! $errors->first('Room_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="text" id="status" value="{{ isset($room->status) ? $room->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('study_desk') ? 'has-error' : ''}}">
    <label for="study_desk" class="control-label">{{ 'Study Desk' }}</label>
    <input class="form-control" name="study_desk" type="text" id="study_desk" value="{{ isset($room->study_desk) ? $room->study_desk : ''}}" >
    {!! $errors->first('study_desk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label">{{ 'Location' }}</label>
    <input class="form-control" name="location" type="text" id="location" value="{{ isset($room->location) ? $room->location : ''}}" >
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
    <label for="note" class="control-label">{{ 'Note' }}</label>
    <textarea class="form-control" rows="5" name="note" type="textarea" id="note" >{{ isset($room->note) ? $room->note : ''}}</textarea>
    {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('proto') ? 'has-error' : ''}}">
    <label for="proto" class="control-label">{{ 'Proto' }}</label>
    <input class="form-control" name="proto" type="text" id="proto" value="{{ isset($room->proto) ? $room->proto : ''}}" >
    {!! $errors->first('proto', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
