<div class="musiques view" id="player">

    <h2 id="playerYoutubeTitre"><?php echo $musique['Musique']['titre']; ?></h2>

    <div id="playerYoutube"><?php echo $this->Youtube->video($musique['Musique']['url']); ?></div>
    
    <!--<div class="fb-like" data-send="true" data-width="450" data-show-faces="true"></div>-->
    <!--COMMENTAIRE - FACEBOOK-->
    <div class="fb-comments" data-width="624" data-num-posts="10"></div>

    <div id="playerYoutubeDescription"><?php echo $musique['Musique']['description']; ?></div>
    <div id="playerYoutubeUrl"><i class="icon-link"></i> Lien direct : <?php echo $this->Html->link($musique['Musique']['url'], $musique['Musique']['url']); ?></div>
    
    <div id="playerYoutubeTags"><i class="icon-tags"></i> Mots-clés : <?php echo h($musique['Musique']['tags']); ?></div>
    
    <div id="playerYoutubeArtiste">
        <?php echo $this->Html->link($musique['Artiste']['nom'], array('controller' => 'artistes', 'action' => 'view', $musique['Artiste']['id']), array('class' => '')); ?>
    </div>
    
    <div id="playerYoutubeAlbum">
        <?php echo $this->Html->link($musique['Album']['titre'], array('controller' => 'albums', 'action' => 'view', $musique['Album']['id']), array('class' => '')); ?>
    </div>
    
    <div id="playerYoutubeCategorie">
                <?php echo $this->Html->link($musique['Categorie']['id'], array('controller' => 'categories', 'action' => 'view', $musique['Categorie']['id']), array('class' => '')); ?>
    </div>
    <div id="playerYoutubeDate">
                <?php 
                echo "<i class=\"icon-share-alt\"></i> Partagé le ".h($this->Html2->print_date($musique['Musique']['created']));
                if ($musique['Musique']['created'] !== $musique['Musique']['modified'])
                    echo ", Modifié le ".h($this->Html2->print_date($musique['Musique']['modified'])); 
                ?>
    </div>
    
    <div class="fb-like" data-send="true" data-width="624" data-show-faces="true"></div>
</div><!-- .view -->