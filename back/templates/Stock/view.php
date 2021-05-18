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
            <?= $this->Html->link(__('Edit Stock'), ['action' => 'edit', $stock->idProducto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Stock'), ['action' => 'delete', $stock->idProducto], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->idProducto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stock'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Stock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stock view content">
            <h3><?= h($stock->idProducto) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdProducto') ?></th>
                    <td><?= $this->Number->format($stock->idProducto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($stock->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($stock->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
