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
            <?= $this->Html->link(__('Edit Pedidoproducto'), ['action' => 'edit', $pedidoproducto->idPedido], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pedidoproducto'), ['action' => 'delete', $pedidoproducto->idPedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoproducto->idPedido), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pedidoproducto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pedidoproducto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pedidoproducto view content">
            <h3><?= h($pedidoproducto->idPedido) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($pedidoproducto->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPedido') ?></th>
                    <td><?= $this->Number->format($pedidoproducto->idPedido) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdProducto') ?></th>
                    <td><?= $this->Number->format($pedidoproducto->idProducto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($pedidoproducto->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($pedidoproducto->cantidad) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
