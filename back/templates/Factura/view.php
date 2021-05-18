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
            <?= $this->Html->link(__('Edit Factura'), ['action' => 'edit', $factura->numero], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Factura'), ['action' => 'delete', $factura->numero], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->numero), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Factura'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Factura'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factura view content">
            <h3><?= h($factura->numero) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdPedido') ?></th>
                    <td><?= $this->Number->format($factura->idPedido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $this->Number->format($factura->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrecioTotal') ?></th>
                    <td><?= $this->Number->format($factura->precioTotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($factura->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
