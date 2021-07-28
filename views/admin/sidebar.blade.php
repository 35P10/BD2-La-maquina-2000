<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{url('static/images/logo.png')}}" class="img-fluid">
        </div>
        
        <div class="user">
            <span class="subtitle">Hola:</span>
            <div class="name">
                
                <a href="{{url('/logout')}}" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            
        </div>
    </div>
    
    
    
    <div class="main">
        <ul>
            <li>
                <a href="{{url('/admin')}}"><i class="fas fa-home"></i>Dasboard</a>
            </li>
            <li>
                <a href="{{url('/admin/products')}}"><i class="fas fa-box-open"></i>Productos</a>
            </li>
            
            
            <li>
                <a href="{{url('/admin/categories')}}">
                <i class="fas fa-folder-open"></i>Categorias
                </a>
            </li>
            
            
            
            <li>
                <a href="{{url('/admin/users')}}"><i class="fas fa-users"></i>Usuarios</a>
            </li>
        </ul>
    </div>
</div>