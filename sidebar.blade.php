{{-- SimpleBar Side Menu Scroll --}}
@push('css')
<style>
    .sidebar {
        min-width: 260px;
        max-width: 260px;
        transition:
            margin-left 0.35s ease-in-out, left 0.35s ease-in-out,
            margin-right 0.35s ease-in-out, right 0.35s ease-in-out;
        direction: ltr;
        background: #222E3C;
    }

    /* 서브 메뉴 */
    .sidebar.collapsed {
        margin-left: -260px;
    }
    @media (min-width: 1px) and (max-width: 991.98px) {
        .sidebar {
            margin-left: -260px;
        }
        .sidebar.collapsed {
            margin-left: 0;
        }
    }

    .sidebar-toggle {
        cursor: pointer;
        width: 26px;
        height: 26px;
        display: flex;
    }

    .sidebar-toggle {
        margin-right: 1rem;
    }

    .sidebar-content {
        transition:
            margin-left 0.35s ease-in-out, left 0.35s ease-in-out,
            margin-right 0.35s ease-in-out, right 0.35s ease-in-out;
        display: flex;
        height: 100vh;
        flex-direction: column;
        background: #222E3C;
    }

    .sidebar-nav {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
        flex-grow: 1;
    }

    .sidebar-brand {
        font-weight: 600;
        font-size: 1.15rem;
        padding: 1.15rem 1.5rem;
        display: block;
        color: #f8f9fa;
    }
    .sidebar-brand:hover {
        text-decoration: none;
        color: #f8f9fa;
    }
    .sidebar-brand:focus {

    }
</style>
@endpush

<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar" data-simplebar="init">

        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                        aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">

                        <div class="simplebar-content" style="padding: 0px;">

                            {{$slot}}

                        </div>

                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1331px;"></div>
        </div>

        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>

        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 1293px; transform: translate3d(0px, 0px, 0px); display: block;">
            </div>
        </div>

    </div>
</nav>
