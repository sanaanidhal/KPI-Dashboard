<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>AdminSite</title>
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


        h2 {
            text-align: center;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: black;
            padding: 30px 0;
        }

        /* Table Styles */

        .table-wrapper {
            margin: 10px 70px 70px;
            box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.2);
        }

        .fl-table {
            border-radius: 5px;
            font-size: 12px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
        }

        .fl-table td,
        .fl-table th {
            text-align: center;
            padding: 8px;
        }

        .fl-table td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }

        .fl-table thead th {
            color: #ffffff;
            background: var(--blue);
        }


        .fl-table thead th:nth-child(odd) {
            color: #ffffff;
            background: #324960;
        }

        .fl-table tr:nth-child(even) {
            background: #F8F8F8;
        }

        /* Responsive */

        @media (max-width: 767px) {
            .fl-table {
                display: block;
                width: 100%;
            }

            .table-wrapper:before {
                content: "Scroll horizontally >";
                display: block;
                text-align: right;
                font-size: 11px;
                color: white;
                padding: 0 0 10px;
            }

            .fl-table thead,
            .fl-table tbody,
            .fl-table thead th {
                display: block;
            }

            .fl-table thead th:last-child {
                border-bottom: none;
            }

            .fl-table thead {
                float: left;
            }

            .fl-table tbody {
                width: auto;
                position: relative;
                overflow-x: auto;
            }

            .fl-table td,
            .fl-table th {
                padding: 20px .625em .625em .625em;
                height: 60px;
                vertical-align: middle;
                box-sizing: border-box;
                overflow-x: hidden;
                overflow-y: auto;
                width: 120px;
                font-size: 13px;
                text-overflow: ellipsis;
            }

            .fl-table thead th {
                text-align: left;
                border-bottom: 1px solid #f7f7f9;
            }

            .fl-table tbody tr {
                display: table-cell;
            }

            .fl-table tbody tr:nth-child(odd) {
                background: none;
            }

            .fl-table tr:nth-child(even) {
                background: transparent;
            }

            .fl-table tr td:nth-child(odd) {
                background: #F8F8F8;
                border-right: 1px solid #E6E4E4;
            }

            .fl-table tr td:nth-child(even) {
                border-right: 1px solid #E6E4E4;
            }

            .fl-table tbody td {
                display: block;
                text-align: center;
            }
        }

        /* MAIN */
        main {
            width: 100%;
            padding: 24px 20px 20px 20px;
        }

        main .title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        main .breadcrumbs {
            display: flex;
            grid-gap: 6px;
        }

        main .breadcrumbs li,
        main .breadcrumbs li a {
            font-size: 14px;
        }

        main .breadcrumbs li a {
            color: var(--blue);
        }

        main .breadcrumbs li a.active,
        main .breadcrumbs li.divider {
            color: var(--dark-grey);
            pointer-events: none;
        }


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

    </style>
</head>

<body>
    <!-- SIDEBAR -->
    @include('sidebar')
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        @include('navbar')
        <!-- NAVBAR -->
        <!-- Main -->
        <main>
            <h1 class="title">Dashboard</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Dashboard</a></li>
            </ul>
        <!-- table -->

        <h2 class="title">Edit Data : Number of mobile project</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Number</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    @forEach($mobiles as $mobile)
                    <form method="POST" action="{{ route('admin.update.mobile', ['année0' => $mobile->année0]) }}">
                        @csrf
                        @method('PATCH')

                        <tr>
                            <td> {{ $mobile->année0}}
                            </td>
                            <td> <input type="number" name="nbre1"
                                    value="{{ $mobile->nbre1}}">
                            </td>

                            <td>

                                <button type="submit"><i class="fa-regular fa-pen-to-square"></i></button>
                            </td>
                    </form>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>




        <!-- table -->
    </main>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://kit.fontawesome.com/f5f77ab04f.js" crossorigin="anonymous"></script>

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
                            const aLink = i.parentElement.querySelector(
                                'a:first-child');

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




            // PROFILE DROPDOWN
            const profile = document.querySelector('nav .profile');
            const imgProfile = profile.querySelector('img');
            const dropdownProfile = profile.querySelector('.profile-link');

            imgProfile.addEventListener('click', function () {
                dropdownProfile.classList.toggle('show');
            })

        </script>
</body>

</html>
