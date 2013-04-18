<?php echo $this->Html->script("musique_add"); ?>
<?php echo $this->Html->script("youtube"); ?>
<div class="musiques form">

    <?php echo $this->Form->create('Musique', array('controller' => 'musiques', 'action' => 'partager', 'inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>

    <?php echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.id'))); ?>

    <fieldset id="fieldset-lien-musique">
        <h2><?php echo __('Partager une musique Youtube'); ?></h2>
        <div id="champsLienYoutube">
            <?php echo $this->Form->label('url', "Adresse du lien"); ?>
            <div class="input-prepend input-append">
                <span class="add-on"><label for="inputUrlYoutube"><i class="icon-music"></i>&nbsp;</label></span>
                <?php echo $this->Form->input('url', array('id' => 'inputUrlYoutube', 'class' => '', 'label' => false, 'div' => false, 'placeholder' => 'Ex : https://www.youtube.com/watch?v=eFzfTh6dGd5')); ?>
                <button class="btn" type="button" id="getYoutubeInfos"><i class="icon-download icon-large"></i>&nbsp;</button>
            </div>
        </div>
        
        <div id="divMiniatureYoutube"><img id="miniatureYoutube"></div>
    </fieldset>


    <fieldset id="fieldset-infos-musique">
        <legend>Informations supplémentaires</legend>
        <?php echo $this->Form->input('titre', array('class' => 'span12', 'label' => '<i class="icon-file"></i> Titre')); ?>

        <?php echo $this->Form->input('description', array('class' => 'span12', 'label' => '<i class="icon-pencil"></i> Description', 'type' => 'textarea')); ?>

        <table class="span12" id="champsRelies">
            <tr>
                <td>
                    <?php echo $this->Form->input('categorie', array('class' => 'span12', 'label' => '<i class="icon-flag"></i> Catégorie', 'type' => 'text', 'data-provide' => "typeahead", 'autocomplete' => 'off')); ?>
                </td>
                <td>
                    <?php echo $this->Form->input('artiste', array('class' => 'span12', 'label' => '<i class="icon-star"></i> Artiste / Groupe', 'type' => 'text', 'data-provide' => "typeahead", 'autocomplete' => 'off')); ?>
                </td>
                <td>
                    <?php echo $this->Form->input('album', array('class' => 'span12', 'label' => '<i class="icon-headphones"></i> Album', 'type' => 'text', 'data-provide' => "typeahead", 'autocomplete' => 'off')); ?>
                </td>
            </tr>
        </table>

        <?php echo $this->Form->input('tags', array('class' => 'span12', 'label' => '<i class="icon-tags"></i> Mots-clés (séparer par des virgules)')); ?>

        <?php echo $this->Form->button('<i class="icon-ok-sign"></i> Partager', array('class' => 'btn btn-large btn-primary pull-right', 'id'=>'bouton_partager', 'type' => 'submit')); ?>
        <?php echo $this->Form->end(); ?>

    </fieldset>
</div>