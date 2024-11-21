<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <h1 class="user-name " > Dashboard  </h1>

                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                            <li  ><a href="{{ route('admin.panel', ['slug' => App::getLocale()]) }}"><i class="ti-home"></i> <span>Acceuil</span></a></li>
                            <li >
                                <a href="{{ route('inscription_liste', ['slug' => App::getLocale()]) }}" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Demandes inscription</span></a>    
                            </li>
                            <li >
                                <a href="{{ route('inscription_formations_continue', ['slug' => App::getLocale()]) }}" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Demandes inscription formation continue</span></a>    
                            </li>
                            
                            <li>
                                <a href="{{ route('Bourse_liste', ['slug' => App::getLocale()]) }}" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Demandes Bourse</span></a>
                            </li>
                            

                            <li ><a href="{{ ('contact') }}"><i class="ti-receipt"></i> <span>Contact</span></a></li>
                      
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
