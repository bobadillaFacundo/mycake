<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $stock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stock->idProducto],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stock->idProducto), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Stock'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stock form content">
            <?= $this->Form->create($stock) ?>
            <fieldset>
                <legend><?= __('Edit Stock') ?></legend>
                <?php
                    echo $this->Form->control('cantidad');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
