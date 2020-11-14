<header>
    <div class="navbar-container">
        <h2>APUNT.ES</h2>

        <input class="navbar-search" type="text" placeholder="Busca un documento">

        <nav>
            <ul class="menu">
                <?php
                    if( isset($_SESSION['user']) ){
    
                    }else{
                        echo "<li class='menu-item sign_in'><a href='#'>Iniciar Sesion</a></li>";
                        echo "<li class='menu-item'><a href='#'>Registro</a></li>";
                    }                                      
                ?>

                <li class="menu-item"><a href="#">Acerca de</a></li>
            </ul>
        </nav>
    </div>
</header>
