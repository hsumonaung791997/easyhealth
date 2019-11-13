<li class="{{ Request::is('category*') ? 'active' : '' }}">
    <a href="{{ route('category.index') }}"><i class="fa fa-edit"></i><span>Category</span></a>
</li>

<li class="{{ Request::is('blog*') ? 'active' : '' }}">
    <a href="{{ route('blog.index') }}"><i class="fa fa-edit"></i><span>Blog</span></a>
</li>

<li class="{{ Request::is('service*') ? 'active' : '' }}">
    <a href="{{ route('service.index') }}"><i class="fa fa-edit"></i><span>Service</span></a>
</li>