<style>
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


    /* SIDEBAR */

</style>
<section id="sidebar">
    @if(Auth::user()->role ==='admin' )
    <a href="{{route('admin.dashboard')}}" style='font-size:20px;' class="brand"><i
            class='bx bxs-analyse bx-md ps-2 pe-3'></i> JuniorAnalytics</a>
    <ul class="side-menu">
        <li><a href="{{route('admin.dashboard')}}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a>
        </li>
        @elseif(Auth::user()->role ==='user' )
        <a href="{{route('dashboard')}}" style='font-size:20px;' class="brand"><i
                class='bx bxs-analyse bx-md ps-2 pe-3'></i> JuniorAnalytics</a>
        <ul class="side-menu">
            <li><a href="{{route('dashboard')}}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
            @endif
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

</section>
