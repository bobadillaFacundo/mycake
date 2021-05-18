<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pedidoproducto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pedidoproducto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pedidoproducto form content">
            <?= $this->Form->create($pedidoproducto) ?>
            <fieldset>
                <legend><?= __('Add Pedidoproducto') ?></legend>
                <?php
                    echo $this->Form->control('precio');
                    echo $this->Form->control('cantidad');
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
