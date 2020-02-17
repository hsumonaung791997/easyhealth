<!-- <li class="{{ Request::is('category*') ? 'active' : '' }}">
    <a href="{{ route('category.index') }}"><i class="fa fa-edit"></i><span>Category</span></a>
</li>
 -->
<li class="{{ Request::is('blog*') ? 'active' : '' }}">
    <a href="{{ route('blog.index') }}"><i class="fa fa-edit"></i><span>Blog</span></a>
</li>

<li class="{{ Request::is('service*') ? 'active' : '' }}">
    <a href="{{ route('service.index') }}"><i class="fa fa-edit"></i><span>Service</span></a>
</li>

<li class="{{ Request::is('location*') ? 'active' : '' }}">
    <a href="{{ route('location.index') }}"><i class="fa fa-edit"></i><span>Location</span></a>
</li>

<li class="{{ Request::is('doctor*') ? 'active' : '' }}">
    <a href="{{ route('doctor.index') }}"><i class="fa fa-user"></i><span>Doctor</span></a>
</li>

<li class="{{ Request::is('whyus*') ? 'active' : '' }}">
    <a href="{{ route('whyus.index') }}"><i class="fa fa-edit"></i><span>Why Us</span></a>
</li>

 
<li class="{{ Request::is('partner*') ? 'active' : '' }}">
    <a href="{{ route('partner.index') }}"><i class="fa fa-users"></i><span>Partner</span></a>
</li>

<li class="{{ Request::is('company_profile*') ? 'active' : '' }}">
    <a href="{{ route('company_profile.index') }}"><i class="fa fa-edit"></i><span>Company Profile</span></a>
 </li>

<li class="{{ Request::is('teamcover*') ? 'active' : '' }}">
    <a href="{{ route('teamcover.index') }}"><i class="fa fa-users"></i><span>Team Cover</span></a>
</li>

<li class="{{ Request::is('facilities*') ? 'active' : '' }}">
    <a href="{{ route('facilities.index') }}"><i class="fa fa-edit"></i><span>Our Facilities</span></a>
</li>

<li class="{{ Request::is('team*') ? 'active' : '' }}">
    <a href="{{ route('team.index') }}"><i class="fa fa-users"></i><span>Team Management</span></a>
</li>

<li class="{{ Request::is('team*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Users</span></a>
</li>

<!-- <li class="{{ Request::is('value*') ? 'active' : '' }}">
    <a href="{{ route('value.index') }}"><i class="fa fa-edit"></i><span>Value Proposition</span></a>
</li> -->