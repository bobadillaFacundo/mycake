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
            <?= $this->Html->link(__('Edit Precio'), ['action' => 'edit', $precio->idProducto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Precio'), ['action' => 'delete', $precio->idProducto], ['confirm' => __('Are you sure you want to delete # {0}?', $precio->idProducto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Precio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Precio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="precio view content">
            <h3><?= h($precio->idProducto) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdProducto') ?></th>
                    <td><?= $this->Number->format($precio->idProducto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monto') ?></th>
                    <td><?= $this->Number->format($precio->monto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($precio->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
