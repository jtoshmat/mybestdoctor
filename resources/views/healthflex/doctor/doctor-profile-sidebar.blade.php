<!-- Profile Sidebar -->
<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                <img src="/healthflex_files/uploads/avatars/{{ Auth::guard('doctor')->user()->avatar }}" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3>{{ Auth::guard('doctor')->user()->name }}</h3>

                <div class="patient-details">
                    <h5 class="mb-0">{{ Auth::guard('doctor')->user()->speciality_title }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="{{ Request::path('doctor/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('doctor.dashboard') }}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::path() ==='doctor/appointments' ? 'active' : '' }}">
                    <a href="{{ route('doctor.appointments') }}">
                        <i class="fas fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li class="{{ Request::path() ==='doctor/my-patients' ? 'active' : '' }}">
                    <a href="{{ route('doctor.my-patients') }}">
                        <i class="fas fa-user-injured"></i>
                        <span>My Patients</span>
                    </a>
                </li>
                <li class="{{ Request::path() ==='doctor/schedule-timings' ? 'active' : '' }}">
                    <a href="{{ route('doctor.schedule-timings') }}">
                        <i class="fas fa-hourglass-start"></i>
                        <span>Schedule Timings</span>
                    </a>
                </li>
                <li class="{{ Request::path() ==='doctor/invoices' ? 'active' : '' }}">
                    <a href="{{ route('doctor.invoices') }}">
                        <i class="fas fa-file-invoice"></i>
                        <span>Invoices</span>
                    </a>
                </li>
                <li class="{{ Request::path() ==='doctor/profile-settings' ? 'active' : '' }}">
                    <a href="{{ route('doctor.profile-settings') }}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>
                <li class="{{ Request::path() ==='doctor/change-password' ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="/sherzod">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /Profile Sidebar -->
