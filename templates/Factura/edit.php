<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $factura
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $factura->numero],
                ['confirm' => __('Are you sure you want to delete # {0}?', $factura->numero), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Factura'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factura form content">
            <?= $this->Form->create($factura) ?>
            <fieldset>
                <legend><?= __('Edit Factura') ?></legend>
                <?php
                    echo $this->Form->control('precioTotal');
                    echo $this->Form->control('fecha');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
