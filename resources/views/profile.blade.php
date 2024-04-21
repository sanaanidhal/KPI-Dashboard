<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../../../assets/css/new.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{ asset('../../../assets/images/sje.png') }}" />
    <title>SupcomJE - Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap');

        * {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --grey: #F1F0F6;
            --dark-grey: #8D8D8D;
            --light: #fff;
            --dark: #000;
            --green: #81D43A;
            --light-green: #E3FFCB;
            --blue: #1775F1;
            --light-blue: #D0E4FF;
            --dark-blue: #0C5FCD;
            --red: #FC3B56;
        }

        html {
            overflow-x: hidden;
        }

        body {
            background: var(--grey);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        /* CONTENT */
        #content {
            position: relative;
            width: calc(100% - 260px);
            left: 260px;
            transition: all .3s ease;
        }

        #sidebar.hide+#content {
            width: calc(100% - 60px);
            left: 60px;
        }
                /* CONTENT */


        /* MAIN */
        main {
            width: 100%;
            padding: 24px 20px 20px 20px;
        }
        
        /* MAIN */

        @media screen and (max-width: 768px) {
            #content {
                position: relative;
                width: calc(100% - 60px);
                transition: all .3s ease;
            }

            nav .nav-link,
            nav .divider {
                display: none;
            }
        }
        main{
            .form-control {
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    width: 100%;
    height: calc(2.75rem + 2px);
    padding: .625rem .75rem;
    transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
    color: #8898aa;
    border: 1px solid #cad1d7;
    border-radius: .375rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: none;
  }
  
  @media screen and (prefers-reduced-motion: reduce) {
    .form-control {
      transition: none;
    }
  }
  
  .form-control::-ms-expand {
    border: 0;
    background-color: transparent;
  }
  
  .form-control:focus {
    color: #8898aa;
    border-color: rgba(50, 151, 211, .25);
    outline: 0;
    background-color: #fff;
    box-shadow: none, none;
  }
  
  .form-control:-ms-input-placeholder {
    opacity: 1;
    color: #adb5bd;
  }
  
  .form-control::-ms-input-placeholder {
    opacity: 1;
    color: #adb5bd;
  }
  
  .form-control::placeholder {
    opacity: 1;
    color: #adb5bd;
  }
  
  .form-control:disabled,
  .form-control[readonly] {
    opacity: 1;
    background-color: #e9ecef;
  }
  
  textarea.form-control {
    height: auto;
  }
  
  .form-group {
    margin-bottom: 1.5rem;
  }
  
  .form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
  }
  
  @media (min-width: 576px) {
    .form-inline label {
      display: flex;
      margin-bottom: 0;
      align-items: center;
      justify-content: center;
    }
  
    .form-inline .form-group {
      display: flex;
      margin-bottom: 0;
      flex: 0 0 auto;
      flex-flow: row wrap;
      align-items: center;
    }
  
    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle;
    }
  
    .form-inline .input-group {
      width: auto;
    }
  }
  .input-group {
    position: relative;
    display: flex;
    width: 100%;
    flex-wrap: wrap;
    align-items: stretch;
  }
  
  .input-group>.form-control {
    position: relative;
    width: 1%;
    margin-bottom: 0;
    flex: 1 1 auto;
  }
  
  .input-group>.form-control+.form-control {
    margin-left: -1px;
  }
  
  .input-group>.form-control:focus {
    z-index: 3;
  }
  
  .input-group>.form-control:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  
  .input-group>.form-control:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .form-control-label {
    font-size: .875rem;
    font-weight: 600;
    color: #525f7f;
  }
  
  .form-control {
    font-size: .875rem;
  }
  
  .form-control:focus:-ms-input-placeholder {
    color: #adb5bd;
  }
  
  .form-control:focus::-ms-input-placeholder {
    color: #adb5bd;
  }
  
  .form-control:focus::placeholder {
    color: #adb5bd;
  }
  
  
  .form-control-alternative {
    transition: box-shadow .15s ease;
    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
  }
  
  .form-control-alternative:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
  }
  
  .input-group {
    transition: all .15s ease;
    border-radius: .375rem;
    box-shadow: none;
  }
  
  .input-group .form-control {
    box-shadow: none;
  }
  
  .input-group .form-control:not(:first-child) {
    padding-left: 0;
    border-left: 0;
  }
  
  .input-group .form-control:not(:last-child) {
    padding-right: 0;
    border-right: 0;
  }
  
  .input-group .form-control:focus {
    box-shadow: none;
  }
  .input-group-alternative .form-control,
  .input-group-alternative .input-group-text {
    border: 0;
    box-shadow: none;
  }

  
  .input-group {
    transition: all .15s ease;
    border-radius: .375rem;
    box-shadow: none;
  }
  
  .input-group .form-control {
    box-shadow: none;
  }
  
  .input-group .form-control:not(:first-child) {
    padding-left: 0;
    border-left: 0;
  }
  
  .input-group .form-control:not(:last-child) {
    padding-right: 0;
    border-right: 0;
  }
  
  .input-group .form-control:focus {
    box-shadow: none;
  }
  
  
        }
        nav form {
    margin-top: 20px;
  }


    </style>
