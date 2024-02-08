<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header')
    <title>Profile</title>
</head>

<body>
    @include('layouts/navbar')
    <h1>Your Profile</h1>

    <form id="edit_profile_form" action="{{ url('/profile/'.$user->user_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h2>{{$user -> first_name}}</h2>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="{{ $user->first_name }}" required disabled>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="{{ $user->last_name }}" required disabled>

        <label for="mobile_number">Mobile Number:</label>
        <input type="text" name="mobile_number" value="{{ $user-> mobile_number}}" required disabled>

        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ $user-> address }}" required disabled>

        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" value="{{ $user->birthdate ? $user->birthdate->format('Y-m-d') : '' }}" required disabled /><br />

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required disabled>

        <button type="button" id="edit_button" class="btn btn-warning">Edit</button>
        <button type="submit" style="display: none;" id="save_button" class="btn btn-success">Save Changes</button>
    </form>

    <script src="/js/profile.js"></script>

</body>

</html>