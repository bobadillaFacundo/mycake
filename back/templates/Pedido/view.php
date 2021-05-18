<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pedido
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->idPedido], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->idPedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->idPedido), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pedido'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pedido'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pedido view content">
            <h3><?= h($pedido->idPedido) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdPedido') ?></th>
                    <td><?= $this->Number->format($pedido->idPedido) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCliente') ?></th>
                    <td><?= $this->Number->format($pedido->idCliente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($pedido->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
