<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $precio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Precio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="precio form content">
            <?= $this->Form->create($precio) ?>
            <fieldset>
                <legend><?= __('Add Precio') ?></legend>
                <?php
                    echo $this->Form->control('monto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
