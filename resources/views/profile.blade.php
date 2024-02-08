<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header')
    <script src="/js/profile.js"></script>
    <script src="/js/footer.js"></script>

    <title>Profile</title>
</head>

<body class="profile_body">
    
    <div class="profile_wrapper">
    @include('layouts/navbar')
   

    <form
    id="edit_profile_form"
    action="{{ url('/profile/'.$user->user_id) }}"
    method="POST"
    enctype="multipart/form-data"
    class="container-fluid"
  >
    @csrf @method('PUT')
    <h1 id="your_profile">Your Profile</h1>

<<<<<<< HEAD
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
=======
      <div class="row">
        <div class="col-lg-12">

            <label for="profile_picture_upload" class="profile-picture-container">
                <img id="profile_picture" src="/img/avatar.png" alt="Profile Picture" />
            </label>
            <input type="file" name="profile_picture" class="input_profile text-center" id="profile_picture_upload" />

>>>>>>> 7571122b221c1d7cfcb2d821f222fcbbede99c87

        

          <h2>{{$user -> first_name}}, {{$user -> last_name}}</h2>
          <h5>{{$user -> email}}</h5>

          
          {{--
          <img
            id="profile_picture"
            src="{{ $user->profile_picture }}"
            alt="Profile Picture"
          />
          --}} {{--
          <label for="profile_picture_upload">Upload Profile Picture:</label>
          <br />
          <input
            type="file"
            name="profile_picture"
            class="input_profile text-center"
            id="profile_picture_upload"
          /><br />
          <button
            type="button"
            id="upload_button"
            class="btn btn-primary button_profile"
          >
            Upload
          </button>
          --}}
          <strong><p class="mt-5 fs-4">Edit Your Profile Here:</p></strong>

          <label for="email" class="label_profile mt-4">First Name:</label>
          <input
            class="input_profile"
            type="text"
            name="first_name"
            value="{{ $user->first_name }}"
            required
            disabled
          />

          <label for="email" class="label_profile">Last Name:</label>
          <input
            class="input_profile"
            type="text"
            name="last_name"
            value="{{ $user->last_name }}"
            required
            disabled
          />

          <label for="email" class="label_profile">Email:</label>
          <input
            class="input_profile"
            type="email"
            name="email"
            value="{{ $user->email }}"
            required
            disabled
          /><br />
          <button
            type="button"
            id="edit_button"
            class="btn btn-dark button_profile"
          >
            Edit
          </button>
          <button
            type="submit"
            style="display: none"
            id="save_button"
            class="btn btn-dark button_profile"
          >
            Save Changes
          </button>

        </div>
      </div>
   
  </form>
</div>
    @include('layouts/footer')

</body>
</html>

