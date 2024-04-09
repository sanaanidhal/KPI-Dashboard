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







        /* SIDEBAR */
        #sidebar {
            position: fixed;
            max-width: 260px;
            width: 100%;
            background: var(--light);
            top: 0;
            left: 0;
            height: 100%;
            overflow-y: auto;
            scrollbar-width: none;
            transition: all .3s ease;
            z-index: 200;
        }

        #sidebar.hide {
            max-width: 60px;
        }

        #sidebar.hide:hover {
            max-width: 260px;
        }

        #sidebar::-webkit-scrollbar {
            display: none;
        }

        #sidebar .brand {
            font-size: 24px;
            display: flex;
            align-items: center;
            height: 64px;
            font-weight: 700;
            color: var(--blue);
            position: sticky;
            top: 0;
            left: 0;
            z-index: 100;
            background: var(--light);
            transition: all .3s ease;
            padding: 0 6px;
        }

        #sidebar .icon {
            min-width: 48px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 6px;
        }

        #sidebar .icon-right {
            margin-left: auto;
            transition: all .3s ease;
        }

        #sidebar .side-menu {
            margin: 36px 0;
            padding: 0 20px;
            transition: all .3s ease;
        }

        #sidebar.hide .side-menu {
            padding: 0 6px;
        }

        #sidebar.hide:hover .side-menu {
            padding: 0 20px;
        }

        #sidebar .side-menu a {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: var(--dark);
            padding: 12px 16px 12px 0;
            transition: all .3s ease;
            border-radius: 10px;
            margin: 4px 0;
            white-space: nowrap;
        }

        #sidebar .side-menu>li>a:hover {
            background: var(--grey);
        }

        #sidebar .side-menu>li>a.active .icon-right {
            transform: rotateZ(90deg);
        }

        #sidebar .side-menu>li>a.active,
        #sidebar .side-menu>li>a.active:hover {
            background: var(--blue);
            color: var(--light);
        }

        #sidebar .divider {
            margin-top: 24px;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--dark-grey);
            transition: all .3s ease;
            white-space: nowrap;
        }

        #sidebar.hide:hover .divider {
            text-align: left;
        }

        #sidebar.hide .divider {
            text-align: center;
        }

        #sidebar .side-dropdown {
            padding-left: 54px;
            max-height: 0;
            overflow-y: hidden;
            transition: all .15s ease;
        }

        #sidebar .side-dropdown.show {
            max-height: 1000px;
        }

        #sidebar .side-dropdown a:hover {
            color: var(--blue);
        }

        #sidebar .ads {
            width: 100%;
            padding: 20px;
        }

        #sidebar.hide .ads {
            display: none;
        }

        #sidebar.hide:hover .ads {
            display: block;
        }

        #sidebar .ads .wrapper {
            background: var(--grey);
            padding: 20px;
            border-radius: 10px;
        }

        #sidebar .btn-upgrade {
            font-size: 14px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 12px 0;
            color: var(--light);
            background: var(--blue);
            transition: all .3s ease;
            border-radius: 5px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        #sidebar .btn-upgrade:hover {
            background: var(--dark-blue);
        }

        #sidebar .ads .wrapper p {
            font-size: 12px;
            color: var(--dark-grey);
            text-align: center;
        }

        #sidebar .ads .wrapper p span {
            font-weight: 700;
        }

        /* SIDEBAR */





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


        /* NAVBAR */
        nav {
            background: var(--light);
            height: 64px;
            padding: 0 20px;
            display: flex;
            align-items: center;
            grid-gap: 28px;
            position: sticky;
            top: 0;
            left: 0;
            z-index: 100;
        }

        nav .toggle-sidebar {
            font-size: 18px;
            cursor: pointer;
        }

        nav form {
            max-width: 400px;
            width: 100%;
            margin-right: auto;
        }

        nav .form-group {
            position: relative;
        }

        nav .form-group input {
            width: 100%;
            background: var(--grey);
            border-radius: 5px;
            border: none;
            outline: none;
            padding: 10px 36px 10px 16px;
            transition: all .3s ease;
        }

        nav .form-group input:focus {
            box-shadow: 0 0 0 1px var(--blue), 0 0 0 4px var(--light-blue);
        }

        nav .form-group .icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 16px;
            color: var(--dark-grey);
        }

        nav .nav-link {
            position: relative;
        }

        nav .nav-link .icon {
            font-size: 18px;
            color: var(--dark);
        }

        nav .nav-link .badge {
            position: absolute;
            top: -12px;
            right: -12px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid var(--light);
            background: var(--red);
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--light);
            font-size: 10px;
            font-weight: 700;
        }

        nav .divider {
            width: 1px;
            background: var(--grey);
            height: 12px;
            display: block;
        }

        nav .profile {
            position: relative;
        }

        nav .profile img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
        }

        nav .profile .profile-link {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            background: var(--light);
            padding: 10px 0;
            box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);
            border-radius: 10px;
            width: 160px;
            opacity: 0;
            pointer-events: none;
            transition: all .3s ease;
        }

        nav .profile .profile-link.show {
            opacity: 1;
            pointer-events: visible;
            top: 100%;
        }

        nav .profile .profile-link a {
            padding: 10px 16px;
            display: flex;
            grid-gap: 10px;
            font-size: 14px;
            color: var(--dark);
            align-items: center;
            transition: all .3s ease;
        }

        nav .profile .profile-link a:hover {
            background: var(--grey);
        }

        /* NAVBAR */
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
    <section id="sidebar">
        <a href="#" class="brand"><i class='bx bxs-smile icon'></i> AdminSite</a>
        <ul class="side-menu">
            <li><a href="{{route('admin.dashboard')}}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
            <li class="divider" data-text="main">Main</li>  
            <li>
                <a href="#"><i class='bx bxs-inbox icon'></i> Elements <i
                        class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Alert</a></li>
                    <li><a href="#">Badges</a></li>
                    <li><a href="#">Breadcrumbs</a></li>
                    <li><a href="#">Button</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='bx bxs-chart icon'></i> Charts</a></li>
            <li><a href="#"><i class='bx bxs-widget icon'></i> Widgets</a></li>
            <li class="divider" data-text="table and forms">Table and forms</li>
            <li><a href="#"><i class='bx bx-table icon'></i> Tables</a></li>
            <li>
                <a href="#"><i class='bx bxs-notepad icon'></i> Forms <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Basic</a></li>
                    <li><a href="#">Select</a></li>
                    <li><a href="#">Checkbox</a></li>
                    <li><a href="#">Radio</a></li>
                </ul>
            </li>
        </ul>
        <div class="ads">
            <div class="wrapper">
                <a href="#" class="btn-upgrade">Upgrade</a>
                <p>Become a <span>PRO</span> member and enjoy <span>All Features</span></p>
            </div>
        </div>
    </section>
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search icon'></i>
                </div>
            </form>
            <x-app-layout>
            </x-app-layout>
        </nav>


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

        <h2 class="title">Edit Data : Number of external project</h2>
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
                    @forEach($externes as $externe)
                    <form method="POST" action="{{ route('admin.update.externe', ['année' => $externe->année]) }}">
                        @csrf
                        @method('PATCH')

                        <tr>
                            <td> {{ $externe->année}}
                            </td>
                            <td> <input type="number" name="nbre"
                                    value="{{ $externe->nbre}}">
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
