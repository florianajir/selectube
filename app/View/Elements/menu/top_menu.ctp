<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="/"><i class="icon-comments"></i> <?php echo __('Selectube'); ?></a>

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li>
                        <a href="/musiques"><i class="icon-music"></i> Musique</a>
                    </li>
                    <li>
                        <a href='#' data-toggle="modal" data-target="#blockedModal"><i class="icon-film"></i> Vidéo</a>
                        <!--<a href="#/videos"><i class="icon-film"></i> Vidéo</a>-->
                    </li>
                    <li>
                        <a href='#' data-toggle="modal" data-target="#blockedModal"><i class="icon-globe"></i> Sites</a>
                        <!--<a href="#/sites"><i class="icon-globe"></i> Sites</a>-->
                    </li>

                </ul>

                <form class="navbar-search pull-right">
                    <input type="search" class="search-query" placeholder="Recherche">
                    <button type="submit" id='bouton_recherche' class="btn btn-link"><i class='icon-search'></i>&nbsp;</button>
                </form>


                <ul class="nav pull-right">
                    <?php if (!$this->Session->read('Auth.User') && !isset($facebook_id)) { //SI NON CONNECTE ?>
                        <li>
                            <span style="width: 90px;">
                                <?php echo $this->Facebook->login(array('perms' => 'email', 'show-faces' => false, "max-rows" => 0, 'size' => 'small', 'style' => 'margin-top: 10px;')); ?>
                            </span>
                        </li>
                    <?php } ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php
                            $fb_avatar = "<i class='icon-user'></i> ";
                            if (isset($facebook_id))
                                $fb_avatar = $this->Facebook->picture($facebook_id, array('size' => 'square', 'facebook-logo' => false, 'width' => '32px', 'style' => 'float:left; margin-top: -5px; margin-right: 10px;'));

                            if ($this->Session->read('Auth.User')) //SI  CONNECTE
                                echo "<span id='menu_moncompte'>" . $fb_avatar . " " . $this->Session->read('Auth.User.pseudo') . "</span>";
                            else
                                echo "<span id='menu_moncompte'>" . $fb_avatar . " Mon espace</span>";
                            ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if (!$this->Session->read('Auth.User'))  //SI NON CONNECTE
                                echo "<li><a href='/selecteur/connexion'><i class='icon-unlock'></i> Connexion</a></li>
                                        <li><a href='/selecteur/inscription'><i class='icon-signin'></i> Inscription</a></li>";
                            else  // SI CONNECTE
                                echo "<li><a href='/selecteur/profil/" . $this->Session->read('Auth.User.pseudo') . "'><i class='icon-edit'></i> Mon profil</a></li>";
                            echo "<li><a href='/selecteur/deconnexion'><i class='icon-signout'></i> Déconnexion</a></li>";
                            ?>
                        </ul>
                    </li>

                    <li id="ajax-loading-top" class="loading"><i class="icon-spinner icon-spin icon-large"></i></li>
                    <li class="divider-vertical"></li>
                </ul>

            </div>
        </div>
    </div>
</div>