<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../../../assets/css/new.css') }}">
    <title>SupcomJE - Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('../../../assets/images/sje.png') }}" />
</head>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<body>

    <div class="profile">

        <div class="pdp"
            style="min-height: 600px; background-image: url(https://img.freepik.com/premium-photo/3d-business-peoples-person-icon_745528-46376.jpg); background-size: cover; background-position: center top;">
            <span class="mask bg-gradient-default opacity-8"></span>
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">

                        <h1 class="display-2 text-white">Hello {{$user->name}}</h1>
                        <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made
                            with your work and manage your projects or assigned tasks</p>
                        @if(Auth::user()->role ==='admin' )
                        <a href="{{ route('admin.dashboard')}}" class="btn btn-info">Home</a>
                        @elseif(Auth::user()->role ==='user' )
                        <a href="{{ route('dashboard')}}" class="btn btn-info">Home</a>
                        @endif


                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="https://img.freepik.com/premium-photo/3d-business-peoples-person-icon_745528-46376.jpg"
                                            class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        <h1></h1>
                                        <h1></h1>
                                        <h1></h1>

                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3></h3>
                                <h3></h3>
                                <h3> {{$user->name}} <span class="font-weight-light"></span>
                                </h3>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Tunis, Tunisia
                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i> SJE Member
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>Sup'Com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">My account</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="heading-small text-muted mb-4">Profile information</h6>
                            <p>Update your account's profile information and email address</p>
                            <div class="pl-lg-4">
                                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                    @csrf
                                    @method('patch')

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="name">Name</label>
                                                <input type="text" id="name" name="name"
                                                    value="{{ old('name', $user->name) }}"
                                                    class="form-control form-control-alternative" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="email">Email address</label>
                                                <input type="email" id="email" name="email"
                                                    value="{{ old('email', $user->email) }}"
                                                    class="form-control form-control-alternative"
                                                    placeholder="username@example.com">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info">Save</button>
                                </form>
                            </div>
                            <hr class="my-4">
                            <h6 class="heading-small text-muted mb-4">Update Password</h6>
                            <p>Ensure your new password is strong and unique to enhance security. Once done, save the
                                changes to update your password securely.</p>

                            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label"
                                                for="update_password_current_password">Current password</label>
                                            <input type="password" id="update_password_current_password"
                                                name="current_password" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="update_password_password">New
                                                password</label>
                                            <input type="password" id="update_password_password" name="password"
                                                class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                for="update_password_password_confirmation">Verify password</label>
                                            <input type="password" id="update_password_password_confirmation"
                                                name="password_confirmation"
                                                class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="button1" class="btn btn-info">Save</button>

                            </form>
                        </div>

                        <hr class="my-4" id="delete">
                        <h6 class="heading-small text-muted mb-4" id="delete1">Delete account</h6>
                        <div class="pl-lg-4">
                            <div class="form-group focused">
                                <p>If you want to delete your account,understand that this action is irreversible and
                                    will permanently erase all associated data. Follow the provided instructions to
                                    confirm your decision and proceed with account deletion. Take a moment to consider
                                    alternatives, such as deactivation, if you're uncertain about permanently removing
                                    your account. Always prioritize your privacy and security when managing your
                                    profile.</p>
                                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" style="background-color: red;margin-left: 20px;"
                                        class="btn btn-info">Delete</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>


</html>
