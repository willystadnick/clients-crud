<div class="form-group">
    <label for="name">Name</label>
    @php
        $name = old('name');
        if (empty($name) && isset($client)) {
            $name = $client->name;
        }
    @endphp
    <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" required>
    @if ($errors->has('text'))
        <div class="text-danger">{{ $errors->first('text') }}</div>
    @endif
</div>
<div class="form-group">
    <label for="email">Email</label>
    @php
        $email = old('email');
        if (empty($email) && isset($client)) {
            $email = $client->email;
        }
    @endphp
    <input type="email" name="email" id="email" class="form-control" value="{{ $email }}" required>
    @if ($errors->has('email'))
        <div class="text-danger">{{ $errors->first('email') }}</div>
    @endif
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    @php
        $phone = old('phone');
        if (empty($phone) && isset($client)) {
            $phone = $client->phone;
        }
    @endphp
    <input type="text" name="phone" id="phone" class="form-control" value="{{ $phone }}" required>
    @if ($errors->has('text'))
        <div class="text-danger">{{ $errors->first('text') }}</div>
    @endif
</div>
<div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" name="photo" id="photo" class="form-control-file">
    @if ($errors->has('photo'))
        <div class="text-danger">{{ $errors->first('photo') }}</div>
    @endif
</div>
<div class="text-right">
    <a href="javascript:history.go(-1)" class="btn btn-info btn-sm">Back</a>
    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</div>