</head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<body>
    <!-- SIDEBAR -->
    @include('sidebar')
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        @include('navbar')
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="profile">

                <div class="pdp"
                    style="min-height: 600px; background-image: url(https://img.freepik.com/premium-photo/3d-business-peoples-person-icon_745528-46376.jpg); background-size: cover; background-position: center top;">
                    <span class="mask bg-gradient-default opacity-8"></span>
                    <div class="container-fluid d-flex align-items-center">
                        <div class="row">
                            <div class="col-lg-7 col-md-10">

                                <h1 class="display-2 text-white">Hello {{$user->name}}</h1>
                                <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress
                                    you've made
                                    with your work and manage your projects or assigned tasks</p>
                                @if(Auth::user()->role ==='admin' )
                                <a Style='background-color:#1775F1;border-color: #1775F1;'
                                    href="{{ route('admin.dashboard')}}" class="btn btn-info">Home</a>
                                @elseif(Auth::user()->role ==='user' )
                                <a Style='background-color:#1775F1;border-color: #1775F1;'
                                    href="{{ route('dashboard')}}" class="btn btn-info">Home</a>
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
                                        <form method="post" action="{{ route('profile.update') }}"
                                            class="mt-6 space-y-6">
                                            @csrf
                                            @method('patch')

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label" for="name">Name</label>
                                                        <input type="text" id="name" name="name"
                                                            value="{{ old('name', $user->name) }}"
                                                            class="form-control form-control-alternative"
                                                            placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="email">Email
                                                            address</label>
                                                        <input type="email" id="email" name="email"
                                                            value="{{ old('email', $user->email) }}"
                                                            class="form-control form-control-alternative"
                                                            placeholder="username@example.com">
                                                    </div>
                                                </div>
                                            </div>

                                            <button Style='background-color:#1775F1;border-color: #1775F1;'
                                                type="submit" class="btn btn-info">Save</button>
                                        </form>
                                    </div>
                                    <hr class="my-4">
                                    <h6 class="heading-small text-muted mb-4">Update Password</h6>
                                    <p>Ensure your new password is strong and unique to enhance security. Once done,
                                        save the
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
                                                        name="current_password"
                                                        class="form-control form-control-alternative">
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
                                                        for="update_password_password_confirmation">Verify
                                                        password</label>
                                                    <input type="password" id="update_password_password_confirmation"
                                                        name="password_confirmation"
                                                        class="form-control form-control-alternative">
                                                </div>
                                            </div>
                                        </div>
                                        <button Style='background-color:#1775F1;border-color: #1775F1;' type="submit"
                                            id="button1" class="btn btn-info">Save</button>

                                    </form>
                                </div>

                                <hr class="my-4" id="delete">
                                <h6 class="heading-small text-muted mb-4" id="delete1">Delete account</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group focused">
                                        <p>If you want to delete your account,understand that this action is
                                            irreversible and
                                            will permanently erase all associated data. Follow the provided instructions
                                            to
                                            confirm your decision and proceed with account deletion. Take a moment to
                                            consider
                                            alternatives, such as deactivation, if you're uncertain about permanently
                                            removing
                                            your account. Always prioritize your privacy and security when managing your
                                            profile.</p>
                                        <form  id="delete-form" method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                            @csrf
                                            @method('delete')
                                            <button type="button"  onclick="confirmDelete()" style="background-color: red;margin-left: 20px;"
                                                class="btn btn-info">Delete</button>
                                        </form>
                                        <script>
                                            function confirmDelete() {
                                                if (confirm("Are you sure you want to delete your account?")) {
                                                    document.getElementById('delete-form').submit();
                                                }else {
                                                    return false; 
                                                }
                                            }
                                        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- NAVBAR -->

    <script>
        // SIDEBAR DROPDOWN
        const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
        const sidebar = document.getElementById('sidebar');

        allDropdown.forEach(item => {
            const a = item.parentElement.querySelector('a:first-child');
            a.addEventListener('click', function (e) {
                e.preventDefault();

                if (!this.classList.contains('active')) {
                    allDropdown.forEach(i => {
                        const aLink = i.parentElement.querySelector('a:first-child');

                        aLink.classList.remove('active');
                        i.classList.remove('show');
                    })
                }

                this.classList.toggle('active');
                item.classList.toggle('show');
            })
        })





        // SIDEBAR COLLAPSE
        const toggleSidebar = document.querySelector('nav .toggle-sidebar');
        const allSideDivider = document.querySelectorAll('#sidebar .divider');

        if (sidebar.classList.contains('hide')) {
            allSideDivider.forEach(item => {
                item.textContent = '-'
            })
            allDropdown.forEach(item => {
                const a = item.parentElement.querySelector('a:first-child');
                a.classList.remove('active');
                item.classList.remove('show');
            })
        } else {
            allSideDivider.forEach(item => {
                item.textContent = item.dataset.text;
            })
        }

        toggleSidebar.addEventListener('click', function () {
            sidebar.classList.toggle('hide');

            if (sidebar.classList.contains('hide')) {
                allSideDivider.forEach(item => {
                    item.textContent = '-'
                })

                allDropdown.forEach(item => {
                    const a = item.parentElement.querySelector('a:first-child');
                    a.classList.remove('active');
                    item.classList.remove('show');
                })
            } else {
                allSideDivider.forEach(item => {
                    item.textContent = item.dataset.text;
                })
            }
        })




        sidebar.addEventListener('mouseleave', function () {
            if (this.classList.contains('hide')) {
                allDropdown.forEach(item => {
                    const a = item.parentElement.querySelector('a:first-child');
                    a.classList.remove('active');
                    item.classList.remove('show');
                })
                allSideDivider.forEach(item => {
                    item.textContent = '-'
                })
            }
        })



        sidebar.addEventListener('mouseenter', function () {
                if (this.classList.contains('hide')) {
                    allDropdown.forEach(item => {
                        const a = item.parentElement.querySelector('a:first-child');
                        a.classList.remove('active');
                        item.classList.remove('show');
                    })
                    allSideDivider.forEach(item => {
                        item.textContent = item.dataset.text;
                    })
                }
            })
        </script>

        </body>
 </html>
