@extends('layouts.volunteer')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <b class="card-title">Submit Offer</b>
    </div>
    <div class="card-body">
        <form action="{{route('offer.store',['request_data' => $data->id])}}" method="post">
            @csrf
            <div class="form-group">
                <label for="Note">Note</label>
                <textarea name="note" cols="30" rows="10" class="form-control @error('note') is-invalid @enderror">{{old('note',$notes)}}</textarea>
                @error('note')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <button type="reset" class="btn btn-outline-warning">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection
